<?php

include('common-function.php');
$newPrice = new codemanbd();
echo "price link = ". $newPrice->product_calculation(10, 20);
?>