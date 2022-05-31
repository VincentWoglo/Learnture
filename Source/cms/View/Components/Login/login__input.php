<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <title>Admin - Login</title>
</head>
<body>
    <section class="login">
        <div class="container">
            <form action="" method="POST">
            <h1 class="title">Admin Portal</h1><br />
                <input type="text" name="email__input" class="email__input" placeholder="Email"><br />
                <input type="password" name="password__input" class="password__input" placeholder="Password"><br />
                <input type="submit" name="submit__input" class="submit__input" value="Log in">
            </form>
        </div>
    </section>
</body>
</html>