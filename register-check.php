<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$ceil = $_POST['ceil'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$message = $_POST['message'];
$link = mysqli_connect("localhost","root","","sabbircommerce");

if($link == true){

    $query = "INSERT INTO user_registration (user_name,user_email,user_password,user_ceil,	user_birthday,user_address,message) 
    VALUES ('$username', '$email', '$password', '$ceil', '$birthday', '$address', '$message')";
    
    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: login.php?msg= $username registration successfully");
    }
    else{
        echo "$username sorry some problem data!";
    }
} 
else{
    echo"Sorry, some problem hare!";
}

?>