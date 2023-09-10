<?php
    $id = $_GET['id'];

    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $query = "DELETE FROM product WHERE id=$id";

    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: all-product.php?msg= Product Delete Done!");
    }
    else{
        header("Location: all-product.php?msg= Product Not Delete Done!");
    }
?>