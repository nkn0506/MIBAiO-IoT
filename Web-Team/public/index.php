<!DOCTYPE html>
<html class="wide wow-animation" lang="en" xmlns="https://www.w3.org/1999/xhtml">
<?php session_start(); ?>

<head>
    <title>MIBAiO Home</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="vission.css">
    <link rel="stylesheet" href="steps.css">
    <link rel="stylesheet" href="video.css">

    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .goog-logo-link {
            display: none !important;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

        .vertical {
            border-left: 2px solid white;
            height: 100%;
            position: absolute;
            left: -40%;
        }

        @media only screen and (min-device-width: 773px) and (max-device-width: 1399px) {
            .myclass {
                margin-bottom: 0;
            }
        }

        @media only screen and (min-width : 1400px) {
            .myclass {
                margin-bottom: 150px;
            }
        }

        #handle-view {
            margin-top: 80%;
            padding: 0 10px;
        }

        @media only screen and (min-width: 1200px) {
            #icon-view {
                display: none;
            }

            #handle-view {
                display: none;
            }

            #cart-size {
                display: none;
            }

            #icon-view-home {
                display: none;
            }

            #icon-view-more {
                display: none;
            }

        }

        @media only screen and (max-width: 1199px) {
            #cart-size-1 {
                display: none;
            }

            #home-tab {
                margin-right: 30px;
            }

            #more-tab {
                margin-right: 50px;
            }

            #icon-view-home {
                margin-left: 30px;
                margin-right: 20px;

            }

            #icon-view-more {
                margin-left: 30px;
                margin-right: 20px;
            }
        }

        #handle-view {
            font-size: 28px;
        }

        #cart-size {
            font-size: 28px;
        }

        #cart-size-1 {
            font-size: 35px;
        }

        .make-navbar {
            margin-right: 10%;
        }

        .ml-2,
        .mx-2 {
            margin-left: 1.5rem !important;
        }

        .feature video {
            width: 100%;
            height: 100%;
            position: absolute;
            object-fit: cover;
            z-index: 0;
        }

        .add-xs {

            border-radius: 50%;
            background-color: #0accbe;
            color: white;
            font-size: 40%;
            padding: .6px;
            bottom: 60%;
            left: 50%;
            line-height: 20px;
            min-width: 20px;
            text-align: center;
            position: absolute;
            background: #0accbe;
            font-weight: bold;



        }

        .lottie-container {
            overflow: hidden;
            width: 570px;
            height: 370px;
            /*Change as needed*/

        }

        .lottie-container2 {
            overflow: hidden;
            width: 570px;
            height: 370px;
            /*Change as needed*/

        }


        @media only screen and (min-device-width: 992px) and (max-device-width: 1200px) {
            .lottie-container {
                overflow: hidden;
                width: 360px;
                height: 370px;
                /*Change as needed*/
                margin-left: -20px;

            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 45.66667%;
                padding-right: 5px;
                padding-left: 55px;
                margin-left: -1px;
                margin-right: 90px;
                margin-top: -29px;

            }

            .lottie-container2 {
                overflow: hidden;
                width: 360px;
                height: 370px;
                margin-left: 76px;
                margin-top: -2pc;
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 992px) {
            .lottie-container {
                overflow: hidden;
                width: 340px;
                height: 360px;
                /*Change as needed*/
                margin-left: 10px;

            }


            .lottie-container2 {

                overflow: hidden;
                width: 340px;
                height: 360px;
                margin-top: -5pc;
                margin-left: -20px;
            }
        }

        .col-md-82 {
            flex: 0 0 66.66667%;
            max-width: 45.66667%;
            padding-right: 5px;
            padding-left: 5px;
            margin-left: -1px;
            margin-right: 90px;
            margin-top: -29px;
        }

        @media only screen and (min-device-width: 576px) and (max-device-width: 768px) {
            .lottie-container {
                overflow: hidden;
                width: 340px;
                height: 360px;
                margin-left: 10px;
            }

            .lottie-container2 {
                overflow: hidden;
                width: 340px;
                height: 360px;
                margin-left: -95px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 52.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-right: auto;
                margin-left: -30px;
            }
        }

        @media only screen and (min-device-width: 500px) and (max-device-width: 576px) {
            .lottie-container {
                overflow: hidden;
                width: 294px;
                height: 347px;
                /*Change as needed*/
                margin-left: 110px;
            }

            .lottie-container2 {
                overflow: hidden;
                width: 294px;
                height: 347px;
                margin-left: 110px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media only screen and (min-device-width: 400px) and (max-device-width: 500px) {
            .lottie-container {
                overflow: hidden;
                width: 294px;
                height: 347px;
                /*Change as needed*/
                margin-left: 70px;
            }

            .lottie-container2 {
                overflow: hidden;
                width: 294px;
                height: 347px;
                margin-left: 70px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 400px) {
            .lottie-container {
                overflow: hidden;
                width: 294px;
                height: 347px;
                /*Change as needed*/
                margin-left: 50px;
            }

            .lottie-container2 {
                overflow: hidden;
                width: 294px;
                height: 347px;
                margin-left: 50px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media only screen and (max-device-width: 320px) {
            .lottie-container {
                overflow: hidden;
                width: 250px;
                height: 320px;
                margin-left: 40px;
            }

            .lottie-container2 {
                overflow: hidden;
                width: 250px;
                height: 320px;
                margin-left: 40px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media screen and (width: 1024px) {
            .lottie-container {
                overflow: hidden;
                width: 360px;
                height: 370px;
                /*Change as needed*/
                margin-left: -20px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 45.66667%;
                padding-right: 5px;
                padding-left: 55px;
                margin-left: -1px;
                margin-right: 90px;
                margin-top: -29px;

            }

            .lottie-container2 {
                overflow: hidden;
                width: 360px;
                height: 370px;
                margin-left: 76px;
                margin-top: -2pc;
            }
        }

        @media screen and (width: 280px) {
            .lottie-container {
                overflow: hidden;
                width: 220px;
                height: 310px;
                margin-left: 35px;

            }

            .lottie-container2 {
                overflow: hidden;
                width: 220px;
                height: 300px;
                margin-left: 35px;
            }

            .col-md-82 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
                padding-right: 5px;
                padding-left: 5px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>

<body>
    <div class="preloader" id="loading">
        <div class="preloader-body">
            <div id="loading-center-object">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>

    <div class="page">
        <!-- FScreen-->
        <section class="section page-header-3 header-section header-offset">
            <!-- RD Navbar-->

            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="0px" data-xl-stick-up-offset="0px" data-xxl-stick-up-offset="0px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /><img class="brand-logo-light" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap"><a href="index.php">
                                <p class="rd-navbar-slogan rd-navbar-slogan-2 text-white-50 wow clipInLeft">Cool IoT
                                    Company</p>
                            </a>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav ">
                                <li class="rd-nav-item active">

                                    <a class="rd-nav-link" href="index.php" id="home-tab">
                                        <i class="fa fa-fw fa-home" id="icon-view-home"></i>Home
                                    </a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">
                                        <i class="fa fa-fw fa-drivers-license-o mr-3 ml-3" id="icon-view"></i>About
                                        Us</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="careers.html">
                                        <i class="fa fa-fw fa-graduation-cap mr-3" id="icon-view"></i>Careers</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">
                                        <i class="fa fa-fw fa-user-circle-o mr-3" id="icon-view"></i>Account</a>
                                    <div class="rd-menu rd-navbar-megamenu">
                                        <ul class="rd-navbar-megamenu-inner-acc">

                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">View Dashboard</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="#">Logout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html"><i class="fa fa-fw fa-phone mr-3 ml-4" id="icon-view"></i>Contact Us</a>
                                </li>
                                <li class="rd-nav-item">

                                    <a class="rd-nav-link more-navbar" href="#" id="more-tab">
                                        <i class="fa fa-fw fa-server" id="icon-view-more"></i>More
                                    </a>
                                    <div class="rd-menu rd-navbar-megamenu">
                                        <ul class="rd-navbar-megamenu-inner">
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">Our
                                                            Team</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="#FAQ">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="#">Privacy policy</a>
                                                    </li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">Our
                                                            Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login.php">Login</a>
                                                    </li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="register.php">Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <hr style="height:2px">


                            </ul>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-element rd-navbar-element_centered">
                                <div class="group-xs">
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline cart-icon" id="cart-size-1" href="cart.php"><span class="add-xs" id="cart-no">
                                            <script type="text/javascript">
                                                var cart = localStorage.getItem("cartNumbers");
                                                if (cart == null) {
                                                    document.write(0);
                                                } else {
                                                    document.write(cart);
                                                }
                                            </script>

                                        </span></a>
                                </div>
                                <div>
                                    <a class="icon icon-sm link-social-2 mdi mdi-facebook" href="#" id="handle-view"></a>
                                    <a class="icon icon-sm link-social-2 mdi mdi-twitter" href="#" id="handle-view"></a>
                                    <a class="icon icon-sm link-social-2 mdi mdi-instagram" href="#" id="handle-view"></a>
                                </div>
                            </div>
                        </div>

                        <div class="rd-navbar-element rd-navbar-element_right">
                            <div id="google_translate_element" style="display: none"></div>
                            <ul class="list-localization">
                                <li>
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline mr-2" id="cart-size" href="cart.php"><span class="add-xs" id="cart-no">
                                            <script type="text/javascript">
                                                var cart = localStorage.getItem("cartNumbers");
                                                if (cart == null) {
                                                    document.write(0);
                                                } else {
                                                    document.write(cart);
                                                }
                                            </script>

                                        </span></a>
                                </li>
                                <li>
                                    <label>
                                        <input id="Marathi" name="localization" value="Marathi" type="radio" autocomplete="Off" /><span class="label-text"><span class="notranslate">मराठी</span></span>
                                        <script>
                                            var button = document.querySelector("#Marathi");

                                            button.addEventListener("click", function onclick(event) {
                                                div1 = document.getElementById("belownavbar");
                                                div1.style = 'top: -40px';
                                                translateLanguage("Marathi");
                                            });
                                        </script>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input id="English" name="localization" value="English" type="radio" checked="checked" autocomplete="Off" /><span class="label-text">English</span>
                                        <script>
                                            var button = document.querySelector("#English");

                                            button.addEventListener("click", function onclick(event) {
                                                div1 = document.getElementById("belownavbar");
                                                div1.style = 'top: -40px';
                                                translateLanguage("English");
                                            });
                                        </script>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input id="Hindi" name="localization" value="Hindi" type="radio" autocomplete="Off" /><span class="label-text"><span class="notranslate">हिंदी</span></span>
                                        <script>
                                            var button = document.querySelector("#Hindi");

                                            button.addEventListener("click", function onclick(event) {
                                                div1 = document.getElementById("belownavbar");
                                                div1.style = 'top: -40px';
                                                translateLanguage("Hindi");
                                            });
                                        </script>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-dummy"></div>
                    </div>
                </nav>
            </div>
            <!-- Box Custom 4-->
            <div id="belownavbar" class="box-custom-4 bg-default">
                <div class="box-custom-4-aside bg-accent">
                    <div class="box-custom-4-aside-decoration">
                        <div class="box-custom-4-aside-decoration-bg wow clipInLeft"></div>
                        <div class="box-custom-4-icon-outer"><span class="box-custom-4-icon"></span></div>
                    </div>
                    <div class="box-custom-4-aside-content">
                        <div class="iphone-frame-4-group">
                            <div class="iphone-frame-4 wow clipInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                                <div class="iphone-frame-4-outer center-pattern"><img class="iphone-frame-4-inner" src="images/iphone-frame-3-404x745.png" alt="" width="404" height="745" />
                                    <!-- Owl Carousel-->
                                    <div class="owl-carousel" data-items="1" data-dots="false" data-nav="false" data-custom-next="#oc-iphone-frame-4-nav" data-stage-padding="0" data-loop="true" data-margin="0" data-easing="linear" data-autoplay="true" data-autoplay-timeout="2500" data-mouse-drag="false">
                                        <div class="item" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png)" data-loop="true"></div>
                                        <div class="item" style="background-image: url(images/iphone-frame-3-inner-2-300x650.png)" data-loop="true"></div>
                                        <div class="item" style="background-image: url(images/iphone-frame-3-inner-3-300x650.png)" data-loop="true"></div>
                                        <div class="item" style="background-image: url(images/iphone-frame-3-inner-4-300x650.png)" data-loop="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeIn" id="oc-iphone-frame-4-nav" data-wow-duration=".5s" data-wow-delay="1s"></div>
                            <div class="iphone-frame-4-next element-process"><span class="icon icon-lg linearicons-envelope"></span><a href="contact-us.html">
                                    <h5 class="text-white iphone-frame-4-next-text">Brochure</h5>
                                </a></div>
                        </div>
                    </div>

                </div>

                <div class="box-custom-4-main">
                    <div class="block-10">

                        <h2 class="font-weight-bold heading-decoration-2 wow fadeInUp" data-wow-delay=".4s"><span class="text-white">Do more with your</span>
                        </h2>
                        <h1 class="extra-light text-white heading-decoration-3 wow fadeInUp" data-wow-delay=".4s">
                            <span class="typed-text text-primary" data-strings="[&quot;phone&quot;, &quot;home&quot;, &quot; electrical appliances&quot;, &quot;lifestyle&quot;, &quot;smartphone&quot;, &quot;fingers&quot;]" data-type-speed="60">home</span>

                        </h1>
                        <br>
                        <div class="wow fadeInUp" data-wow-delay=".9s">
                            <p class="text-white-50 big wow clipInLeft" data-wow-delay="1.0s">MIBAiO provides
                                extraordinary Smart Home
                                experience unlike any other you've ever imagined!</p>
                        </div>

                        <div class="group wow clipInLeft wow fadeInUp" data-wow-delay="1.3s"><a class="button button-default-outline button-winona" href="#" data-wow-duration=".5s" data-wow-delay=".5s">
                                <div class="content-original">Read More</div>
                                <div class="content-dubbed">Read More</div>
                            </a><a class="button button-icon button-icon-right button-secondary button-winona wow clipInLeft wow fadeInUp" data-wow-delay="1.3s" href="Our_model" data-wow-duration=".5s">Buy Now</a></div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                        <!-- <div class="group-buttons-responsive group-middle"><a class="button button-secondary button-winona" href="model_copy.php">Learn More</a></div> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg1 wow fadeInUp">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul aria-multiselectable="false">
                                <li>

                                    <a class="collapse" role="button" data-toggle="collapse" href="#accordion-list-1" aria-controls="app-accordion-collapse-4" aria-expanded="true"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>

                                </li>

                                <li>
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#accordion-list-2" aria-controls="app-accordion-collapse-4" aria-expanded="false"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#accordion-list-3" aria-controls="app-accordion-collapse-4" aria-expanded="false"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <section id="services" class="services section section-md section-bg">
            <div class="container">

                <div class="container text-center"><span class="normal text-primary font-weight-bold text-uppercase wow fadeIn">Our
                        Product</span>
                    <h3 class="offset-top-7 font-weight-regular wow fadeIn">Introducing MIBAiO S series</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><a href="#Security">
                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/rqqkvjqf.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" style="width:50px;height:50px">
                                    </lord-icon>
                                </a></div>
                            <h4 class="title"><a href="#Security">Security</a></h4>
                            <p class="description">Our IoT cloud servers are TLS and SSL secured to provide 360°
                                security to your smart home</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><a href="#Voice">
                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/fpipqhrr.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" stroke="58" style="width:50px;height:50px">
                                    </lord-icon>
                                </a></div>
                            <h4 class="title"><a href="#Voice">Voice Control</a></h4>
                            <p class="description">Hands-Free Control of your electrical appliances using voice from
                                anywhere in the world using Google Voice
                                Assistant Alexa supported</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><a href="#MMC">
                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                    <lord-icon class="lord" src="https://cdn.lordicon.com/yzctygpq.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" style="width:50px;height:50px">
                                    </lord-icon>
                                </a></div>
                            <h4 class="title"><a href="#MMC">Multi-mode Control</a></h4>
                            <p class="description">Our system provides versatile control over your smart home by
                                providing selectable multi-mode controls</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><a href="#Surge">
                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/sbiheqdr.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" style="width:50px;height:50px">
                                    </lord-icon>
                                </a></div>
                            <h4 class="title"><a href="#Surge">Surge Proof</a></h4>
                            <p class="description">MIBAiO 4S is carefully engineered to withstand electrical power
                                fluctuations</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- About our Company-->
        <section class="section section-md bg-gray-100">
            <!-- Custom Software Development-->
            <!--Cloud & Network Consulting Services-->
            <div class="container" id="Security">
                <div class="row row-50 justify-content-xl-between align-items-center flex-md-row-reverse">
                    <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInRightSmall">
                        <div class="unit unit-spacing-1 align-items-center">
                            <div class="unit-left">
                                <div class="icon icon-style-1 mdi mdi-security"></div>
                            </div>
                            <div class="unit-body">
                                <h3>Security</h3>
                            </div>
                        </div>
                        <div class="block-4 offset-top-4">
                            <p class="big"></p>
                            <blockquote class="quote-light">
                                <i class="quote-light-mark ri-check-double-line"></i>
                                <!-- <div class="quote-light-mark linearicons-quote-open"></div> -->
                                <div class="quote-light-text">
                                    <p>MIBAiO regards security of your home one of it's top priorities and we maintain a
                                        vigilant stance against intruders by keeping our security systems up to date.
                                    </p>
                                </div>
                            </blockquote>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 wow fadeInLeftSmall left-pattern">
                        <!-- Slick Carousel-->
                        <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="0" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">

                            <div class="item">
                                <div class="phone-frame-2 feature"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                    <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">
                                        <video id="myvideo" src="images/security.mp4" loop muted autoplay playsinline></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container" id="Surge">
                <div class="row row-50 justify-content-xl-between align-items-center">
                    <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInLeftSmall">
                        <div class="unit unit-spacing-1 align-items-center">
                            <div class="unit-left">
                                <div class="icon icon-style-1 mdi mdi-flash"></div>
                            </div>
                            <div class="unit-body">
                                <h3>Surge Proof</h3>
                            </div>
                        </div>
                        <div class="block-4 offset-top-4">
                            <p class="big"></p>

                            <blockquote class="quote-light">
                                <i class="quote-light-mark ri-check-double-line"></i>
                                <!-- <div class="quote-light-mark linearicons-quote-open"></div> -->
                                <div class="quote-light-text">
                                    <p>Forgot to switch off the fan of your room before going out? No worries! <br>Get
                                        the best home automation experience at MIBAiO which provides a truely hands-free
                                        control of your home appliances from anywhere </p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 wow fadeInRightSmall right-pattern">

                        <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="1" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">
                            <!-- <div class="item">
                                <div class="phone-frame-2"><img class="phone-frame-2-outer"
                                        src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                    <div class="phone-frame-2-inner"
                                        style="background-image:url(images/iphone-frame-3-inner-1-300x650.png);"></div>
                                </div>
                            </div> -->
                            <div class="item">
                                <div class="phone-frame-2 feature"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                    <div class="phone-frame-2-inner">
                                        <video id="myvideo" src="images/surgeproof.mp4" loop muted autoplay playsinline></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="MMC">
                <div class="row row-50 justify-content-xl-between align-items-center flex-md-row-reverse">
                    <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInRightSmall">
                        <div class="unit unit-spacing-1 align-items-center">
                            <div class="unit-left">
                                <div class="icon icon-style-1 mdi mdi-access-point-network"></div>
                            </div>
                            <div class="unit-body">
                                <h3>Multi-Mode Control</h3>
                            </div>
                        </div>
                        <div class="block-4 offset-top-4">
                            <p class="big"></p>
                            <blockquote class="quote-light">
                                <i class="quote-light-mark ri-check-double-line"></i>
                                <!-- <div class="quote-light-mark linearicons-quote-open"></div> -->
                                <div class="quote-light-text">
                                    <p>In addition to the classic manual control feature, MIBAiO enables you to remote
                                        control your smart home through
                                        <br><br>
                                    <div class="icon icon-style-1 mdi mdi-wifi"></div> Internet <br><br>
                                    <div class="icon icon-style-1 mdi mdi-bluetooth"></div> Bluetooth.</p>
                                    <div class="group-buttons-responsive group-middle"><a class="button button-secondary button-winona" href="model_copy.php">View All
                                            Features</a><a class="button button-default-outline button-winona" style="color:#0accbe" href="about-us.html">Learn More</a></div>
                                </div>
                            </blockquote>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 wow fadeInLeftSmall left-pattern">

                        <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="1" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">
                            <div class="item">
                                <div class="phone-frame-2 feature"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                    <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">
                                        <video id="myvideo" src="images/mmc.mp4" loop muted autoplay playsinline></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="section section-box-custom-3-outer" id="about-us">
            <!-- Simple and Clear steps-->
            <section class="parallax-container section-lg section-box-custom-3 section-bottom-0 text-center" data-parallax-img="images/bg-image-1.jpg">
                <div class="parallax-content">
                    <div class=" container context-dark"><span class="normal text-white font-weight-bold text-uppercase wow fadeIn">About Our
                            Company</span>
                        <h3 class="offset-top-7 font-weight-regular typed-text-heading wow fadeIn" data-wow-delay=".1s">
                            <span>We</span><span class="typed-text text-primary" data-strings="[&quot;are a startup&quot;, &quot;strive towards innovation&quot;, &quot;automate your existing home appliances&quot;, &quot;help you upgrade your lifestyle&quot;, &quot;deliver you delightful experiences&quot;, &quot;design for you&quot;]" data-type-speed="100">are a startup</span>
                        </h3>
                        <p class="wow fadeIn" data-wow-delay=".2s"><span style="max-width: 800px;">We are here to change
                                the Smart
                                Home Ecosystem in India <br>And we invite you to take a front seat in this
                                revolution.<br>Video coming
                                up soon!</span></p>
                        <!-- <a class="button-play mdi mdi-play mdi-24px wow fadeIn" href="https://youtu.be/sJ4Ho9A_v_8" data-lightgallery="item" data-wow-delay=".3s">
                            <svg class="button-play-shape" width="86" height="86" viewbox="0 0 88 88" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                                <rect x="1" y="1" width="86" height="86" rx="6" ry="6"></rect>
                            </svg></a> -->
                        <a id="play-video" class="video-play-button" href="#">
                            <span></span>
                        </a>

                        <div id="video-overlay" class="video-overlay-class">
                            <!--<a class="video-overlay-close">&times;</a>-->
                        </div>

                    </div>
                    <div class="box-custom-3-container container wow slideInUpSmall">
                        <div class="box-custom-3">
                            <div class="layout-bordered-1">
                                <div class="layout-bordered-1-item">
                                    <!-- Counter Classic-->
                                    <article class="counter-classic wow clipInLeft">
                                        <div class="counter-classic-main">
                                            <div class="counter">3</div><span class="small text-primary">+</span>
                                        </div>
                                        <h4 class="counter-classic-title text-black extra-lighter">Modes <br> of control
                                        </h4>
                                    </article>
                                </div>
                                <div class="layout-bordered-1-item">
                                    <!-- Counter Classic-->
                                    <article class="counter-classic wow clipInLeft" data-wow-delay=".1s">
                                        <div class="counter-classic-main">
                                            <div class="counter">14</div><span class="small text-primary">k</span>
                                        </div>
                                        <h4 class="counter-classic-title extra-lighter">Lines <br> of code</h4>
                                    </article>
                                </div>
                                <div class="layout-bordered-1-item">
                                    <!-- Counter Classic-->
                                    <article class="counter-classic wow clipInLeft" data-wow-delay=".2s">
                                        <div class="counter-classic-main">
                                            <div class="counter">5</div><span class="small text-primary">yrs</span>
                                        </div>
                                        <h4 class="counter-classic-title extra-lighter">Of warranty <br> MIBAiO
                                            guarantee</h4>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="more-services" class="section section-md more-services">
            <div class="container">
                <h3 class="offset-top-7 font-weight-regular wow fadeIn text-center">Our Vision and Mission</h3>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card wow fadeInUp" data-wow-delay=".3s" style='background-image: url("images/vission.jpg");'>
                            <div class="card-body">
                                <h4 class="card-title"><a href="">Our Vision</a></h4>
                                <p class="card-text">To make India renowned for quality design and technology</p>
                                <div class="read-more"><a href="about-us.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="card wow fadeInUp" data-wow-delay=".4s" style='background-image: url("images/mission.jpg");' data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h4 class="card-title"><a href="">Our Mission</a></h4>
                                <p class="card-text">To revolutionize the smart home ecosystem in India and make
                                    technology available to every household in the country</p>
                                <div class="read-more"><a href="about-us.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services-1" class="services-1 section section-md bg-gray-3 text-center">
            <div class="container">
                <div class="container"><span class="normal text-primary font-weight-bold text-uppercase wow fadeIn">Our Website</span>
                    <h3 class="offset-top-7 font-weight-regular wow fadeIn">How It Works</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box wow fadeInRight" data-wow-delay=".4s">
                            <div class="icon">
                                <img class="img-fluid" src="images/steps/select.svg" alt="">
                            </div>
                            <h4 class="title">Select your favourite model</h4>
                            <p class="description">Select the model that suits your needs from our collection of best price models</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box wow fadeInLeft" data-wow-delay=".55s">
                            <div class="icon">
                                <img class="img-fluid" src="images/steps/cart.svg" alt="">
                            </div>
                            <h4 class="title">Add it to your cart</h4>
                            <p class="description">Add it to your cart to ponder over it</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box wow fadeInLeft" data-wow-delay=".7s">
                            <div class="icon">
                                <img class="img-fluid" src="images/steps/select.svg" alt="">
                            </div>
                            <h4 class="title">Click on the Checkout button to Buy</h4>
                            <p class="description">Click on that Checkout button to buy yourself a smart home </p>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box wow fadeInLeft" data-wow-delay=".85s">
                            <div class="icon"><img class="img-fluid" src="images/steps/home.svg" alt=""></div>
                            <h4 class="title">Go to Your Home Dashboard</h4>
                            <p class="description"><strong>Login</strong> and go to your Home's dashboard to start experiencing the feel of a truly smart home</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <!-- Pricing plans-->
        <section class="parallax-container section-lg text-center" data-parallax-img="images/bg-image-2.jpg">
            <div class="parallax-content">
                <div class="container context-dark"><span class="normal text-white font-weight-bold text-uppercase wow fadeIn">Pricing plans</span>
                    <h3 class="offset-top-7 wow fadeIn" data-wow-delay=".1s">Choose Your MIBAiO model</h3>
                    <p class="wow fadeIn" data-wow-delay=".25s"><span style="max-width: 700px;">We offer three different
                            models
                            that cover you needs of home automation. They are provided via different modes of control to
                            automate your
                            aplliances according to your convenience.</span></p>
                    <div class="toggle-modern" aria-label="Pricing Switch Monthly/Yearly" id="pt-classic-toggle">
                        <div class="toggle-modern-text toggle-modern-text_default">upto 10 outputs</div>
                        <button class="toggle-modern-switch content-toggle" data-multitoggle="#pt-classic, #pt-classic-toggle"><span class="toggle-modern-switch-element"></span></button>
                        <div class="toggle-modern-text toggle-modern-text_alternate">upto 30 outputs</div>
                    </div>
                </div>
                <div class="container ot50">
                    <!-- Pricing Table Classic-->
                    <div class="pt-classic-group" id="pt-classic">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel_type-2" data-items="1" data-md-items="2" data-lg-items="3" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="30" data-lg-margin="20" data-xl-margin="30" data-mouse-drag="false">
                            <article class="pt-classic wow slideInRightLg" data-wow-delay=".5s">
                                <h4 class="pt-classic-title">Basic</h4>
                                <div class="pt-classic-price-outer">
                                    <div class="pt-classic-price" aria-hidden="false">
                                        <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                        <div class="pt-classic-price-value extra-light">1499</div>
                                    </div>
                                    <div class="pt-classic-price" aria-hidden="true">
                                        <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                        <div class="pt-classic-price-value extra-light">2499</div>
                                    </div>
                                </div>
                                <div class="pt-classic-divider"></div>
                                <ul class="pt-classic-list">
                                    <li>Control upto 10 appliances</li>
                                    <li>FREE installation</li>
                                    <li>Manual control</li>
                                    <li>Bluetooth control</li>
                                    <li aria-disabled="true">Internet control</li>
                                    <li aria-disabled="true">Voice control</li>
                                    <li aria-disabled="true">Upgrade more outputs</li>
                                </ul>
                                <div class="pt-classic-footer"><a class="button button-default-outline button-icon button-icon-right button-winona font-weight-regular" href="#"><span class="icon mdi mdi-arrow-right"></span>Select Plan</a></div>
                            </article>
                            <article class="pt-classic pt-classic_style-2 pt-classic_preferred wow scaleIn">
                                <div class="pt-classic-header">
                                    <h4 class="pt-classic-title">Premium</h4>
                                    <div class="pt-classic-price-outer">
                                        <div class="pt-classic-price" aria-hidden="true">
                                            <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                            <div class="pt-classic-price-value extra-light">4699</div>
                                        </div>
                                        <div class="pt-classic-price" aria-hidden="false">
                                            <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                            <div class="pt-classic-price-value extra-light">2999</div>
                                        </div>
                                        <div class="badge badge-1">Save 20%</div>
                                    </div>
                                </div>
                                <div class="pt-classic-divider"></div>
                                <ul class="pt-classic-list">
                                    <li>Control upto 10 appliances</li>
                                    <li>FREE installation</li>
                                    <li>Manual Control</li>
                                    <li>Internet Control</li>
                                    <li>Bluetooth Control</li>
                                    <li>Voice control</li>
                                    <li>Upgrade more outputs</li>
                                </ul>
                                <div class="pt-classic-footer"><a class="button button-secondary button-shadow button-icon button-icon-right button-winona font-weight-regular" href="#"><span class="icon mdi mdi-arrow-right"></span>Select Plan</a>
                                    <p class="pt-classic-note text-transparent">#Vedant recommends</p>
                                </div>
                            </article>
                            <article class="pt-classic pt-classic_style-3 wow slideInLeftLg" data-wow-delay=".5s">
                                <h4 class="pt-classic-title">Standard</h4>
                                <div class="pt-classic-price-outer">
                                    <div class="pt-classic-price" aria-hidden="false">
                                        <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                        <div class="pt-classic-price-value extra-light">2199</div>
                                    </div>
                                    <div class="pt-classic-price" aria-hidden="true">
                                        <div class="pt-classic-price-currency font-weight-regular"> ₹</div>
                                        <div class="pt-classic-price-value extra-light">5199</div>
                                    </div>
                                </div>
                                <div class="pt-classic-divider"></div>
                                <ul class="pt-classic-list">
                                    <li>Control upto 10 appliances</li>
                                    <li>FREE installation</li>
                                    <li>Manual control</li>
                                    <li>Internet control</li>
                                    <li>Voice control</li>
                                    <li aria-disabled="true">Bluetooth control</li>
                                    <li aria-disabled="true">Upgrade more outputs</li>
                                </ul>
                                <div class="pt-classic-footer"><a class="button button-default-outline button-icon button-icon-right button-winona font-weight-regular" href="#"><span class="icon mdi mdi-arrow-right"></span>Select Plan</a></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Popular Questions-->
        <section id="FAQ" class="section section-md bg-gray-100 text-center wow fadeInUp" data-wow-delay=".3s">
            <div class=" container"><span class="normal text-primary font-weight-bold text-uppercase wow fadeIn">Popular
                    Questions</span>
                <h3 class="offset-top-7 wow fadeIn" data-wow-delay=".1s">Frequently Asked Questions</h3>
                <div class="row row-30 justify-content-center justify-content-lg-start wow fadeIn" id="app-accordion" data-wow-delay=".2s">
                    <div class="col-md-10 col-lg-6">
                        <!-- Bootstrap Collapse-->
                        <div class="card-group-custom card-group-classic card-group-classic_1" role="tablist" aria-multiselectable="false">
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-classic">
                                <div class="card-header" id="app-accordion-heading-4" role="tab">
                                    <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#app-accordion-collapse-4" aria-controls="app-accordion-collapse-4" aria-expanded="true">What does "MIBAiO" mean?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse show" id="app-accordion-collapse-4" role="tabpanel" aria-labelledby="app-accordion-heading-4" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>MIBAiO is an acronym for Manual Internet Bluetooth All In One. </p>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-classic">
                                <div class="card-header" id="app-accordion-heading-1" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#app-accordion-collapse-1" aria-controls="app-accordion-collapse-1" aria-expanded="false">What are the
                                            key features of your product?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse" id="app-accordion-collapse-1" role="tabpanel" aria-labelledby="app-accordion-heading-1" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>Our product offers Manual, Internet and Bluetooth all-in-one functionality
                                            along with voice
                                            control. To know more about key features, please refer the product brochure.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-classic">
                                <div class="card-header" id="app-accordion-heading-2" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#app-accordion-collapse-2" aria-controls="app-accordion-collapse-2" aria-expanded="false">Why should I
                                            purchase your product?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse" id="app-accordion-collapse-2" role="tabpanel" aria-labelledby="app-accordion-heading-2" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>The major advantage is price: You get a premium model under ₹3000. You don’t
                                            have to call an
                                            electrician for installation, we make it very easy to install for you.
                                            Second advantage is Made in
                                            INDIA: Our product is carefully designed for a standard Indian household of
                                            world-class quality.
                                            We are working under the Make in India, Digital India, Aatmanirbhar Bharat
                                            initiatives. </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6">
                        <!-- Bootstrap Collapse -->
                        <div class="card-group-custom card-group-classic card-group-classic_1" role="tablist" aria-multiselectable="false">
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-classic wow clipInLeft">
                                <div class="card-header" id="app-accordion-heading-3" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#app-accordion-collapse-3" aria-controls="app-accordion-collapse-3" aria-expanded="false">Do
                                            you provide post sales service?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse" id="app-accordion-collapse-3" role="tabpanel" aria-labelledby="app-accordion-heading-3" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>Yes, we do. Our team is ready for your support 24x7x365 with our qualified
                                            Engineers.</p>
                                    </div>
                                </div>
                            </article>
                            <!-- Bootstrap card-->

                            <!-- Bootstrap card-->
                            <article class="card card-custom card-classic">
                                <div class="card-header" id="app-accordion-heading-6" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#app-accordion-collapse-6" aria-controls="app-accordion-collapse-6" aria-expanded="false">Does your
                                            product control the speed of fan digitally?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse" id="app-accordion-collapse-6" role="tabpanel" aria-labelledby="app-accordion-heading-6" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>No as of now. But you'll get that funtion in the upcoming versions of MIBAiO.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="card card-custom card-classic">
                                <div class="card-header" id="app-accordion-heading-5" role="tab">
                                    <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#app-accordion-collapse-5" aria-controls="app-accordion-collapse-5" aria-expanded="false">What can I do
                                            with your product?
                                            <div class="card-arrow"></div>
                                        </a></div>
                                </div>
                                <div class="collapse" id="app-accordion-collapse-5" role="tabpanel" aria-labelledby="app-accordion-heading-5" data-parent="#app-accordion">
                                    <div class="card-body">
                                        <p>Talk to your home appliances with Alexa and Google voice assistant. Control
                                            your exising
                                            appliances with your smartphone and also manually(like we do now using the
                                            traditional switches).
                                            Apart from that, you can monitor your electricity consumption by wach
                                            connected appliance via your
                                            smartphone App.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Download our App-->
        <section class="section section-md text-center">
            <div class="container"><span class="normal text-primary font-weight-bold text-uppercase wow fadeIn">Home
                    2.0</span>
                <h3 class="offset-top-7 wow fadeIn" data-wow-delay=".1s">Step into the future, Upgrade to MIBAiO</h3>
                <p class="wow fadeIn" data-wow-delay=".2s"><span style="max-width: 720px; opacity: .65;">It’s time to
                        upgrade
                        your home and experience the futuristic smart home! Contact us directly to enhance your smart
                        home
                        experience.</span></p>
            </div>
            <div class="group"><a class="button button-default-outline button-winona text-black wow fadeIn" href="#" data-wow-delay=".1s"><span></span>View More</a><a class="button button-secondary button-winona wow fadeIn" href="contact-us.html" data-wow-delay=".1s"><span></span>Contact Us</a></div>
            <div class="layer-01 section-decoration-4-decoration"><img class="layer" src="images/landscape_1.svg" alt="" data-depth="0.15"><img class="layer" src="images/landscape_2-3.svg" alt="" data-depth="0.3"></div>
        </section>
        <!-- Subscribe to Get Notified!-->
        <section class="section section-md-last block-footer-classic">
            <div class="block-footer-classic-wrap">
                <div class="container">
                    <div class="row row-50 justify-content-lg-between">
                        <div class="col-md-6 col-lg-6 wow clipInLeft">
                            <p class="heading heading-alternate-1 text-white">Subscribe to Get Notified!</p>
                            <p class="big text-white-50">Sign up to receive updates and fresh news from us.</p>
                            <form class="rd-form rd-mailform form-inline form-shadow block-11 ot30" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-wrap">
                                    <input class="form-input" id="subscribe-form-email-11" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="subscribe-form-email-11">Enter Your E-mail</label>
                                </div>
                                <div class="form-button">
                                    <button class="button button-secondary button-winona" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-xl-5 wow clipInLeft">
                            <p class="heading heading-alternate-1 text-white">Time to Get Started</p>
                            <p class="big text-white-50">Upgrade your home to a smart home with MIBAiO!</p>
                            <div class="group ot30"><a class="button button-secondary button-winona" href="#">Get a
                                    Quote</a><a class="button button-default-outline button-winona text-white" href="about-us.html">More About
                                    MIBAiO</a></div>
                        </div>
                    </div>
                </div>
                <!-- Page Footer-->
                <footer class="section footer-classic footer-classic_boxed text-white-50 text">
                    <div class="hr container">
                        <hr />
                    </div>
                    <div class="footer-classic-main">
                        <div class="container">
                            <div class="row row-50 justify-content-lg-between">
                                <div class="col-sm-7 col-lg-3 col-xl-2"><a class="brand" href="index.html"><img src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /></a>
                                    <p><span class="text" style="max-width: 250px;">MIBAiO is the leading provider of
                                            the best automation
                                            system for your smarthome.</span></p><a class="button button-color-8 button-winona text-black wow fadeIn" href="login.php">Sign In</a>
                                </div>
                                <div class="col-sm-5 col-lg-3 col-xl-2">
                                    <h4 class="footer-classic-title text-white">About</h4>
                                    <ul class="list footer-classic-list text-white">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="our-team">Our Team</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-7 col-lg-5 col-xl-3">
                                    <h4 class="footer-classic-title text-white">Useful Links</h4>
                                    <ul class="list footer-classic-list footer-classic-list_2-cols text-white">
                                        <li><a href="register.php">Sign Up</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="login.php">Log In</a></li>
                                        <li><a href="#FAQ">FAQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-5 col-lg-9 col-xl-2">
                                    <h4 class="footer-classic-title text-white">Contact info</h4>
                                    <div class="row row-20 row-sm-35">
                                        <div class="col-6 col-sm-12 col-lg-8 col-xl-12">
                                            <div class="row row-10 text-white-50">
                                                <div class="col-lg-6 col-xl-12"><a href="mailto:info@mibaio.xyz">info@mibaio.xyz</a></div>
                                                <div class="col-lg-6 col-xl-12"><a class="big" href="tel:+91-9673660515">+91-9673660515</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-12 col-lg-4 col-xl-12 text-right text-sm-left">
                                            <div class="group group-xs"><a class="link link-social-1 mdi mdi-twitter" href="#"></a><a class="link link-social-1 mdi mdi-facebook" href="#"></a><a class="link link-social-1 mdi mdi-instagram" href="#"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr container">
                        <hr />
                    </div>
                    <div class="footer-classic-aside">
                        <div class="container">
                            <p class="text-white-50 rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>MIBAiO</span><span>.&nbsp;</span><a href="privacy-policy.html"> Privacy Policy</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="core.min.js"></script>
    <script src="script.js"></script>


    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

    <script type="text/javascript">
        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: true,
                mirror: false
            });
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }

        function translateLanguage(lang) {
            googleTranslateElementInit();
            var $frame = $('.goog-te-menu-frame');

            if (!$frame.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
            }
            $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
            return false;
        }
        $('#services a').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').animate({
                scrollTop: $($anchor.attr('href')).offset().top - 80 + "px"
            }, 1500);
            event.preventDefault();
        });
    </script>
</body>

</html>