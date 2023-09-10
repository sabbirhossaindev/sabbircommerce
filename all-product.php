<?php

 session_start();
 if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<?php 
include('header.php');
?>
<style>
.btn-edit {
    cursor: pointer;
    background-color: green;
    color: white;
    padding: 8px;
    border-radius: 4px;
}

a {
    text-decoration: none;
}

.btn-delete {
    cursor: pointer;
    background-color: crimson;
    color: white;
    padding: 8px;
    border-radius: 4px;
    margin-left: 5px;
}
</style>

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
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h2 class="text-center text-primary">All Product <i
                                        class="mdi mdi-account-plus text-success"></i>
                                </h2>
                                <p class="text-center text-danger">
                                    <?php
                                            if(isset($_GET['msg'])){
                                                echo $_GET['msg'];
                                            }
                                        ?>
                                </p>
                                <table
                                    class="table table-striped table-hover table-responsive-sm table-responsive-lg table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th> PDT ID </th>
                                            <th> PDT Name </th>
                                            <th> product category </th>
                                            <th> product Brand </th>
                                            <th> Buy price </th>
                                            <th> Sell Price </th>
                                            <th> Quantity </th>
                                            <th> Status </th>
                                            <th> Image </th>
                                            <th> Action <i class="mdi mdi-update text-danger"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('db-config.php');

                                        if($link == true){
                                            $query = "SELECT * FROM product";
                                            $sql = mysqli_query($link, $query);
                                            // var_dump($sql);
                                            if(mysqli_num_rows($sql) > 0){
                                                $serial = 1;
                                                while($rows= mysqli_fetch_assoc($sql)){
                                            ?>
                                        <tr>
                                            <td> <?php echo $serial++;?> </td>
                                            <td> <?php echo $rows['product_name'];?> </td>
                                            <td> <?php echo $rows['product_catid'];?> </td>
                                            <td> <?php echo $rows['product_brandid'];?> </td>
                                            <td> <?php echo $rows['product_buyprice'];?> </td>
                                            <td> <?php echo $rows['product_sellprice'];?> </td>
                                            <td> <?php echo $rows['product_quy'];?> </td>
                                            <td> <?php echo $rows['status'];?> </td>
                                            <td> <img src="uploads/<?php echo $rows['product_fetuure_image'];?>"
                                                    alt="pro img"> </td>
                                            <td>
                                                <a href="product-edit.php?id=<?php echo $rows['id'];?>">
                                                    <span class="btn-edit"> Edit <i class="mdi mdi-pencil text-light">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="product-delete.php?id=<?php echo $rows['id']?>"
                                                    onclick=" return confirm('<?php echo $rows['product_name'];?> Are you sure want to Delete')">
                                                    <span class="btn-delete"> Delete <i
                                                            class="mdi mdi-delete-circle text-danger text-light">
                                                        </i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                                    
                                                    }
                                                }
                                                
                                            }
                                            else{
                                                echo "data pai nai";
                                            }
                                            
                                        ?>
                                    </tbody>
                                </table>
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