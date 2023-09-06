<?php 
    $id = $_GET['id'];
    
    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $query = "DELETE FROM add_new_brand WHERE id = $id";

    $sql = mysqli_query($link, $query);
    if($link == true){
        header("Location: all-brand.php?msg=Brand Delete Done");
    }
    else{
        header("Location: all-brand.php?msg=Brand Not Delete");
    }
?>