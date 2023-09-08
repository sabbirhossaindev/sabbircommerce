<?php
    $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
    $id = $_GET['id'];
    $cateName = $_POST['cateName']; 
    $cateEmail = $_POST['cateEmail'];
    $cateCode = $_POST['cateCode'];
    $cateImg = $_POST['cateImg'];

    $query = "UPDATE category SET name='$cateName', cate_email='$cateEmail', code='$cateCode', image='$cateImg' WHERE id = $id";

    $sql = mysqli_query($link, $query);

    if($sql == true){
        header("Location: all-category.php?msg= User Update Done!");
    } else {
        header("Location: all-category.php?msg= User Not Update");
    }
?>