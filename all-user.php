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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center text-primary"><i class="mdi mdi-account-details"></i> All
                                    Users
                                </h2>
                                <!-- <p class="card-description"> Add class <code>.table-bordered</code> </p> -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> STN <i class="mdi mdi-account-circle-outline"></i>
                                            </th>
                                            <th> User Name <i class="mdi mdi-account"></i></th>
                                            <th> Email <i class="mdi mdi-email-box"></i></th>
                                            <th> Ceil <i class="mdi mdi-phone"></i></th>
                                            <th> Birthday <i class="mdi mdi-calendar-today"></i></th>
                                            <th> Address <i class="mdi mdi-map-marker"></i></th>
                                            <th> Action <i class="mdi mdi-account"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include('db-config.php');

                                            if($link == true){
                                                $query = "SELECT * FROM user_registration";
                                                $sql = mysqli_query($link, $query);
                                                // var_dump($sql); data check
                                                if(mysqli_num_rows($sql)> 0){
                                                    while($rows=mysqli_fetch_assoc($sql)){
                                                        echo $rows['user_name']. "<br>";
                                                    }
                                                }
                                                else{
                                                    echo "Data nai";
                                                }
                                            }
                                        ?>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Sabbir Hossain </td>
                                            <td>mdsabbir477470@gmail.com</td>
                                            <td> 01888559287 </td>
                                            <td> 24/07/2003 </td>
                                            <td> Dhaka </td>
                                            <td> Edit <i class="mdi mdi-pencil"></i>|| Delete <i
                                                    class="mdi mdi-delete-circle"></i>
                                            </td>
                                        </tr>
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

                <?php
    }
    else{
        header("Location: login.php?msg= Don't try it. Please login!");
    }
?>