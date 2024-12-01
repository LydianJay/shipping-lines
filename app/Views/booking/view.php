<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo base_url() . 'bootslander/' ?>assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

    <header id="header" class="header d-flex align-items-center fixed-top border-secondary border-bottom">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename"><?php echo $title ?></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero">Bookings</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <div class="page-title dark-background" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Shipping Lines</h1>
                            <p class="mb-0">Your Journey, Our Priority.
                                Seamlessly book vessels for island adventures across Caraga. Fast, reliable, and tailored for your travel needs. Start exploring today!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End Page Title -->



    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Shipping Lines</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Made by Coro And Friends</p>
                        <p>Surigao Del Norte State University</p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>

      

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- thirdparty JS Files -->
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/aos/aos.js"></script>
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/thirdparty/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?php echo base_url() . 'bootslander/' ?>assets/js/main.js"></script>

</body>

</html>