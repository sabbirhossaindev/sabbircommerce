<?php
session_start();

$otpcode = $_GET['otpcode'];

$link = mysqli_connect("localhost", "root", "", "sabbircommerce");

$query = "UPDATE user_registration SET status=1 WHERE otpcode =$otpcode";

$result = mysqli_query($link, $query);

echo "Done";


?>