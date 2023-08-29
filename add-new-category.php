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
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center"><span class="text-primary">Add New Category</span> <i
                                        class="mdi mdi-account-plus text-success"></i></h2>
                                <form class="forms-sample" action="save-category.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName1"
                                            placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputCity1">Code</label>
                                        <input type="text" class="form-control" name="code" id="exampleInputCity1"
                                            placeholder="type code">
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="image" id="" aria-label="Upload" class="mt-2 my-3">
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    <button class="btn btn-primary">Cancel</button>
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

                <?php
    }
    else{
        header("Location: login.php?msg= Don't try it. Please login!");
    }
?>