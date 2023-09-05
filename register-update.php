<?php
$id = $_GET['id'];
$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$ceil = $_POST['ceil'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];

$link = mysqli_connect("localhost", "root", "", "sabbircommerce");
$query = "UPDATE user_registration SET user_name='$username', user_email='$email', ceil='$ceil', birthday='$birthday', address='$address', message='$message' WHERE id= $id";

$result = mysqli_query($link, $query);

if($result == true){
    header("Location: all-registion.php?msg=registion update done");
}
else{
    header("Location: all-registion.php?msg=registion not update done");
}
?>