<?php
    $product_name = $_POST['product_name'];
    $product_catid = $_POST['product_catid'];
    $product_brandid = $_POST['product_brandid'];
    $product_buyprice = $_POST['product_buyprice'];
    $product_sellprice = $_POST['product_sellprice'];
    $imageName = $_FILES['product_fetuure_image']['name'];
    $tmpName = $_FILES['product_fetuure_image']['tmp_name'];
    $upload = 'uploads/' .$imageName;
    $link = mysqli_connect("localhost","root","","sabbircommerce");
    move_uploaded_file($tmpName, $upload);
    $product_quy = $_POST['product_quy'];
    $status = $_POST['status'];

    // echo $product_name."<br>";
    // echo $product_catid."<br>";
    // echo $product_brandid."<br>";
    // echo $product_buyprice."<br>";
    // echo $product_sellprice."<br>";
    // echo $product_quy."<br>";
    // echo $status."<br>";
    // echo $imageName;
    // exit();
    

    if($link == true){

        $query = "INSERT INTO product (product_name, product_catid, product_brandid, product_buyprice, product_sellprice, product_fetuure_image, product_quy, status) 
        VALUES ('$product_name', '$product_catid', '$product_brandid', '$product_buyprice','$product_sellprice','$imageName', '$product_quy','$status')";

        $sql = mysqli_query($link, $query);
    
        if($sql == true){
            move_uploaded_file($tmpName, $upload);
            header("Location: all-product.php?msg= Product add Done");
        }
        else{
            header("Location: all-product.php?msg= sorry some problem data!");
            echo "sorry some problem data!";
        }
    } 
    else{
        echo"Sorry, some problem hare!";
    }
?>