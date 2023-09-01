<?php
$username = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$userPassword = $_POST['user_password'];
$userCity = $_POST['user_city'];
$userTextarea = $_POST['user_textarea'];
include('db-config.php');

if($link == true){

    $query = "INSERT INTO add_new_user (user_name,user_email,user_password,	user_city, user_textarea) 
    VALUES ('$username', '$userEmail', '$userPassword', '$userCity', '$userTextarea')";
    
    $sql = mysqli_query($link, $query);


    if($sql == true){
        header("Location: all-user.php?msg= $username User Create successfully");
    }
    else{
        echo "User Some Problem.";
    }
} 
else{
    echo" Sorry, some problem hare!";
}
                                
?>