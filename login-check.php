<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// upload file......
// var_dump($_FILES['photo']); // check data 

if($username == "sabbir hossain" && $password == "12345678"){
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
}
else{
    header("Location: login.php?msg=sorry, some problem please try again!");
}


?>