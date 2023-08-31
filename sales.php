<?php
include('common-function.php');

$newSales = new codemanbd();

echo "New Sales = ". $newSales->product_calculation(20, 80);
// echo "</br>";
// echo "New Sales = ". $newSales->$productName;

?>