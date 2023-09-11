<?php
    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $id = $_GET['id'];
    $productName = $_POST['product_name'];
    $productBuyPrice = $_POST['product_buyprice'];
    $productSellPrice = $_POST['product_sellprice'];
    // $product_fetuure_image = $_POST['product_fetuure_image'];
    $product_quy = $_POST['product_quy'];
    $status = $_POST['status'];
    $product_fetuure_image = $_FILES['product_fetuure_image']['name'];
    $tmpName = $_FILES['product_fetuure_image']['tmp_name'];
    $upload = 'uploads/' .$product_fetuure_image;

    $query = "UPDATE product SET productName='product_name', productBuyPrice='product_buyprice', productSellPrice='product_sellprice', product_fetuure_image='product_fetuure_image', product_quy='product_quy', status='status' WHERE id = $id";

    $result = mysqli_query($link, $query);


    if($result == true){
        move_uploaded_file($tmpName, $upload);
        header("Location: all-product.php?msg= Product Update  Done!");
    }
    else{
        header("Location: all-product.php?msg= Product Not Update!");
    }
?>