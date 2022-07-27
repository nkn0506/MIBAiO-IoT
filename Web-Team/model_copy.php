<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php session_start(); ?>

<head>
    <title>Model Details</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="model.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="from_man.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /*.ie-panel {
            display: none;
            background: #212121;
      
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }



        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }



         .product-small {
        max-width: 10em;
    } */

        /*ul {
            float: left;
        }

        

        ul li img {
            width: 130px;
            height: 130px;
        }

        ul li a::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 1px;
            top: 100%;
            left: 0;
            background: #FFFFFF;
            transition: transform 0.5s;
            transform: scaleX(0);
            transform-origin: right;
        }

        ul li a:hover {
            color: #FFFFFF;
        }

        ul li a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }*/
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

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
            margin-bottom: 10px;
            max-width: 8em;
        }

        #belownavbar {
            top: -40px;
        }

        .small-img {
            width: 100%;
            border: 1.5px solid #4E83F1;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            margin-top: 10px;
            font-size: 16px;
        }

        .sproduct {
            padding-bottom: 30px;
            padding-right: 20px;
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

        iframe {
            display: none !important
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

        .hr-line {
            margin-top: 5px;
            width: 50%;
            float: left;
        }

        .hr-pro {
            width: 95%;
            float: left;
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

        @media (min-width: 1200px) {
            #nav-laptop {
                margin-left: 12%;
            }
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
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <section class=" section page-header-3 header-section header-offset">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="0px" data-xl-stick-up-offset="0px" data-xxl-stick-up-offset="0px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /><img class="brand-logo-light" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap"><a href="index.html">
                                <p class="rd-navbar-slogan rd-navbar-slogan-2 text-white-50 wow clipInLeft">Cool IoT
                                    Company</p>
                            </a>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav ">
                                <li class="rd-nav-item active">
                                    <!-- <a class="rd-nav-link mr-4" href="index.html">
                                        <i class="fa fa-fw fa-home ml-2 mr-3" id="icon-view"></i>Home
                                    </a> -->
                                    <a class="rd-nav-link" href="index.html" id="home-tab">
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
                                    <!-- RD Navbar Megamenu-->
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
                                    <!-- <a class="rd-nav-link more-navbar mr-5" href="#" id="more-tab">
                                        <i class="fa fa-fw fa-server ml-2 mr-3" id="icon-view"></i>More
                                    </a> -->
                                    <a class="rd-nav-link more-navbar" href="#" id="more-tab">
                                        <i class="fa fa-fw fa-server" id="icon-view-more"></i>More
                                    </a>
                                    <!-- RD Navbar Megamenu-->
                                    <div class="rd-menu rd-navbar-megamenu">
                                        <ul class="rd-navbar-megamenu-inner">
                                            <li class="rd-megamenu-item">
                                                <ul class="rd-megamenu-list">
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="our-team.html">Our
                                                            Team</a></li>
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="#">FAQ</a></li>
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
                                    <!--<a class="icon icon-sm link-social-2 mdi mdi-cart-plus" id="cart-size-1" href="#"><span class="add-xs" style="font-size: 25px;">0</span></a>-->
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline cart-icon" id="cart-size-1" href="your_cart"><span class="add-xs" id="cart-no">
                                            <script type="text/javascript">
                                                var cart = localStorage.getItem("cartNumbers");
                                                document.write(cart);
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
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline mr-2" id="cart-size" href="#"><span class="add-xs" id="cart-no">
                                            <script type="text/javascript">
                                                var cart = localStorage.getItem("cartNumbers");
                                                document.write(cart);
                                            </script>

                                        </span></a>
                                </li>
                                <li>
                                    <label>
                                        <input id="Marathi" name="localization" value="Marathi" type="radio" autocomplete="Off" /><span class="label-text"><span class="notranslate">मराठी</span></span>
                                        <script>
                                            var button_1 = document.querySelector("#Marathi");

                                            button_1.addEventListener("click", function onclick(event) {
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
                                            var button_1 = document.querySelector("#English");

                                            button_1.addEventListener("click", function onclick(event) {
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
                                            var button_1 = document.querySelector("#Hindi");

                                            button_1.addEventListener("click", function onclick(event) {
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


        </section>

        <section class="sproduct container my-5 pt-5 pl-5 rounded-3">

            <div class="row d-flex mt-2">
                <div class="col-md-5 product-img">
                    <img class="img-fluid" src="images/product1/pic4.png" id="main-img" alt="Image To Zoom" data-title="MIBAiO IoT" data-help="Zoom it for better experience +/-"">
                </div>
                <div class=" col-md-2 product-small d-flex flex-md-column order-md-first">
                    <div class=" small-img-col">
                        <img src="images/product1/pic1.png" alt="" class="img-fluid mb-3 small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="images/product1/pic2.png" alt="" class="img-fluid mb-3 small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="images/product1/pic3.png" alt="" class="img-fluid mb-3 small-img">
                    </div>

                    <div class="small-img-col">
                        <img src="images/product1/pic4.png" alt="" class="img-fluid mb-3 small-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 style="font-weight:bold; color:#0accbe;">Model 4S <small style="font-size: 15px">Product by
                            <a href="javascript:void(0);">MIBAiO</a></small> </h2>
                    <hr>
                    <h4 class="mt-5" style="font-weight:bold">₹2499.00</h4>
                    <div class="quantity">
                        <button class="plus-btn" type="button" name="button" onclick="increase(event, this)">
                            <img src="./images/plus.svg" alt="" />
                        </button>
                        <input type="text" name="name" value="1">
                        <button class="minus-btn" type="button" name="button" onclick="decrease(event, this)">
                            <img src="./images/minus.svg" alt="" />
                        </button>
                    </div>
                    <div class="group wow clipInLeft mb-2 add"><a class="button button-icon button-icon-right button-secondary button-winona" href="cart.php" data-wow-duration=".5s" data-wow-delay=".5s">
                            <div class="content-original">Add to Cart</div>
                            <div class="content-dubbed">Add to Cart</div>
                        </a></div>
                    <h4 class="py-2" style="font-weight:bold">Product Details</h4>
                    <hr class="hr-pro">
                    <p>

                        <strong>MIBAiO is India's 1st Hybrid WiFi+Bluetooth</strong> enabled smart device, which can be
                        easily installed outside any existing switchboard. Turn your electronics on/off, and schedule
                        the same from any part of the world, via MIBAiO app. <br><strong>Works in sync</strong> with
                        your existing electrical connections and switches with NO additional wiring required.
                        <br>Operate with a touch or hands-free with your voice.<br>
                        <strong>Works smoothly Online & Offline</strong>, Even when your internet is down, you can still
                        operate your devices wirelessly with Bluetooth.
                    </p>
                </div>
            </div>


        </section>
        <div class="tabs">
            <h3 style="font-weight:bold; color:#0accbe; text-align:center;margin-bottom:10px">What the Manufacturer has
                to say?</h3>
            <input type="radio" name="tabs" id="tab1" checked>
            <label for="tab1" id="tab-l1">
                <i class="fas fa-book"></i><span>Overview</span>
            </label>

            <input type="radio" name="tabs" id="tab2">
            <label for="tab2" id="tab-l2">
                <i class="fas fa-microchip"></i><span>Specifications</span>
            </label>

            <input type="radio" name="tabs" id="tab3">
            <label for="tab3" id="tab-l3">
                <i class="fas fa-comments"></i><span>Reviews</span>
            </label>

            <div id="tab-content1" class="tab-content">

                <p style="text-align: center;">
                <div class="container">
                    <div class="row row-50 justify-content-xl-between align-items-center">
                        <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInLeftSmall">
                            <div class="unit unit-spacing-1 align-items-center">
                                <div class="unit-left">
                                    <div class="icon icon-style-1 mdi mdi-microphone"></div>
                                </div>
                                <div class="unit-body">
                                    <h3>Voice Control</h3>
                                </div>
                            </div>
                            <div class="block-4 offset-top-4">
                                <p class="big"></p>

                                <blockquote class="quote-light">
                                    <div class="quote-light-mark linearicons-quote-open"></div>
                                    <div class="quote-light-text">
                                        <p>Forgot to switch off the fan of your room before going out? No worries!
                                            <br>Get
                                            the best home automation experience at MIBAiO which provides a truely
                                            hands-free
                                            control of your home appliances from anywhere
                                        </p>

                                    </div>
                                </blockquote>
                            </div>

                        </div>

                        <div class="col-md-4 col-lg-5 wow fadeInRightSmall right-pattern" id="Voice">

                            <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="1" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">
                                <div class="item">
                                    <div class="phone-frame-2"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/VoiceControliphone-frame-3-inner-8-300x650.png);">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="phone-frame-2 feature"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-50 justify-content-xl-between align-items-center flex-md-row-reverse">
                        <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInRightSmall">
                            <div class="unit unit-spacing-1 align-items-center">
                                <div class="unit-left">
                                    <div class="icon icon-style-1 mdi mdi-plus-network"></div>
                                </div>
                                <div class="unit-body">
                                    <h4 style="font-size:32px;">Self-reliant lifestyle</h4>
                                </div>
                            </div>
                            <div class="block-4 offset-top-4">
                                <p class="big">With inspiration from "आत्मनिर्भर भारत अभियान", we are comitted to
                                    provide
                                    our customers a
                                    truely self-reliant (आत्मनिर्भर) experience using MIBAiO.</p>
                                <ul class="list-marked list-marked_secondary">
                                    <li>Easily manage home appliances without struggling to move from your position</li>
                                    <li>Hands-free experience with voice control feature</li>
                                    <li>Establish a reliable network with our secure IoT cloud and your existing
                                        appliances
                                    </li>
                                </ul>
                                <div class="group-buttons-responsive group-middle"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-5 wow fadeInLeftSmall left-pattern">

                            <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="0" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">
                                <div class="item">
                                    <div class="phone-frame-2"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/phone-image-3-227x492.jpg);">
                                        </div>
                                        <div class="tooltip-point" data-toggle="tooltip" data-placement="top" data-class="tooltip-light" title="Perfect smarthome solution" style="position: absolute; top: 47%; left: 35.9%;"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="phone-frame-2"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-50 justify-content-xl-between align-items-center">
                        <div class="col-md-8 col-lg-7 col-xl-6 wow fadeInLeftSmall">
                            <div class="unit unit-spacing-1 align-items-center">
                                <div class="unit-left">
                                    <div class="icon icon-style-1 mdi mdi-harddisk"></div>
                                </div>
                                <div class="unit-body">
                                    <h3>Customize your App</h3>
                                </div>
                            </div>
                            <div class="block-4 offset-top-4">
                                <p class="big">Design your mobile application according to your choice of colors.
                                    Improve
                                    your lifestyle
                                    routines and manage it better.</p>

                                <blockquote class="quote-light">
                                    <div class="quote-light-mark linearicons-quote-open"></div>
                                    <div class="quote-light-text">
                                        <p>Customize your App preferences by going to Settings -> Personalization. And
                                            get
                                            the best home
                                            automation experience you truely deserve!</p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-5 wow fadeInRightSmall right-pattern">

                            <div class="slick-slider slick-slider-phone-frame-2 slick-style-1" data-focus-behaviour="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-speed="700" data-initial-slide="1" data-items="2" data-sm-items="2" data-md-items="2" data-lg-items="2" data-xl-items="2" data-xxl-items="2">
                                <div class="item">
                                    <div class="phone-frame-2"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="phone-frame-2"><img class="phone-frame-2-outer" src="images/iphonex-mockup-1-261x520.png" alt="" width="261" height="520" />
                                        <div class="phone-frame-2-inner" style="background-image: url(images/iphone-frame-3-inner-1-300x650.png);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>

            <div id="tab-content2" class="tab-content">

                <p style="text-align: center;">
                <ul>
                    <li><strong>Product Dimensions ‏ :</strong> ‎ 10 x 7 x 3 cm; 200 Grams</li>
                    <li><strong>Date First Available ‏ :</strong> ‎ 1 November 2021</li>
                    <li><strong>Manufacturer ‏ :</strong> ‎ MIBAiO Elmec Smart Automations Pvt. Ltd.</li>
                    <li><strong>ASIN ‏ :</strong> ‎ B097HF97XP</li>
                    <li><strong>Item model number ‏ :</strong> ‎ 123456789</li>
                    <li><strong>Country of Origin ‏ :</strong> ‎ India</li>
                    <li><strong>Item Weight ‏ :</strong> ‎ 200 g</li>
                    <li><strong>Item Dimensions LxWxH ‏ :</strong> ‎ 10 x 7 x 3 Centimeters</li>
                    <li><strong>Included Components ‏ :</strong> ‎ 1 x MIBAiO Xtension, User manual</li>
                </ul>


            </div>

            <div id="tab-content3" class="tab-content">


                <p style="text-align: center;">jQuery is a fast, small, and feature-rich JavaScript library. It makes
                    things like HTML document traversal
                    and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that
                    works across
                    a multitude of browsers.</p>

            </div>

        </div>





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
                                    <label class="form-label" for="subscribe-form-email-11">Enter Your
                                        E-mail</label>
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
                                    <p><span class="text" style="max-width: 250px;">MIBAiO is the leading provider
                                            of the best automation
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
                                        <li><a href="login.php">Sign Up</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="login.php">Log In</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="core.min.js"></script>
    <script src="script.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <script>
        var mainimg = document.getElementById('main-img');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function() {
            mainimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            mainimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            mainimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            mainimg.src = smallimg[3].src;
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
            var $frame_1 = $('.goog-te-menu-frame:first');

            if (!$frame_1.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
            }
            $frame_1.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
            return false;
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#main-img").imagezoomsl({
                zoomrange: [3, 3]
            });
        });
    </script>
    <script src="zoomsl.js"></script>
    <script src="test2.js"></script>
    <script>
        var elem = document.getElementById("myvideo");

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE11 */
                elem.msRequestFullscreen();
            }
        }
    </script>

    <script>
        $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
            } else {
                value = 0;
            }

            $input.val(value);

        });

        $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value < 100) {
                value = value + 1;
            } else {
                value = 100;
            }

            $input.val(value);
        });
    </script>
    <script>
        $('.tab-link').click(function() {

            var tabID = $(this).attr('data-tab');

            $(this).addClass('active').siblings().removeClass('active');

            $('#tab-content' + tabID).addClass('active').siblings().removeClass('active');
        });
    </script>
    <script src="main.js"></script>
</body>

</html>