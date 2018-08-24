<?php

$user = 'root';
$pass = 'kjaksf';
$db = 'quantumsoftware';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Greate Work!!";

?>
