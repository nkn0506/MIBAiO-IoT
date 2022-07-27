<!DOCTYPE html>
<html class="wide wow-animation" lang="en" xmlns="https://www.w3.org/1999/xhtml">
<?php session_start();

$dbname = "user_id" . $_SESSION['user_id'];
$conn = mysqli_connect("localhost:3308", "root", "", $dbname) or die("Can't Connect!");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["env"])) {
    //Code to see if Table Exists
    $sql = "select 1 from user_homes";
    $exists = mysqli_query($conn, $sql);
    if ($exists != TRUE) {
        echo ("Hello!");
        $sql = "CREATE TABLE user_homes(ID int(11) AUTO_INCREMENT PRIMARY KEY, Home_Name varchar(60) NOT NULL, Room_Name varchar(60) NOT NULL, Device_ID varchar(60)) ";
        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
            $room_name = mysqli_real_escape_string($conn, $_POST['rname']);
            $home_name =  mysqli_real_escape_string($conn, $_POST['hname']);
            $sql = "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`) VALUES ('{$home_name}','{$room_name}')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: index.php");
            } else {
                die('Error: ' . mysqli_error($conn));
            }
        } else {
            echo "Error creating Table: " . $conn->error;
        }
    } else {
        echo ("Present already!");
        $room_name = mysqli_real_escape_string($conn, $_POST['rname']);
        $home_name =  mysqli_real_escape_string($conn, $_POST['hname']);
        echo ("room_name" . $room_name);
        $sql = "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`) VALUES ('{$home_name}','{$room_name}')";
        echo ("home" . $home_name);

        if (!mysqli_query($conn, $sql)) {
            die('Error: ' . mysqli_error($conn));
        } else {
            header("Location: index.php");
        }
    }
}

?>

<head>
    <title>MIBAiO Home</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="vission.css">
    <link rel="stylesheet" href="steps.css">
    <link rel="stylesheet" href="video.css">
    <link rel="stylesheet" href="dashboard.css">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
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

            #more-tab {
                display: none;
            }

        }

        @media only screen and (max-width: 1199px) {
            #cart-size-1 {
                display: none;
            }

            #more-tabe-1 {
                display: none;
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

        */
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

        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;
            font-family: Arial;
            margin-left: 660px;
            padding-top: 50px;

        }


        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: #0accbe;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: relative;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
            margin-left: 70px;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/
        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
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
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-plus" id="cart-size-1" href="#"></a>
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
                                    <a class="icon icon-sm link-social-2 mdi mdi-cart-plus mr-2" id="cart-size" href="#"></a>
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

                        <h1 class="font-weight-bold heading-decoration-2 wow fadeInUp" data-wow-delay=".4s"><span class="text-white">Do more</span>
                        </h1>
                        <h1 class="extra-light text-white heading-decoration-3 wow fadeInUp" data-wow-delay=".4s">
                            <span>with your home</span>
                        </h1>

                        <div class="wow fadeInUp" data-wow-delay=".9s">
                            <p class="text-white-50 big wow clipInLeft" data-wow-delay="1.0s">MIBAiO provides Smart experiences at your fingertips unlike any other you've ever imagined!</p>
                        </div>

                        <div class="group wow clipInLeft wow fadeInUp" data-wow-delay="1.3s"><a class="button button-default-outline button-winona" href="#" data-wow-duration=".5s" data-wow-delay=".5s">
                                <div class="content-original">Read More</div>
                                <div class="content-dubbed">Read More</div>
                            </a><a class="button button-icon button-icon-right button-secondary button-winona wow clipInLeft wow fadeInUp" data-wow-delay="1.3s" href="#" data-wow-duration=".5s">Buy Now !</a></div>
                    </div>
                </div>

            </div>
        </section>
        <h2 class="h1-responsive font-weight-bold text-center my-5">Start your Automation Journey!</h2>
        <h3 class="offset-top-7 font-weight-regular wow fadeIn">Choose your Environment</h3>
        <img src="https://img.icons8.com/ios/150/000000/plus--v2.png" />
        <form action="" method="post">
            <label for="fname">Environment:</label><br>
            <input type="text" id="hname" name="hname" placeholder="Environment Name"><br>



            <h4 class="offset-top-7 font-weight-regular wow fadeIn text-center">Select Rooms</h4>


            <!--surround the select box with a "custom-select" DIV element. Remember to set the width:
          <div class="custom-select" style="width:200px;">
            <select>
              <option value="0">Select room:</option>
              <option value="1">Bedroom</option>
              <option value="2">Kitchen</option>
              <option value="3">Hall</option>
              <option value="4">Master Bedroom</option>
    
            </select>
          </div>-->

            <label for="fname">Room</label><br>
            <input type="text" id="rname" name="rname" placeholder="Room Name"><br>
            <input type="submit" value="Submit" id="env" name="env">
        </form>

        <script>
            var x, i, j, l, ll, selElmnt, a, b, c;
            /*look for any elements with the class "custom-select":*/
            x = document.getElementsByClassName("custom-select");
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /*for each element, create a new DIV that will act as the selected item:*/
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /*for each element, create a new DIV that will contain the option list:*/
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < ll; j++) {
                    /*for each option in the original select element,
                    create a new DIV that will act as an option item:*/
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function(e) {
                        /*when an item is clicked, update the original select box,
                        and the selected item:*/
                        var y, i, k, s, h, sl, yl;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function(e) {
                    /*when the select box is clicked, close any other select boxes,
                    and open/close the current select box:*/
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }

            function closeAllSelect(elmnt) {
                /*a function that will close all select boxes in the document,
                except the current select box:*/
                var x, y, i, xl, yl, arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                xl = x.length;
                yl = y.length;
                for (i = 0; i < yl; i++) {
                    if (elmnt == y[i]) {
                        arrNo.push(i)
                    } else {
                        y[i].classList.remove("select-arrow-active");
                    }
                }
                for (i = 0; i < xl; i++) {
                    if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                    }
                }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);
        </script>

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
    <script src="dashboard.js"></script>



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
            var $frame = $('.goog-te-menu-frame:first');

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
                scrollTop: $($anchor.attr('href')).offset().top + "px"
            }, 1500);
            event.preventDefault();
        });
    </script>
</body>

</html>