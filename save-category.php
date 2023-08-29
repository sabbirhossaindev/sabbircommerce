<?php

    $name = $_POST['name'];
    $cate_email = $_POST['email'];
    $code = $_POST['code'];

    $imageName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $upload = 'uploads/' .$imageName;
    $link = mysqli_connect("localhost","root","","sabbircommerce");
    move_uploaded_file($tmpName, $upload);

    if($link == true){

        $query = "INSERT INTO category (name, cate_email, code, image) 
        VALUES ('$name', '$cate_email', '$code', '$imageName')";

        $sql = mysqli_query($link, $query);
    
        if($sql == true){
            move_uploaded_file($tmpName, $upload);
            echo 'Data Save Done';
        }
        else{
            echo "sorry some problem data!";
        }
    } 
    else{
        echo"Sorry, some problem hare!";
    }

?>