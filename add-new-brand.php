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

                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center text-primary">Add New Brand</h2>
                                <form action="save-brand.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Brand Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Brand Code</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="code" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Brand logo</label>
                                        <input type="file" name="image" id="" aria-label="Upload" class="mt-2 my-3">
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>

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