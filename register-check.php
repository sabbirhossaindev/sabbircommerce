<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$ceil = $_POST['ceil'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$message = $_POST['message'];
$otpcode = rand(100, 1000);

include('db-config.php');

if($link == true){

    $query = "INSERT INTO user_registration (user_name,user_email,user_password,user_ceil,	user_birthday,user_address,message, otpcode) 
    VALUES ('$username', '$email', '$password', '$ceil', '$birthday', '$address', '$message', $otpcode)";
    
    $sql = mysqli_query($link, $query);

    if($sql == true){
        // header("Location: login.php?msg= $username registration successfully");
        echo '<h3 class="text-success text-center">registration successfully</h3>';
    }
    else{
        echo "$username sorry some problem data!";
    }
} 
else{
    echo"Sorry, some problem hare!";
}

// Email Verification Start

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

   
 

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'ssl://smtp.gmail.com'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            $mail->Username = 'mdsabbir477470@gmail.com';  // sender gmail host              

            $mail->Password = 'bfsuyhwrsdlcnnwp'; // sender gmail host password   
            


            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 465;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('mdsabbir477470@gmail.com', "sabbircommerce"); // sender's email and name

            $mail->addAddress($email, "Sabbir Hossin Dev");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Be Come a php Developer';

            ob_start(); 
            ?>

<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Sabbircommerce </title>
    <style>
    /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

    img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
    }

    body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
    }

    table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
    }

    /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
    .body {
        background-color: #f6f6f6;
        width: 100%;
    }

    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
    }

    /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
    .main {
        background: #fff;
        border-radius: 3px;
        width: 100%;
    }

    .wrapper {
        box-sizing: border-box;
        padding: 20px;
    }

    .footer {
        clear: both;
        padding-top: 10px;
        text-align: center;
        width: 100%;
    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
        color: #999999;
        font-size: 12px;
        text-align: center;
    }

    /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
    h1,
    h2,
    h3,
    h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px;
    }

    h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
    }

    p,
    ul,
    ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px;
    }

    p li,
    ul li,
    ol li {
        list-style-position: inside;
        margin-left: 5px;
    }

    a {
        color: #3498db;
        text-decoration: underline;
    }

    /* -------------------------------------
          BUTTONS
      ------------------------------------- */
    .btn {
        box-sizing: border-box;
        width: 100%;
    }

    .btn>tbody>tr>td {
        padding-bottom: 15px;
    }

    .btn table {
        width: auto;
    }

    .btn table td {
        background-color: #ffffff;
        border-radius: 5px;
        text-align: center;
    }

    .btn a {
        background-color: #ffffff;
        border: solid 1px #3498db;
        border-radius: 5px;
        box-sizing: border-box;
        color: #3498db;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 12px 25px;
        text-decoration: none;
        text-transform: capitalize;
    }

    .btn-primary table td {
        background-color: #3498db;

    }

    .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff;
    }

    /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .align-center {
        text-align: center;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    .mt0 {
        margin-top: 0;
    }

    .mb0 {
        margin-bottom: 0;
    }

    .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
    }

    .powered-by a {
        text-decoration: none;
    }

    hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0;
    }

    .away {
        text-align: center;
    }

    .confirm a {
        align-items: center;
    }

    .fb {
        justify-content: center;
    }

    .text-success {
        color: green;
    }

    /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
    @media only screen and (max-width: 620px) {
        table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }

        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
            font-size: 16px !important;
        }

        table[class=body] .wrapper,
        table[class=body] .article {
            padding: 10px !important;
        }

        table[class=body] .content {
            padding: 0 !important;
        }

        table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
        }

        table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }

        table[class=body] .btn table {
            width: 100% !important;
        }

        table[class=body] .btn a {
            width: 100% !important;
        }

        table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
    }

    @media all {
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }

        .btn-primary table td:hover {
            background-color: #34495e !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
        }
    }
    </style>
</head>

<body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">

                    <table class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <h1 class="text-success">Confirm your email</h1>
                                            <h2 class="away">You are just one step away</h2>
                                            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="confirm">
                                                                            <a href=http://localhost/cmbd/sabbircommerce/verify.php?otpcode=<?php echo  $otpcode;?>
                                                                                target="_blank">confirm email
                                                                                <?php echo  $otpcode;?>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p> আপনি কোন কিছু বুজতে না পারলে কমেন্ট করতে পারেন বা আমার ফেসবুক আইডিতে নক
                                                দিতে পারেন । <br><a href="https://www.facebook.com/sabbirhossaindev/"
                                                    class="fb">facebook</a></p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <footer class="footer my-3">
                                                <!-- Remove the container if you want to extend the Footer to full width. -->
                                                <div class="">
                                                    <!-- Footer -->
                                                    <footer class="text-center text-lg-start text-dark"
                                                        style="background-color: #ECEFF1">
                                                        <section class="p-3">
                                                            <div class="container text-center text-md-start mt-5">
                                                                <!-- Grid row -->
                                                                <div class="row mt-3">
                                                                    <!-- Grid column -->
                                                                    <div
                                                                        class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                                                        <!-- Content -->
                                                                        <h6 class="text-uppercase fw-bold">Service</h6>
                                                                        <p>
                                                                            - Web Designer & Developer 🥰 <br>
                                                                            - PHP Laravel & DBMS Developer 💗 <br>
                                                                            - WordPress WIX & Shopify Developer🤙
                                                                        </p>
                                                                    </div>
                                                                    <!-- Grid column -->

                                                                    <!-- Grid column -->

                                                                    <!-- Grid column -->
                                                                    <div
                                                                        class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                                                        <!-- Links -->
                                                                        <h6 class="text-uppercase fw-bold">Contact</h6>
                                                                        <p><i
                                                                                class="mdi mdi-map-marker text-success"></i>
                                                                            Rangpur, Dhaka</p>
                                                                        <p><i
                                                                                class="mdi mdi-email-outline mr-1 text-warning"></i>mdsabbir477470@gmail.com
                                                                        </p>
                                                                        <p><i
                                                                                class="mdi mdi-phone mr-1 text-danger"></i>
                                                                            +880188855-9287</p>
                                                                        <p><i
                                                                                class="mdi mdi-printer mr-1 text-primary"></i>
                                                                            +880171922-8487</p>
                                                                    </div>
                                                                    <!-- Grid column -->
                                                                </div>
                                                                <!-- Grid row -->
                                                            </div>
                                                        </section>
                                                        <!-- Section: Links  -->

                                                        <!-- Copyright -->
                                                        <div class="text-center p-3">
                                                            <span class="text-center text-success">copyright
                                                                ©
                                                                2019-<?php echo date("Y");?> Powered by <a
                                                                    href="https://dev-sabbir.web.app/">Sabbir Hossain
                                                                    Dev</a> All
                                                                rights reserved.
                                                            </span>
                                                        </div>
                                                        <!-- Copyright -->
                                                    </footer>
                                                    <!-- Footer -->
                                                </div>
                                                <!-- End of .container -->
                                            </footer>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>

                    <!-- START FOOTER -->
                    <div class="footer">
                        <table border="0" cellpadding="0" cellspacing="0">

        </tr>
    </table>
    </div>
    <!-- END FOOTER -->

    <!-- END CENTERED WHITE CONTAINER -->
    </div>
    </td>
    <td>&nbsp;</td>
    </tr>
    </table>
</body>

</html>

<?php
    $contents = ob_get_contents(); 
    $mail->Body    =  $contents; 

    $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) { // handle error.

        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

    }



//Email Verification End


?>