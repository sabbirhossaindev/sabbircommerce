<?php

 session_start();
 if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<?php 
include('header.php');
?>


<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
        include('navigation.php');
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php 
            include('sidebar.php');
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Page Title Header Starts-->
                    <?php
                    include('mainbody-header.php');
                    ?>
                    <!-- Page Title Header Ends-->
                    edit brand
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php
                include('footer.php');
                ?>
            </div>
            <?php
    }
    else{
        header("Location: login.php?msg= Don't try it. Please login!");
    }
?>