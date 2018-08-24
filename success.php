
<?php
echo 'Hello';
$user = 'quantvt6_admin';
$pass = 'Gideon&Said18';
$db = 'quantvt6_quantumsoftware';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$comments = $_POST['comments'];

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Connected!!";
$sql = "INSERT INTO contact (first, last, email, phone, comments) VALUES('$first_name',
        '$last_name', '$email', '$telephone', '$comments')";

 mysqli_query($db, $sql);
mysqli_close($db);
echo '<p>comments added.</p>';

/*
    if(isset($_POST['submit'])) {
    //if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ok = true;
        if(!isset($_POST['first_name']) || $_POST['first_name'] === ''){
            $ok = false;
            die("unable");
        } else {
            $first_name = $_POST['first_name'];
            echo $first_name;
        }

        if(!isset($_POST['last_name']) || $_POST['last_name'] === ''){
            $ok = false;
            die("unable");
        } else {
            $last_name = $_POST['last_name'];
        }

        if(!isset($_POST['email']) || $_POST['email'] === ''){
            $ok = false;
        } else {
            $email = $_POST['email'];
        }

        if(!isset($_POST['telephone']) || $_POST['telephone'] === ''){
            $ok = false;
        } else {
            $telephone = $_POST['telephone'];
        }

        if(!isset($_POST['comments']) || $_POST['comments'] === ''){
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        }

        if($ok) {


            $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
            echo "Greate Work!!";



         //   $db = mysqli_connect("$host:$port", $user, 'Muhammed1', $db);
        //    $db = mysqli_connect('localhost', 'root', '', 'quantumsoftware');
         //   echo '<p>' . $db . '</p>';
            $sql = sprintf("INSERT INTO contact (first_name, last_name, email, phone, comments) VALUES (
                '%s', '%s', '%s', '%s', '%s'
            )", mysqli_real_escape_string($db, $first_name),
                mysqli_real_escape_string($db, $last_name),
                mysqli_real_escape_string($db, $email),
                mysqli_real_escape_string($db, $telephone),
                mysqli_real_escape_string($db, $comments));
            mysqli_query($db, $sql);
            mysqli_close($db);
            echo '<p>comments added.</p>';

        }
    } else {
        die("unable to connect");
    } */
?>
