<?php
session_start();
session_destroy();
header("Location: login.php?msg=Successfully Logout!<br>If you want to login again");
?>