<?php
session_start();

$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];

$link = mysqli_connect("localhost", "root", "", "sabbircommerce");

$query = "SELECT * FROM user_registration WHERE  user_name='$username' && user_email='$email' && user_password='$password'";

$result = mysqli_query($link, $query);

if(mysqli_num_rows($result)>0){
    $_SESSION['user_name'] = $username;
    header("Location: dashboard.php");
}
else{
    header("Location: login.php?msg=sorry, some problem please try again!");
}


?>