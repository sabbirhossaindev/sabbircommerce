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
                    edit form hare <br>
                    <?php
                        $id = $_GET['id'];
                        $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
                        $query = "SELECT * FROM category WHERE id = $id";
                        $sql = mysqli_query($link, $query);
                        $row = mysqli_fetch_assoc($sql);
                    ?>
                    <div>
                        <h2 class="text-center text-success">Upadate Category </h2>
                        <form action="category-update.php?id=<?php echo $row['id'];?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="from-group p-2 mb-2">
                                <label for="cateName">Cate Name</label>
                                <input type="text" name="cateName" class="form-control"
                                    value="<?php echo $row['name'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="cateEmail">Email</label>
                                <input type="email" name="cateEmail" class="form-control"
                                    value="<?php echo $row['cate_email'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="cateCode">Cate Code</label>
                                <input type="text" name="cateCode" class="form-control"
                                    value="<?php echo $row['code'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="cateImg">Brand Img</label>
                                <input type="file" name="cateImg" class="form-control"
                                    value="<?php echo $row['image'];?>">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2">Update Category</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </form>
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