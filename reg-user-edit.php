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

                    <?php
                        $id = $_GET['id'];
                        $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
                        $query = "SELECT * FROM add_new_user WHERE id = $id";

                        $result = mysqli_query($link, $query);
                        $row = mysqli_fetch_assoc($result);

                    ?>

                    <div>
                        <h2 class="text-center text-success">Upadate Registion</h2>
                        <form action="register-update.php?id=<?php echo $row['id'];?>" method="POST">
                            <div class="from-group p-2 mb-2">
                                <label for="user_name">User Name</label>
                                <input type="text" name="username" class="form-control"
                                    value="<?php echo $row['user_name'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="email">User Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="<?php echo $row['user_email'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="password">User Password</label>
                                <input type="text" name="password" class="form-control"
                                    value="<?php echo $row['user_password'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="ceil">phone Number</label>
                                <input type="text" name="ceil" class="form-control"
                                    value="<?php echo $row['user_ceil'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="birthday">Birthday</label>
                                <input type="date" name="birthday" class="form-control"
                                    value="<?php echo $row['user_birthday'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="address">User Address</label>
                                <input type="text" name="address" class="form-control"
                                    value="<?php echo $row['user_address'];?>">
                            </div>
                            <div class="from-group p-2 mb-2">
                                <label for="message">Message</label>
                                <input type="text" name="message" class="form-control"
                                    value="<?php echo $row['message'];?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2">Update Register</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- Page Title Header Ends-->

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