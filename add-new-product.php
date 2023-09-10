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
                                <h2 class="text-center"><span class="text-primary">Add New Product</span> <i
                                        class="mdi mdi-account-plus text-success"></i></h2>
                                <form class="forms-sample" action="save-product.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="productName">Name</label>
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="productName">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_catid">Select product category</label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="product_catid">
                                            <?php
                                            include('db-config.php');

                                            if($link == true){
                                                $query = "SELECT * FROM category";
                                                $sql = mysqli_query($link, $query);
                                                // var_dump($sql);
                                                if(mysqli_num_rows($sql) > 0){
                                                    $serial = 1;
                                                    while($rows = mysqli_fetch_assoc($sql)){

                                            ?>

                                            <option value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?>
                                            </option>
                                            <?php
                                            }
                                                }
                                            }
                                            else{
                                                echo "Data Not Hare";
                                            }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_brandid">Select product Brand</label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="product_brandid">
                                            <?php

                                            if($link == true){
                                                $queryb = "SELECT * FROM add_new_brand";
                                                $sqlb = mysqli_query($link, $queryb);
                                                // var_dump($sql);
                                                if(mysqli_num_rows($sqlb) > 0){
                                                    $serial = 1;
                                                    while($rowb = mysqli_fetch_assoc($sqlb)){

                                            ?>

                                            <option value="<?php echo $rowb['id'];?>"><?php echo $rowb['brand_name'];?>
                                            </option>
                                            <?php
                                            }
                                                }
                                            }
                                            else{
                                                echo "Data Not Hare";
                                            }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_buyprice">Buy price</label>
                                        <input type="text" class="form-control" name="product_buyprice"
                                            placeholder="product buy price">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_sellprice">Sell Price</label>
                                        <input type="text" class="form-control" name="product_sellprice"
                                            placeholder="product sell price">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_quy">Quantity</label>
                                        <input type="text" class="form-control" name="product_quy"
                                            placeholder="product quantity">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" name="status"
                                            placeholder="product quantity">
                                    </div>

                                    <div class="form-group">
                                        <label for="product_fetuure_image">Image</label>
                                        <input type="file" name="product_fetuure_image" aria-label="Upload"
                                            class="mt-2 my-3">
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
            </div>
            <?php
    }
    else{
        header("Location: login.php?msg= Don't try it. Please login!");
    }
?>