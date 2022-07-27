<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Register</title>
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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

    #pwd_valid {
      width: 230px;
      text-align: left;
      padding: 15px;
      background: rgba(255, 255, 255, 0.4);
      font-size: 0.875em;
      border-radius: 5px;
      z-index: 55;
      margin-left: 40px;
    }

    #pwd_valid h6 {
      color: #0accbe;
    }

    #pwd_valid ul li {
      list-style-type: none;
    }

    #pwd_valid ul li .fa {
      margin-left: -20px;
      padding-left: 20px;
      margin-right: 5px;
    }

    .hide {
      display: none;
    }

    .invalid {
      line-height: 24px;
      color: red;
    }

    .valid {
      line-height: 24px;
      color: #0accbe;
    }

    #btnsign:disabled,
    button[disabled] {
      border: 1px solid #999999;
      background-color: #cccccc;
      color: #666666;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  $conn = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
  // $servername = "31.170.165.62";
  // // Your Database name
  // $dbname = "id15897598_esp_data";
  // // Your Database user
  // $username = "phpmyadmin";
  // // Your Database user password
  // $password = "password";
  // $conn = new mysqli($servername, $username, $password, $dbname);
  // // Check connection
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  //If sign up button is clicked
  if (isset($_POST["btnsign"])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    //search if the email id entered already exists
    $searem = "SELECT * FROM `g_users` WHERE Email = '$email'";
    $resultsearem = mysqli_query($conn, $searem);
    $existsrowem = mysqli_num_rows($resultsearem);
    if ($existsrowem == 0) {
      $user = mt_rand();
      $sql = "INSERT INTO `G_Users`(`Name`,`Email`,`Password`,`User_ID`) VALUES ('{$name}','{$email}',md5('{$pass}'),'{$user}')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        header("Location: login.php");
      } else {
        echo ("Oppppssss!");
      }
    } else if ($existsrowem > 0) {
  ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>WARNING!</strong> An account for this Email ID already exists.
      </div>
  <?php
    }
  } ?>
  <div class="layout-2 section-layout-3-header">
    <div class="layout-2-inner">
      <div class="layout-2-item"><a class="link link-icon link-icon-left" href="index.html"><span class="icon mdi mdi-arrow-left"></span><span>Back to Home</span></a></div>
      <div class="layout-2-item">
        <div class="layout-2-group">
          <p class="text-gray-900 ls-001">Already have an account?</p><a class="button button-sm button-primary-outline button-winona" href="login.php">Log In</a><a class="link link-underline" href="faq.html">Need help? </a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-layout-3-main">
    <div class="section-1 text-center">
      <div class="container">
        <div class="box-shadow-1"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-inverse-96x32.png" alt="" width="96" height="32" srcset="images/logo-default-inverse-96x32.png 2x" /></a>
          <p class="text-gray-900"><span style="max-width: 400px">Register a free account on our website to experience the amazing features of our apps.</span></p>
          <div class="box-shadow-1-main">
            <!-- RD Mailform -->
            <form class="rd-form rd-mailform" method="post" id="sign-up">
              <div class="form-wrap">
                <input class="form-input" id="register-name" type="text" name="name" placeholder="Name" data-constraints="@Required">
                <!--<label class="form-label" for="register-name">Name</label> -->
              </div>
              <div class="form-wrap">
                <input class="form-input" id="register-email" type="email" name="email" placeholder="E-Mail" data-constraints="@Email @Required">
              </div>
              <div class="form-wrap">
                <input class="form-input" id="register-password" type="password" name="password" placeholder="Password" data-constraints="@Required"><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i>
              </div>
              <div class="form-wrap">
                <div id="pwd_valid" class="hide" style="position:relative;">
                  <h6 class="text_info">Password Must Contain:</h6><br>
                  <ul>
                    <li id="letter" class="invalid"><i class="fa fa-times" aria-hidden="true"></i> Atleast <strong>one letter</strong></li>
                    <li id="capital" class="invalid"><i class="fa fa-times" aria-hidden="true"></i> Atleast <strong>one capital letter</strong></li>
                    <li id="number" class="invalid"><i class="fa fa-times" aria-hidden="true"></i> Atleast <strong>one number</strong></li>
                    <li id="length" class="invalid"><i class="fa fa-times" aria-hidden="true"></i> Atleast <strong>8 characters</strong></li>
                </div>
              </div>
              <div class="form-wrap">
                <button class="button button-block button-secondary button-shadow button-winona" type="submit" name="btnsign" id="btnsign">Create My Free Account</button>
              </div>
              <div class="form-wrap text-center"><a class="link link-underline small" href="privacy-policy.html">Privacy Policy</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const x = document.getElementById("register-password");
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
    x.addEventListener("keyup", function() {
      validate(x.value);
    });
    x.addEventListener("focus", function() {
      RemoveClass("pwd_valid", "hide");
    });
    x.addEventListener("blur", function() {
      AddClass("pwd_valid", "hide");
    });

    function validate(password) {
      if (password.length >= 8) {
        valid("length");
      } else {
        invalid("length");
      }

      if (password.match(/[A-z]/)) {
        valid("letter");
      } else {
        invalid("letter");
      }

      if (password.match(/[A-Z]/)) {
        valid("capital");
      } else {
        invalid("capital");
      }

      if (password.match(/\d/)) {
        valid("number");
      } else {
        invalid("number");
      }

    }

    function valid(id) {
      AddClass(id, "valid");
      RemoveClass(id, "invalid");
      RemoveClassIcon(id, "fa-times");
      AddClassIcon(id, "fa-check");
    }

    function invalid(id) {
      AddClass(id, "invalid");
      RemoveClass(id, "valid");
      RemoveClassIcon(id, "fa-check");
      AddClassIcon(id, "fa-times");
    }

    function AddClass(id, cl) {
      document.getElementById(id).classList.add(cl);
    }

    function RemoveClass(id, cl) {
      document.getElementById(id).classList.remove(cl);
    }

    function AddClassIcon(id, cl) {
      document.getElementById(id).firstChild.classList.add(cl);
    }

    function RemoveClassIcon(id, cl) {
      document.getElementById(id).firstChild.classList.remove(cl);
    }
    const submitbutton = document.getElementById("btnsign");
    x.addEventListener('keyup', () => {
      if (x.value.length >= 8 && x.value.match(/[A-z]/) && x.value.match(/[A-Z]/) && x.value.match(/\d/)) {
        submitbutton.disabled = false;
      } else {
        submitbutton.disabled = true;
      }
    });
  </script>
</body>

</html>