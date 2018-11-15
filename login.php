<?php
    session_start();

    //--------redirect if already logged in ------
        if( isset($_SESSION['user_id'])){
            header("Location: index.php");
        }

    require 'includes/auth_db.php';
    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])):
        $records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if(count ($results) >0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            header("Location: index.php"); //redirect
        }else{
            $message = 'Login Failed: The username or the password could not be verified!';
        }

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

        <!-- confirm on the screen if successful or not--->
        <?php if(!empty($message)): ?>
            <p class="msg-error"><?= $message ?></p>
        <?php endif; ?>

    </div>
</body>
</html>
