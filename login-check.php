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

function imageUpload($file_form_name, $jpg, $png, $jpeg){
    $file_name = $file_form_name['name'];
    $file_extension = explode(".", $file_name);
    $file_type = $file_extension[1];
    if($file_type == $jpg || $file_type == $png || $file_type == $jpeg){
        $file_tmp = $file_form_name['tmp_name'];
        $file_destination = 'uploads/'.$file_name;
        move_uploaded_file($file_tmp,$file_destination);
        return "img upload done";
    }
}
imageUpload($_FILES['photo'],"jpg", "png", "jpeg");


?>