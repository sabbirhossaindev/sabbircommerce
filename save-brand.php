<?php

    $name = $_POST['name'];
    $code = $_POST['code'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $upload = 'uploads/' .$imageName;
    $link = mysqli_connect("localhost","root","","sabbircommerce");
    move_uploaded_file($tmpName, $upload);

    if($link == true){

        $query = "INSERT INTO add_new_brand (brand_name, brand_code, brand_img) 
        VALUES ('$name', '$code', '$imageName')";

        $sql = mysqli_query($link, $query);
    
        if($sql == true){
            move_uploaded_file($tmpName, $upload);
            header("Location: all-brand.php?msg= Brand add Done");
        }
        else{
            echo "sorry some problem data!";
        }
    } 
    else{
        echo"Sorry, some problem hare!";
    }

?>