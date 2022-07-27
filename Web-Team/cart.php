<?php session_start(); ?>
<?php
// session_start();
// $conn = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
if (isset($_POST["check"])) {
    $item_no = $_POST['number'];
    if ($item_no > 0) {
        $_SESSION['item_qty'] = $item_no;
        if (isset($_SESSION['name'])) {
            header("Location: checkout.php");
        } else {
            $_SESSION['previous'] = "cart.php";
            header("Location: login.php");
        }
    }
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">


<head>
    <title>View Cart</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="model.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="cart_qty.css">
    <link rel="stylesheet" href="cart_details.css">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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

        #cart-page {
            display: none;
        }

        #cart-empty {
            display: none
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
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /><img class="brand-logo-light" src="images/logo-default-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-96x32.png 2x" /></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap"><a href="index.html">
                                <p class="rd-navbar-slogan rd-navbar-slogan-2 text-white-50 wow clipInLeft">Cool IoT
                                    Company</p>
                            </a>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav ">
                                <li class="rd-nav-item active">
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
                                        <ul class="rd-navbar-megamenu-inner">

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
                                    <!-- <a class="icon icon-sm link-social-2 mdi mdi-cart-plus" id="cart-size-1" href="#"></a> -->
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline cart-icon" id="cart-size-1" href="#"><span class="add-xs" id="cart-no">
                                            <script type="text/javascript">
                                                var cart = localStorage.getItem("cartNumbers");
                                                if (cart == null) {
                                                    document.write(0);
                                                    localStorage.setItem("cartNumbers", 0)
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
                                    <!-- <a class="icon icon-sm link-social-2 mdi mdi-cart-plus mr-2" id="cart-size" href="#"></a> -->
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-outline mr-2" id="cart-size" href="#"><span class="add-xs" id="cart-no">
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


                    <div class="box-custom-4-aside-content wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">

                        <img class="img-svg animated" style="margin: 0 auto 20px auto;padding-top: 90px;display: inline-block;text-align: center;transition: all 0.3s ease-in-out; height:auto; width:550px" src="images/cart_p.svg" alt="">
                    </div>
                </div>
                <div class="box-custom-4-main">
                    <div class="block-10">
                        <h1 class="font-weight-bold heading-decoration-2 wow clipInLeft"><span class="text-white">You
                                are</span>
                        </h1>
                        <h1 class="extra-light text-white heading-decoration-3"><span>just a <strong style="color: #0accbe;">few </strong>steps away from having a Smart Home!</span></h1>


                    </div>
                </div>
            </div>
        </section>


        <section class="section section-md" id="cart-empty">
            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border-2 shadow-lg">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h3 class="display-4 fw-bold lh-1" style="color: #03a59a">Oops! Your cart is empty!</h3>
                        <p class="lead">Looks like you haven't added anything to your cart yet</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                            <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
                            <a class="button button-icon button-icon-right button-secondary button-winona wow clipInLeft wow fadeInUp" data-wow-delay="0.3s" href="model_copy.php" data-wow-duration=".5s" style="font-size: 18px">Back To Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720"> -->
                        <img class="img-svg animated-1" style="transition: all 0.3s ease-in-out; height:auto; width:590px" src="images/svg2.svg" alt="">
                        </img>
                    </div>
                </div>
            </div>

        </section>
        <section id="cart-page">
            <form action="" method="post">
                <section class="section section-md mycart">



                    <section class="cart_wrapper ml-lg-5">
                        <div class="cart_lists">
                            <div class="cart_title">
                                <span class="material-icons-outlined">local_mall</span>
                                Your Shopping Cart
                            </div>

                            <div class="cart_list_wrap">
                                <div class="cart_responsive">
                                    <div class="tr_item">
                                        <div class="td_item item_img">
                                            <img class="model_pic" src="./images/product1/p2.png" />
                                        </div>
                                        <div class="td_item item_name">
                                            <label class="main">Model 4S</label>
                                            <label class="sub">Ref. 007891987</label>
                                        </div>

                                        <div class="td_item item_qty">
                                            <button class="plus-btn" type="button" name="button" onclick="increase(event, this)">
                                                <img src="./images/plus.svg" alt="" />
                                            </button>

                                            <input type="text" name="number" id="cart_cnt" value="">
                                            <script>
                                                var cart = localStorage.getItem("cartNumbers");
                                                document.getElementById("cart_cnt").value = cart;
                                                var cart_S = cart.toString();
                                            </script>
                                            <button class="minus-btn" type="button" name="button" onclick="decrease(event, this)">
                                                <img src="./images/minus.svg" alt="" />
                                            </button>
                                        </div>

                                        <div class="td_item item_price">

                                            <label>Rs.<strong class="bold_price_1">
                                                    2499
                                                </strong></label>
                                        </div>
                                        <div class="td_item item_price">

                                            <label>Rs.<strong class="bold_price">
                                                    <script>
                                                        var qty = document.getElementById("cart_cnt").value
                                                        var price = document.querySelector(".bold_price_1");

                                                        var total_model = parseFloat(qty) * parseFloat(price.innerHTML);
                                                        document.write(total_model);
                                                    </script>
                                                </strong></label>
                                        </div>

                                        <div class="td_item item_remove">
                                            <span class="material-icons-outlined">close</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer" style="margin-top: 40px;">
                                    <div class="back_cart">
                                        <a href="model_copy.php">
                                            <span class="material-icons-outlined">west</span>
                                            Back to Shop
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart_details">
                            <div class="cart_title">
                                Cart Details
                            </div>


                            <div class="form_row">



                                <div class="form_group">
                                    <label class="input_label"><strong>Cart Total</strong></label>
                                    <label type="text" class="input" id="card_number" style="color:#0accbe">
                                        Rs.
                                        <strong class="total_bold" style="font-weight:normal; color:#0accbe">
                                            <script>
                                                var qty = document.getElementById("cart_cnt").value
                                                var price = document.querySelector(".bold_price_1");

                                                var total_model = parseFloat(qty) * parseFloat(price.innerHTML);
                                                document.write(total_model);
                                            </script>
                                        </strong>
                                    </label>
                                </div>

                                <div class="form_group" style="width:40%">
                                    <label class="input_label">Taxes (GST)</label>
                                    <label type="text" class="input" id="card_number" style="color:#0accbe">Rs.
                                        <strong class="taxes" style="font-weight:normal; color:#0accbe">100</strong>
                                    </label>
                                </div>
                                <div class="form_group" style="width:60%">
                                    <label class="input_label">Apply Coupon (If Any)</label>
                                    <input type="text" class="input" id="card_number" />
                                </div>

                                <div class="form_group" style="margin-bottom: 45px;">
                                    <label class="input_label">Payable Amount</label>
                                    <label type="text" class="input" id="card_number" style="color:#0accbe">
                                        Rs.
                                        <strong class="pay_bold" style="font-weight:normal; color:#0accbe">
                                            <script>
                                                var taxes = document.querySelector(".taxes")
                                                var qty = document.getElementById("cart_cnt").value
                                                var price = document.querySelector(".bold_price_1");

                                                var total_model = parseFloat(qty) * parseFloat(price.innerHTML);

                                                var total_model = parseFloat(taxes.innerHTML) + total_model;
                                                document.write(total_model);
                                            </script>
                                        </strong>
                                    </label>
                                </div>
                                <button class="btn-checkout" name="check" id="check">Checkout</button>

                            </div>


                        </div>
                    </section>


                </section>
            </form>
        </section>

        <script>
            if (localStorage.getItem("cartNumbers") == 0) {

                document.getElementById('cart-page').style.display = 'none';

                document.getElementById('cart-empty').style.display = 'block';
            } else {
                document.getElementById('cart-page').style.display = 'block';
            }
        </script>

        <!-- </section> -->


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
                            <p class="big text-white-50">Upgrade your home with MIBAiO!</p>
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
    <script src="core.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function() {

            /* Set rates */
            $('.minus-btn').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('.tr_item').find('input');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;

                } else {
                    document.getElementById('cart-page').style.display = 'none';
                    document.getElementById('cart-empty').style.display = 'block';
                }

                $input.val(value);
                updateQuantity('.item_qty input');
                recalculateCart()

            });
            $('.plus-btn').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('.tr_item').find('input');
                var value = parseInt($input.val());

                if (value < 100) {
                    value = value + 1;

                } else {
                    value = 100;
                }

                $input.val(value);
                updateQuantity('.item_qty input');
                recalculateCart()
            });
            var taxRate = 0.05;
            var fadeTime = 300;
            /* Assign actions 
            $('.item_qty input').change(function() {
                updateQuantity(this);
            });*/

            $('.item_remove span').click(function() {
                removeItem(this);
            });


            /* Recalculate cart */
            function recalculatePayable() {

                var price = document.querySelector(".total_bold");
                var tax = document.querySelector(".taxes");
                //subtotal += parseFloat(price.innerHTML);


                /* Update totals display */
                total = document.querySelector('.pay_bold')
                // total_cart = parseFloat(price.innerHTML) + parseFloat(tax.innerHTML);
                total.innerText = parseFloat(price.innerHTML) + parseFloat(tax.innerHTML);
                console.log(total.innerText);

                /*$('.total_price').fadeOut(fadeTime, function() {
                    $('.total_bold').html(subtotal);var price = document.querySelector(".bold_price");
                    subtotal += parseFloat(price.innerHTML);
                    if (subtotal == 0) {
                        $('.checkout').fadeOut(fadeTime);
                    } else {
                        $('.checkout').fadeIn(fadeTime);
                    }
                    $('.total_price').fadeIn(fadeTime);
                });*/
            }

            function recalculateCart() {
                var subtotal = 0;

                /* Sum up row totals */
                $('.tr_item').each(function() {
                    //subtotal += parseFloat($(this).children('.item_price strong').text());
                    var price = document.querySelector(".bold_price");
                    subtotal += parseFloat(price.innerHTML);
                });
                /* Calculate totals 
                var tax = subtotal * taxRate;
                var total = subtotal + tax;*/

                /* Update totals display */
                total = document.querySelector('.total_bold')
                total.innerText = subtotal;
                recalculatePayable();

                /*$('.total_price').fadeOut(fadeTime, function() {
                    $('.total_bold').html(subtotal);
                    if (subtotal == 0) {
                        $('.checkout').fadeOut(fadeTime);
                    } else {
                        $('.checkout').fadeIn(fadeTime);
                    }
                    $('.total_price').fadeIn(fadeTime);
                });*/
            }


            /* Update quantity */
            function updateQuantity(quantityInput) {
                /* Calculate line price */
                //console.log("Hello!");
                var productRow = $(quantityInput).parent().parent();
                /*console.log("hello!");
                console.log(productRow.children('.item_price'));
                console.log(document.querySelector(".item_price"))*/
                //var price = parseFloat(productRow.children('.item_price').text());

                var price = document.querySelector(".bold_price");
                //console.log(price);
                var quantity = $(quantityInput).val();
                console.log(quantity);
                var linePrice = 2499 * quantity;
                price.innerText = quantity * 2499;
                /* Update line price display and recalc cart totals 
                productRow.children('.item_price .bold_price').each(function() {
                    $(this).fadeOut(fadeTime, function() {
                        $(this).text(linePrice.toFixed(2));
                        recalculateCart();
                        $(this).fadeIn(fadeTime);
                    });
                });*/
            }

            /* Remove item from cart */
            function removeItem(removeButton) {
                /* Remove row from DOM and recalc cart total */
                var productRow = $(removeButton).parent().parent();
                productRow.slideUp(fadeTime, function() {
                    productRow.remove();
                    recalculateCart();
                    localStorage.setItem('cartNumbers', 0);
                    location.reload()
                });
            }

        });
    </script>
</body>

</html>