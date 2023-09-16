<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>sabbircommerce ||Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="./assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4">Register 🥰</h2>
                        <p style="color: green;" class="text-center mb-4">
                            <?php 
                                if(isset($_GET['msg'])){
                                    echo $_GET['msg'];
                                }
                            ?>
                        </p>
                        <div class="auto-form-wrapper">
                            <form action="register-check.php" method="POST">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-account"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="type your email">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-email"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="ceil" name="ceil" class="form-control" placeholder="phone number">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="date" name="birthday" class="form-control" placeholder="birthday">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar-clock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="address" class="form-control"
                                            placeholder="you address">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="message" placeholder=" message me"></textarea>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-message-reply-text"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex ">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" checked> I agree to the
                                            terms </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                                    <a href="login.php" class="text-black text-small">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="./assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>