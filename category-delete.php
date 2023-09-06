<?php
    $id = $_GET['id'];

    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $query = "DELETE FROM category WHERE id = $id";

    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: all-category.php?msg=Category Delete Done");
    }
    else{
        header("Location: all-category.php?msg=Category Not Delete");
    }

?>