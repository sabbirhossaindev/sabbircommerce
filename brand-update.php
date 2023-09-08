<?php
    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $id = $_GET['id'];
    $brandName = $_POST['brandName'];
    $brandCode = $_POST['brandCode'];
    $brandImg = $_POST['brandImg'];

    $query = "UPDATE add_new_brand SET brandName='brand_name', brandCode='brand_code', brand_img='brandImg' WHERE id = $id";

    $sql = mysqli_query($link, $query);
    if($sql == true){
        header("Location: all-brand.php?msg=Brand added Done!");
    }
    else{
        header("Location: all-brand.php?msg=Brand Not added!");
    }
?>