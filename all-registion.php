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
                    <!-- Page Title Header Ends overflow-auto-->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h2 class="text-center my-lg-1"><span class="text-primary">Registration</span> <i
                                        class="mdi mdi-account-details text-success"></i>
                                </h2>
                                <table
                                    class="table table-striped table-hover table-responsive-sm table-responsive-lg table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th> STN <i class="mdi mdi-account-circle-outline text-danger"></i>
                                            </th>
                                            <th> User Name <i class="mdi mdi-account text-success"></i></th>
                                            <th> Email <i class="mdi mdi-email-box text-warning"></i></th>
                                            <th> Ceil <i class="mdi mdi-phone text-success"></i></th>
                                            <th> Birthday <i class="mdi mdi-calendar-today text-danger"></i></th>
                                            <th> Address <i class="mdi mdi-map-marker text-success"></i></th>
                                            <th> Action <i class="mdi mdi-update text-danger"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <?php 
                                            include('db-config.php');

                                            if($link == true){
                                                $query = "SELECT * FROM user_registration";
                                                $sql = mysqli_query($link, $query);
                                                // var_dump($sql); data check
                                                if(mysqli_num_rows($sql)> 0){
                                                    $serial = 1;
                                                    while($rows=mysqli_fetch_assoc($sql)){
                                                        
                                            ?>
                                        <tr>
                                            <td> <?php echo $serial++ ?></td>
                                            <td> <?php echo $rows['user_name']; ?></td>
                                            <td> <?php echo $rows['user_email']; ?></td>
                                            <td> <?php echo $rows['user_ceil']; ?> </td>
                                            <td> <?php echo $rows['user_birthday']; ?> </td>
                                            <td> <?php echo $rows['user_address']; ?> </td>
                                            <td>
                                                <a href="reg-user-edit.php?id=<?php echo $rows['id'];?>">
                                                    <span class="btn-edit"> Edit <i class="mdi mdi-pencil text-light">
                                                        </i>
                                                    </span>
                                                </a>
                                                <a href="#">
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
                                                
                                                else{
                                                    echo "Data nai";
                                                    }
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