<?php
    $id = $_GET['id'];

    $link = mysqli_connect("localhost","root","","sabbircommerce");
    $query = "DELETE FROM user_registration WHERE id=$id";
    $sql = mysqli_query($link, $query);
    // var_dump($sql);
    // exit();
    if($sql == true){
        header("Location: all-registion.php?msg= Delete Done!");
    } else{
        header("Location: all-registion.php?msg= Delete Not Done!");
    }

 ?>