<?php
    /***********Connection to the db called auth *********/
    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'auth';

    /***********PDO connection is considered more secure than mysql connection ********/
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }catch(PDOException $e){
        die ("Connection failed: ". $e->getMessage());
    }
?>
