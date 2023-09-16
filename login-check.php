<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", "root", "", "sabbircommerce");

$query = "SELECT * FROM user_registration WHERE  user_name='$username' && user_email='$email' && user_password='$password'";

$result = mysqli_query($link, $query);

if(mysqli_num_rows($result)>0){
    $_SESSION['username'] = $username;
    $_SESSION['user_email'] = $email;
    header("Location: dashboard.php");
}
else{
    header("Location: login.php?msg=sorry, some problem please try again!");
}


?>