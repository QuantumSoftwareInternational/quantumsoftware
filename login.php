<?php
    if (!empty($_POST['email']) && !empty($_POST['password'])):
        echo $_POST['email'];
        die();
    endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quantum Software International</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body >
    <?php include 'includes/navigation.php' ?>
    <div class="auth">
        <h1 class = "title"> Please Login Below</h1>
        <span> or <a href="register.php">Register Here</a> </span>

        <form action="login.php" method="POST">
            <input type="text" placeholder = "Enter your email" name = "email">
            <input type="password" placeholder = "and password" name = "password">
            <input type="submit" >
        </form>

    </div>
</body>
</html>
