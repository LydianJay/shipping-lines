<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        <?php echo $title ?>
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?php echo base_url() . 'thirdparty/' ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo base_url() . 'thirdparty/' ?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

</head>

<body class="">


    <div class="d-flex flex-column justify-content-center align-items-stretch my-auto vh-100">
        <div class="container">

            <div class="card mb-5">
                <div class="card-header my-2">
                    <h3 class="typography-line text-center">Admin Login</h3>
                    <?php  
                        $msg = session()->get('msg');
                        if(isset($msg)) {
                    ?>
                    <p class="fs-5 text-danger text-center"><?php echo $msg ?> </p>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() . 'login' ?>" method="post">
                        <div class="container px-5">
                            <div class="form-group px-5">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>
                        <div class="container px-5">
                            <div class="form-group px-5">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="container d-flex flex-row justify-content-center align-items-center px-5">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url() . 'thirdparty/' ?>/assets/demo/demo.js"></script>
    <!-- <script>
</body>