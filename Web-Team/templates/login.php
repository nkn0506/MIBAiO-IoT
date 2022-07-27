<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMuli:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="style.css">
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

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

        #eye {
            position: absolute;
            right: 30px;
            margin-top: -33px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $conn = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
    if (isset($_POST["btnsignin"])) {
        $usname = $_POST['email'];
        $pass = $_POST['pass'];
        //Check if the entered usname is email or not
        if (!filter_var($usname, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM `g_users` WHERE Name = '$usname' AND Password = md5('$pass')";
            $search = mysqli_query($conn, $sql);
            $existsrow = mysqli_num_rows($search);
            if ($existsrow == 0) {
    ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>WARNING!</strong> Wrong Login Credentials!
                </div>
            <?php
            } else if ($existsrow == 1) {
                $sql = "SELECT Name FROM `g_users` WHERE Name = '$usname' AND Password = md5('$pass')";
                $search = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($search);
                $_SESSION['name'] = $row;
                $_SESSION['user_id'] = $row['User_ID'];
                if (isset($_SESSION['previous'])) {
                    header("Location: " . $_SESSION['previous']);
                } else {
                    header("Location: index.php");
                }
            }
        }
        if (filter_var($usname, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM `g_users` WHERE Email = '$usname' AND Password = md5('$pass')";
            $search = mysqli_query($conn, $sql);
            $existsrow = mysqli_num_rows($search);

            if ($existsrow == 0) {
            ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>WARNING!</strong> Wrong Login Credentials!
                </div>
    <?php
            } else if ($existsrow == 1) {
                $sql = "SELECT Name,Email,User_ID FROM `g_users` WHERE Email = '$usname' AND Password = md5('$pass')";
                $search = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($search);
                $_SESSION['name'] = $row['Name'];
                $_SESSION['user_id'] = $row['User_ID'];
                $_SESSION['mail'] = $row['Email'];

                if (isset($_SESSION['previous'])) {
                    header("Location: " . $_SESSION['previous']);
                } else {
                    header("Location: index.php");
                }
            }
        }
    } ?>

    <div class="layout-2 section-layout-3-header">
        <div class="layout-2-inner">
            <div class="layout-2-item"><a class="link link-icon link-icon-left" href="index.html"><span class="icon mdi mdi-arrow-left"></span><span>Back to Home</span></a></div>
            <div class="layout-2-item">
                <div class="layout-2-group">
                    <p class="text-gray-900 ls-001">Don’t have an account?</p><a class="button button-sm button-primary-outline button-winona" href="register.php">Register</a><a class="link link-underline" href="faq.html">Need help? </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-layout-3-main">
        <div class="section-1 text-center">
            <div class="container">
                <div class="box-shadow-1"> <a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-inverse-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-inverse-96x32.png 2x" /></a>
                    <p class="text-gray-900"><span style="max-width: 400px">Enter your e-mail and password below to log in to your account and control/monitor your smarthome!</span></p>
                    <div class="box-shadow-1-main">
                        <form class="rd-form rd-mailform" action="" method="post">
                            <div class="form-wrap">
                                <input class="form-input" type="email" name="email" placeholder="Email-ID" required>
                            </div>
                            <div class="form-wrap">
                                <input class="form-input" type="password" id="register-password" name="pass" placeholder="Password" required><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i>
                            </div>
                            <div class="form-wrap">
                                <input class="button button-sm button-primary-outline button-winona" type="submit" name="btnsignin" id="btnsignin" style="margin-left:30%" value="Sign In">
                            </div>
                        </form>
                        <div class="text-decoration-lines"><span class="text-decoration-lines-content">Or log in via social networks</span></div>
                        <div class="group group-xs"><a class="link link-social-3 mdi mdi-twitter" href="#" aria-label="Twitter"></a><a class="link link-social-3 mdi mdi-facebook" href="#" aria-label="Facebook"></a><a class="link link-social-3 mdi mdi-instagram" href="#" aria-label="Google+"></a><a class="link link-social-3 mdi mdi-linkedin" href="#" aria-label="Linkedin"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="script.js"></script>
    <script src="core.min.js"></script>
    <script>
        document.getElementById("eye").addEventListener("click", function() {
            var x = document.getElementById("register-password");
            if (x.type == "password") {
                x.type = "text";
                this.classList.add("fa-eye");
                this.classList.remove("fa-eye-slash");
            } else {
                x.type = "password";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            }
        });
    </script>
</body>


</html>