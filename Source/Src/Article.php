<?php
    //pSR-4 autoload
    require('../vendor/autoload.php');
    //Queue class autoload
    require_once('./Libraries/vendor/autoload.php');
    $loader = new \Twig\Loader\FilesystemLoader('./Views');
    $twig = new \Twig\Environment($loader);
    use BackEnd\Model\Connection;
    use BackEnd\Model\Articles;
    //use Src\Views\TwigExtension;
    error_reporting(1);
    session_start();

    use Src\Controller\RecentlySearched;

    $ArticleId = $_GET['Read'];
    $Article = new Articles();
    $QueryResults = $Article->getArticleId($ArticleId);
    //print_r($QueryResults[0]);
    //foreach($QueryResults as $Results){
    //    echo htmlentities($Results["body_text"]);
    //}
    //echo "<div>".$QueryResults[0]["body_text"]."</div>";
    //$newString = html_entity_decode($QueryResults[0]["body_text"], ENT_NOQUOTES);
    //echo $newString;
    //$filter = new \Twig\TwigFilter('html_entity_decode', function ($string) {
    //    return html_entity_decode($string, ENT_NOQUOTES);
    //});
    //$twig->addFilter($filter);
    //https://twig.symfony.com/doc/2.x/advanced.html
    //https://stackoverflow.com/questions/57526174/twig-uses-htmlspecialchars-internally-for-escaping-how-do-i-pass-ent-noquotes




    $twig->getExtension(\Twig\Extension\EscaperExtension::class)
    ->setEscaper('html_no_quotes', function($twig_environment, $string, $charset) {
        return html_entity_decode($string, ENT_NOQUOTES);
    })
;
$RecentlySearch = new RecentlySearched();
$RecentlySearch->HomeRecentlySearched();

    echo $twig->render("Article.html.twig", [
        "QueryResults" => $QueryResults[0],
        "BodyText" => $QueryResults[0]["body_text"],
        "Txt" => $QueryResults[0]['value']
    ]);
?>