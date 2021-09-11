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