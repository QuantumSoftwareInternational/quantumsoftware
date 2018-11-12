<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'auth';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }catch(PDOException $e){
        die ("Connection failed: ". $e->getMessage());
    }

    if (!empty($_POST['email']) && !empty($_POST['password'])):
        //enter the new user in the db
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
        <h1 class = "title"> Please register below</h1>
        <span> or <a href="login.php">Login Here</a> </span>

        <form action="register.php" method="POST">
            <input type="text" placeholder = "Enter your email" name = "email">
            <input type="password" placeholder = "and password" name = "password">
            <input type="password" placeholder = "confirm password" name = "confirm_password">
            <input type="submit" >
        </form>

    </div>

</body>
</html>
