
<?php
    spl_autoload_register("myAutoLoader");

    function myAutoLoader($className){
        $path = "../Model/";
        $extension = ".php";
        $fullpath = $path . $className . $extension;

        include_once $fullpath;
    }
    $Articles = new Articles();
    //var_dump($CRUD->post());
    $Articles->storeArticle();
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <title>Admin - Dashboard</title>
</head>
<body>
    <div class="container">
    <header>
        <nav class="navigation">
            <div class="container">
                <div class="wrapper">
                    <span class="logo__wrapper">
                        <img src="./img/Logo.svg" alt="" class="logo">
                        <h1 class="logo_text">Learnture</h1>
                    </span>
                    <ul class="menu__list" id="menu__list">
                        <li class="editor active" onclick="ShowTabs(0,'#fff')" id="tabs">Editor</li>
                        <li class="analytic" onclick="ShowTabs(1, '#fff')" id="tabs">Analytics</li>
                        <li class="articles" onclick="ShowTabs(2, '#fff')" id="tabs">Articles</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    
    <main>
        <div class="container">
            <div class="panel">
               <div class="container">
                   <h1 class="title">Add new article</h1>
                   <form action="" class="article__input" method="POST">
                       <input type="text" class="article__name__input" name="article__name__input" placeholder="Article name"><br />
                       <label for="article__description" class="article__description__label" name="article__description__label">Description</label><br />
                       <textarea name="article__description" id="" class="article__description" cols="30" rows="5"></textarea><br />
                       <select name="article__category" id="">
                           <option value="Programming" name="programming__category">Programming</option>
                           <option value="Ui Design" name="ui__design__category">Ui Design</option>
                           <option value="Networking" name="networking__category">Networking</option>
                       </select><br />
                       <textarea class="text__editor" name="text__editor" id="text__editor" rows="10" cols="80"></textarea><br />
                       <input type="submit" class="publish__button" value="Publish" name="publish__button">
                   </form>
               </div>
            </div>

            <div class="panel">
                <p>Data in graph here</p>
            </div>
            <div class="panel">
                <?php
                 $readArticle = new Articles();
                 //var_dump($CRUD->post());
                 $data = $readArticle->readArticle();
                 foreach ($data as $row){?>
                 <div class="display__article">
                    <div class="container">
                        <div class="wrapper">
                        <h1 class="card__title"><?=$row['title']?></h1>
                        <p class=""><?=$row['category']?></p>
                        <div class="inputs">
                        <input type="button" class="edit" value="Edit">
                        <input type="button" class="delete" value="Delete">
                        </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </main>
    </div>
    <script src="../script/tabs__control.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../script/editor.js"></script>
</body>
</html>