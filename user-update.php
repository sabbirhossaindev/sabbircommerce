<?php
    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $id = $_GET['id'];
    $name = $_POST['username']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $textarea = $_POST['textarea'];

    $query = "UPDATE add_new_user SET user_name='$name', user_email='$email', user_password='$password', user_city='$city', user_textarea='$textarea' WHERE id = $id";

    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: all-user.php?msg= User Update Done!");
    } else {
        header("Location: all-user.php?msg= User Not Update");
    }
?>