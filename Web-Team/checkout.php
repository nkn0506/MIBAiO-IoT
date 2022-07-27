<?php
session_start();
if (isset($_SESSION['item_qty'])) {
    $item_no = $_SESSION['item_qty'];
}
$conn = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
$user_id = $_SESSION['user_id'];
if (isset($_POST["btn"])) {
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $num = $_POST['number'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $token = $_SESSION['token'];

    // $details = array(
    //     "fname" => $fname,
    //     "email" => $email,
    //     "num" => $num,
    //     "add" => $add,
    //     "city" => $city,
    //     "state" => $state,
    //     "zip" => $zip,

    // );
    $sql = "INSERT INTO `orders`(`User_ID`,`Name`,`Email`,`number`,`Address`,`Zip_code`,`Token`,`Qty`,`Model_Name`) VALUES ('{$user_id}','{$fname}','{$email}','{$num}','{$add}','{$zip}','{$token}','{$_SESSION['item_qty']}','Model_4S')";
    $result = mysqli_query($conn, $sql);
} ?>

<!DOCTYPE html>
<html>

<head>
    <title>Checkout Card</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="images/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="model.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="cart_qty.css">
    <link rel="stylesheet" href="cart_details.css">
    <link rel="stylesheet" href="checkout.css">
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

        .billing-class input::placeholder {
            color: #C8C8C8;
            opacity: 3;
            font-size: 12px;
        }

        .payment-class input::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #C8C8C8;
            opacity: 3;
            font-size: 12px;
            text-align: center;
            /* Firefox */
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

        .logotype {
            background: #000;
            color: #fff;
            width: 75px;
            height: 75px;
            line-height: 75px;
            text-align: center;
            font-size: 11px;
        }

        .column-title {
            background: #eee;
            text-transform: uppercase;
            padding: 15px 5px 15px 15px;
            font-size: 11px
        }

        .column-detail {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .column-header {
            background: #eee;
            text-transform: uppercase;
            padding: 15px;
            font-size: 11px;
            border-right: 1px solid #eee;
        }

        .row-b {
            padding: 7px 14px;
            border-left: 1px solid #eee;
            border-right: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .container-bill {
            max-width: 680px;
            margin: 0 auto;
            color: black;
        }

        .alert {
            background: #ffd9e8;
            padding: 20px;
            margin: 20px 0;
            line-height: 22px;
            color: #333
        }

        .socialmedia {
            background: #eee;
            padding: 20px;
            display: inline-block
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border-bottom: 1px solid #eee;
        }

        td,
        th {
            padding: 10px;
        }

        .box {
            width: 70%;
            height: auto;
            background-color: black;
            color: #fff;
            padding: 20px;
            position: relative;
            margin: 10px;
            box-shadow: 10px 10px 5px 0 rgba(0, 0, 0, .3);
        }

        .box.arrow-top {
            margin-top: 40px;
        }

        .box.arrow-top:after {
            content: " ";
            position: absolute;
            left: 20px;
            top: -15px;
            border-top: none;
            border-right: 15px solid transparent;
            border-left: 15px solid transparent;
            border-bottom: 15px solid black;
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
                                    <!-- <a class="icon icon-sm link-social-2 mdi mdi-cart-plus mr-2" id="cart-size" href="#"></a> -->
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

                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="lottie-animate" src="https://assets5.lottiefiles.com/private_files/lf30_wai6psec.json" background="transparent" speed="1" hover loop autoplay>
                    </lottie-player>

                    <!-- <div class="box-custom-4-aside-content wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                        <img class="img-svg animated" style="margin: 0 auto 20px auto;padding-top: 90px;display: inline-block;text-align: center;transition: all 0.3s ease-in-out; height:auto; width:550px" src="images/checkout.svg" alt="">
                    </div> -->
                </div>
                <div class="box-custom-4-main">
                    <div class="block-10">

                        <h1 class="font-weight-bold heading-decoration-2 wow fadeInUp" data-wow-delay=".4s"><span class="text-white">You are</span>
                        </h1>
                        <h1 class="extra-light text-white heading-decoration-3 wow fadeInUp" data-wow-delay=".4s">
                            <span>really close to getting your own Smart Home</span>
                        </h1>


                    </div>
                </div>

            </div>
        </section>
        <section class="section-checkout">
            <div class="col-25 mr-5 ml-5 mt-5" style="padding-bottom: 60px;">
                <div class="container-bill">

                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                    <!--#4e83f1-->
                    <div style="background: #0accbe no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;">
                        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/dnoiydox.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" style="width:50px;height:50px;font-weight:100">
                        </lord-icon>

                    </div>
                    <h3>Your articles</h3>
                    <div class="table-responsive-md">
                        <table>
                            <tr>
                                <td width="30%" class="column-header" style="text-align: center;">Article</td>
                                <td width="20%" class="column-header" style="text-align: center;">Options</td>
                                <td width="10%" class="column-header" style="text-align: center;">Quantity</td>
                                <td width="20%" class="column-header" style="text-align: center;">Price</td>
                                <td width="20%" class="column-header" style="text-align: center;">Total</td>
                            </tr>
                            <tr>
                                <td class="row-b" style="text-align: center;"><span style="color:#777;font-size:11px;">#64000L</span><br>Model 4S</td>
                                <td class="row-b" style="text-align: center;">10 outputs</td>
                                <td class="row-b" style="text-align: center;"><?php echo ($item_no) ?></td>
                                <td class="row-b" style="text-align: center;"><?php echo ($item_no) ?> <span style="color:#777">X</span> Rs. 2499</td>
                                <td class="row-b" style="text-align: center;">Rs. <?php echo ($item_no * 2499) ?></td>
                            </tr>

                        </table>
                    </div>
                    <br>
                    <table style="background:#eee;">
                        <tr>
                            <td>
                                <table width="620px" style="float:right;">
                                    <tr>
                                        <td><strong>Sub-total:</strong></td>
                                        <td style="text-align:right;padding-right:30px">Rs.
                                            <?php echo ($item_no * 2499) ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Shipping fee:</strong></td>
                                        <td style="text-align:right;padding-right:30px">Rs. 100</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tax (25%):</strong></td>
                                        <td style="text-align:right;padding-right:30px">Rs. 100</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Grand total:</strong></td>
                                        <td style="text-align:right;padding-right:30px">Rs.
                                            <?php echo ($item_no * 2499 + 200) ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </div>
                <hr style="margin-top:40px;border: 0.1px solid rgba(0, 0, 0, 0.1);">
                <div class=" row-c" style="padding-top:30px">
                    <div class="col-75">
                        <div class="check container">
                            <form id="validate" method="post">
                                <div class="row-c">
                                    <div class="col-50 billing-class">

                                        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js">
                                        </script>
                                        <!--#4e83f1-->
                                        <div style="background: #0accbe no-repeat;width: 50px;height: 50px;margin: 30px 0;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;">
                                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js">
                                            </script>
                                            <lord-icon src="https://cdn.lordicon.com/slkvcfos.json" trigger="loop" colors="primary:#ffffff,secondary:#ffffff" style="width:50px;height:50px">
                                            </lord-icon>

                                        </div>
                                        <h3 style="margin-bottom: 10px;margin: 35px 0;">Billing Details</h3>
                                        <!-- <h3 style="color: #0accbe;margin-bottom: 10px;margin: 30px 0;">Billing Address</h3> -->
                                        <label class="l-check" for="fname"><i class="fa fa-user"></i> Full Name</label>
                                        <input type="text" id="fname" name="fullname" placeholder="Name" required>
                                        <label class="l-check" for="email"><i class="fa fa-envelope"></i> Email</label>
                                        <input type="text" id="email" name="email" placeholder="Email" required>
                                        <label class="l-check" for="number"><i class="fa fa-phone"></i> Phone Number</label>
                                        <input type="number" id="number" name="number" placeholder="Number" required>
                                        <label class="l-check" for="adr"><i class="fa fa-address-card-o"></i>
                                            Address</label>
                                        <input type="text" id="adr" name="address" placeholder="Address" required>
                                        <label class="l-check" for="city"><i class="fa fa-institution"></i> City</label>
                                        <input type="text" id="city" name="city" placeholder="City" required>
                                        <label class="l-check" for="state"><i class="fa fa-map"></i> State</label>
                                        <input type="text" id="state" name="state" placeholder="State" required>
                                        <label class="l-check" for="zip"><i class="fa fa-map-pin mr-1"></i>Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="Pincode" required>
                                        <label class="l-check">

                                    </div>

                                    <div class="col-40 payment-class">
                                        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js">
                                        </script>
                                        <!--#4e83f1-->
                                        <div style="background: #0accbe no-repeat;width: 50px;height: 50px;text-align:center;margin: 30px 0;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;">
                                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js">
                                            </script>
                                            <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop" colors="primary:#ffffff,secondary:#0accbe" style="width:50px;height:50px">
                                            </lord-icon>

                                        </div>
                                        <h3 style="margin-bottom: 10px;margin: 35px 0;">Payment</h3>
                                        <div class="rounded-3 shadow-lg" style="background: #f5f5f5;padding-top:30px; text-align:center">
                                            <!-- <h4 style=" color: #0accbe;margin: 10px 0;">Payment</h4> -->
                                            <!-- <label class="l-check" for="fname">Accepted Cards</label> -->
                                            <div id="payment" style="background-color: #ffffff;padding:20px;margin:30px" class="woocommerce-checkout-payment">
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <li class="wc_payment_method payment_method_razorpay">
                                                        <input id="payment_method_razorpay" type="radio" class="input-radio" name="payment_method" value="razorpay" checked="checked" data-order_button_text="" style="display: none;">

                                                        <label for="payment_method_razorpay" style="text-align:left; color:black">
                                                            Credit Card/ Debit Card/ NetBanking
                                                            <img style="margin-top:20px;width:70%" src="https://cdn.razorpay.com/static/assets/logo/payment.svg" alt="Credit Card/Debit Card/NetBanking">
                                                        </label>
                                                        <hr>
                                                        <div class="box arrow-top payment_box payment_method_razorpay">

                                                            <p>Pay securely by Credit or Debit card or Internet Banking through Razorpay.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-row place-order">
                                                    <noscript>
                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so. <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                    </noscript>


                                                </div>

                                            </div>
                                            <input type="submit" id="bt" value="Pay" name="bt" class="btn">
                                        </div>
                                    </div>

                                </div>
                                <!-- <input class="button" type="submit" name="btnsign" id="btnsign" value="Pay From Wallet" style="position:relative; left:37%;bottom:0px;width:200px;border-radius:10px;background-color: red; color:white; font-size:20px;margin-top:500px">
                                <input class="button" type="submit" name="bt" id="bt" value="Pay Online" onclick="pay_now()" style="position:relative;left:37%;bottom:0px;width:200px;border-radius:10px;background-color: green; color:white; font-size:20px;margin-top:500px"> -->
                                <input type="submit" id="btn" value="Place My Order" name="btn" class="btn_place">
                            </form>

                            <div class="icon-container">
                                <!-- <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                <i class="fa fa-cc-discover" style="color:orange;"></i> -->
                                <div style="padding-top: 30px;">



                                </div>

                            </div>
                        </div>
                    </div>
                </div>

        </section>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- script validate js -->
    <script>
        var amt = "<?php echo ($item_no * 2499 + 200) ?>";
        var name = "<?php echo $_SESSION['name'] ?>";
        var options = {
            "key": "rzp_test_oURviSqIh6zorn", // Enter the Key ID generated from the Dashboard
            "amount": amt * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "MiBAiO",
            "description": "Payment by " + name,
            "image": "images/logo-default-inverse-96x32.png",
            "handler": function(response) {


                Swal.fire({
                    icon: 'success',
                    title: 'Ordered Successfully',
                    text: 'Your payment was successfuly.\n Please click on Place Order Button to place the order ',
                    width: 400,
                    height: 400,
                    padding: '1em',
                    background: '#fff url(images/confetti.gif)',
                    confirmButtonColor: '#0accbe',
                    confirmButtonText: 'Okay'
                }).then(function() {
                    // localStorage.setItem("cartNumbers", 0)
                    // location.reload()
                })
                jQuery.ajax({
                    type: 'post',
                    url: "after_check.php",
                    data: {
                        payment_id: response.razorpay_payment_id,
                    },


                    success: function(result) {
                        localStorage.setItem("cartNumbers", 0)
                        location.href = "index.php"
                    }
                });
            }
        }
        var rzp1 = new Razorpay(options);
        document.getElementById('bt').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
        $('#validate').validate({
            roles: {
                fullname: {
                    required: true,
                },
                email: {
                    required: true,
                },
                address: {
                    required: true,
                },
                city: {
                    required: true,
                },
                number: {
                    required: true
                },
                state: {
                    required: true,
                },
                zip: {
                    required: true,
                },
                cardname: {
                    required: true,
                },
                cardnumber: {
                    required: true,
                },
                expmonth: {
                    required: true,
                },
                expyear: {
                    required: true,
                },
                cvv: {
                    required: true,
                },

            },
            messages: {
                fullname: "Please input full name*",
                email: "Please input email*",
                city: "Please input city*",
                address: "Please input address*",
                number: "Please input mobile number*",
                state: "Please input state*",
                zip: "Please input address*",
                cardname: "Please input card name*",
                cardnumber: "Please input card number*",
                expmonth: "Please input exp month*",
                expyear: "Please input exp year*",
                cvv: "Please input cvv*",
            },
        });
    </script>
</body>

</html>