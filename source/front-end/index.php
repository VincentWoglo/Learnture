<?php
    spl_autoload_register("myAutoLoader");

    function myAutoLoader($className){
        $path = "./Model/";
        $extension = ".php";
        $fullpath = $path . $className . $extension;
        include_once $fullpath;
    }
        $Articles = new Articles();
        $readArticle = $Articles->ReadArticle();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time();?>">
    <title>Learnture</title>
</head>
<body>
        <header>
            <nav>
                <section class="navigation">
                    <div class="container">
                        <div class="left__nav">
                            <span class="logo__wrapper">
                                <img src="./img/Logo.svg" alt="" class="logo">
                                <span class="logo__text">Learnture</span>
                            </span>
                            <ul class="menu">
                                <li class="programming">Programming</li>
                                <li class="ui__design">Ui Design</li>
                                <li class="devops">DevOPS</li>
                            </ul>
                        </div>
                        <div class="right__nav">
                            <form action="">
                                <input type="text" class="search__input">
                            </form>
                            <span class="search__icon">
                                <i class="fas fa-search" id="search"></i>
                            </span>
                        </div>
                    </div>
                </section>
            </nav>

            <section class="hero">
                <div class="container">
                    <div class="left__hero">
                        <h1 class="title">
                            It’s time to move beyond video tutorial
                        </h1>
                        <p class="description">
                            Learn at your own paste and escape your limitations
                        </p>
                        <input type="button" value="Get Started" class="action__btn">
                    </div>
                </div>
            </section>
        </header>


        <main>
            <section class="tutorial">
                <div class="container">
                    <h1 class="title">Tutorials</h1>
                    <div class="card__wrapper">
                        <?php
                            foreach ($readArticle as $row){?>
                        <div class="card">
                            <div class="img">
                                <img src="" alt="" class="card__img">
                            </div>
                            <div class="card__texts">
                                <h1 class="card__title">
                                <?=$row['title'];?>
                                </h1>
                                <p class="card__description">
                                <?=$row['description'];?>
                                </p>
                                <a href="" class="card__btn__link">
                                <span class="card__btn">
                                    View
                                    <i id="chevron__right" class="fas fa-chevron-right"></i>
                                </span>
                                </a>
                            </div>
                        </div>
                        <?php
                 }
                ?>
                    </div>
                </div>
            </section>

            <section class="email__list">
                <div class="container">
                    <h1 class="join__text">
                        Join our email list
                    </h1>
                    <form action="">
                        <input type="text" class="join__input" placeholder="Example@example.com"><input
                         type="button" class="join__btn" value="Join">
                    </form>
                </div>
            </section>

            <section class="quad">
                <div class="container">
                    <div class="quad__1">
                        <div class="left">

                        </div>
                        <div class="right">
                            <h1 class="title">
                                Microsoft 365 for business
                            </h1>
                            <p class="description__1">
                                Microsoft 365 for business Microsoft 365 for business
                            </p>
                            <p class="description__2">
                                Microsoft 365 for business Microsoft 365 for business Microsoft 365 for business Microsoft 365 for business
                            </p>
                            <a href="" name="quad__btn__link" class="quad__btn__link">
                                <span class="quad__btn">
                                    Learn More
                                    <i id="chevron__right" class="fas fa-chevron-right"></i>
                                </span>
                                </a>
                        </div>
                    </div>

                    <div class="quad__2">
                        <div class="left">

                        </div>
                        <div class="right">
                            <h1 class="title">
                                Microsoft 365 for business
                            </h1>
                            <p class="description__1">
                                Microsoft 365 for business Microsoft 365 for business
                            </p>
                            <p class="description__2">
                                Microsoft 365 for business Microsoft 365 for business Microsoft 365 for business Microsoft 365 for business
                            </p>
                            <a href="" name="quad__btn__link" class="quad__btn__link">
                                <span class="quad__btn">
                                    Learn More
                                    <i id="chevron__right" class="fas fa-chevron-right"></i>
                                </span>
                                </a>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>

        <footer>
            <div class="container">
                <span class="logo__wrapper">
                    <img src="./img/Logo.svg" alt="" class="logo">
                    <span class="logo__text">Learnture</span>
                </span>
                <p class="copy__rights">
                    All Right Reserved &copy; 2021
                </p>
            </div>
        </footer>
</body>
</html>