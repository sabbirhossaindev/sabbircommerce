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
                    <?php
                        $id = $_GET['id'];
                        $link = mysqli_connect("localhost", "root", "", "sabbircommerce");
                        $query = "SELECT * FROM product WHERE id = $id";

                        $result = mysqli_query($link, $query);
                        $row = mysqli_fetch_assoc($result);

                    ?>

                    <div>
                        <h2 class="text-center text-primary">Update Product</h2>
                        <form action="product-update.php?id=<?php echo $row['id'];?>" method="POST">
                            <div class="from-group p-2 mb-2">
                                <label for="product_name">Product Name</label>
                                <input type="text" name="product_name" class="form-control"
                                    value="<?php echo $row['product_name'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="product_buyprice">product buy price</label>
                                <input type="text" name="product_buyprice" class="form-control"
                                    value="<?php echo $row['product_buyprice'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="product_sellprice">product_sellprice</label>
                                <input type="text" name="product_sellprice" class="form-control"
                                    value="<?php echo $row['product_sellprice'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="product_sellprice"> product Feture Image</label>
                                <input type="file" name="product_fetuure_image" class="form-control"
                                    value="<?php echo $row['product_fetuure_image'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="product_quy">product Quyenty</label>
                                <input type="text" name="product_quy" class="form-control"
                                    value="<?php echo $row['product_quy'];?>">
                            </div>

                            <div class="from-group p-2 mb-2">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control"
                                    value="<?php echo $row['status'];?>">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2">Update User</button>
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