<?php

$link = mysqli_connect("localhost","root","","sabbircommerce");

function DataSave($link, $query){
    if($link == true){
        $sql = mysqli_query($link, $query);

        if($sql == true){
            echo "Data Save done";
        }
        else{
            echo "Data some problem hare";
        }
    }
}


?>