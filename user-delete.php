<?php
    $id = $_GET['id'];

    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $query = "DELETE FROM add_new_user WHERE id=$id";

    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: all-user.php?msg=User Delete Done!");
    }
    else{
        header("Location: all-user.php?msg=User Not Delete Done!");
    }
?>