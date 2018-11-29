<?php
    session_start();

    require 'includes/auth_db.php';
    //--------redirect if already logged in ------
    if( isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
    //-------------------------------------------/

    $message_good = '';
    $message_error = '';
    if (!empty($_POST['email']) && !empty($_POST['password'])):
        //enter the new user in the db
            //---todo: confirm that the account is not in the db before registering
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

        if($stmt->execute()):
            $message_good = 'Successfully created your account';
        else:
            $message_error = 'Sorry, there was a problem creating your account';
        endif;
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
            <!---todo: confirm that the two passwords match ---->
            <input type="password" placeholder = "confirm password" name = "confirm_password">
            <input type="submit" >
        </form>
        <!-- confirm on the screen if successful or not--->
        <?php if(!empty($message_good)): ?>
            <p class="msg-good"><?= $message_good ?></p>
        <?php endif; ?>
        <?php if(!empty($message_error)): ?>
            <p class="msg-error"><?= $message_error ?></p>
        <?php endif; ?>

    </div>

</body>
</html>
