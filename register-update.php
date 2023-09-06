<?php
    $link = mysqli_connect("localhost","root","","sabbircommerce");
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ceil = $_POST['ceil'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $message = $_POST['	message'];

    $query = "UPDATE user_registration SET user_name='$username', user_email='$email', user_password='$password', user_ceil='$ceil', user_birthday='$birthday', user_address='$address', message='$message' WHERE id= $id";

    $result = mysqli_query($link, $query);

    // var_dump($result);
    // exit();

    if($result == true){
        header("Location: all-registion.php?msg=registion update done");
    }
    else{
        header("Location: all-registion.php?msg=registion not update");
    }
?>