<?php
session_start();
include "dbConn.php"; // Using database connection file here
$itembought = $_SESSION['cart'];
$qtybought = $_SESSION['quantity'];
$total = $_SESSION['amount'];
$index = 0;
$name = $_SESSION['usname'];
if (isset($_POST["btnsign"])) {
    $sql = "SELECT * FROM `users` WHERE username = '$name'";
    $search = mysqli_query($db, $sql);
    $existsrow = mysqli_num_rows($search);
    $data = mysqli_fetch_array($search);
    $new = $data['wallet'] - $total;
    if ($new > 0) {
        $sql = "UPDATE `users` SET `wallet` = $new WHERE username = '$name'";
        $execute = mysqli_query($db, $sql);
        foreach ($itembought as $item) {
            $sql = "INSERT INTO `orders` (`username`,`item_id`,`qty`,`date`)
                VALUES ('{$name}','{$item}','{$qtybought[$index]}',NOW())";
            $execute = mysqli_query($db, $sql);
            $index = $index + 1;
        }
        header("Location: ./OrderHistory.php");
    } else {
?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>WARNING!</strong> You don't have enough balance in your wallet! Recharge Wallet or Pay Online!
        </div>
<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order </title>
    <!-- For SEO purposes -->
    <meta name="description" content="PICT College Canteen Website">
    <meta name="keywords" content="PICT Canteen, Canteen Website">
    <meta name="author" content="Group II">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bckimg {
            /* The image used */
            background-image: url("./img/background.jpg");
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.sidebarbtn').click(function() {
                $('.sidebar').toggleClass('active');
                $('.sidebarbtn').toggleClass('toggle');
            })
        })
    </script>
</head>

<body style="background-image: url('./img/background.jpg');">

    <header>
        <div class="container">
            <div id="title">
                <h1><span class="highlight">Order</span> here..</h1>
                <div id="titleicons">
                    <ul>
                        <li><a href="button.html" title="Help"><i class="material-icons" style="font-size:35px;text-shadow: 0 0 5px #fff;"> help_outline</i></a></li>
                        <li><a href="button.html" title="Logout"><i class="material-icons" style="font-size:35px;text-shadow: 0 0 5px #fff;">logout</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="form">
        <h1 style="font-family:Brush Script MT; font-size:50px; text-align:center"><u>Receipt</u></h1>
        <?php
        include "dbConn.php"; // Using database connection file here
        $index = 0;
        foreach ($itembought as $item) {
            $sql = "SELECT * FROM `food_items` WHERE id = '$item'";
            $search = mysqli_query($db, $sql);
            $existsrow = mysqli_num_rows($search);
            $data = mysqli_fetch_array($search); ?>
            <p>
            <div style="text-align:left;font-family:Brush Script MT; font-size:30px;"><?php echo $data['name'] ?></div>
            <div style="text-align:right;font-family:Brush Script MT; font-size:25px; "> <?php echo (($data['price']) * $qtybought[$index]); ?></div>
            </p>
        <?php $index = $index + 1;
        } ?>
        <h1 style="font-family:Brush Script MT; font-size:30px; text-align:center">Total Amount = <?php echo $total ?></h1>
    </div>
    <form method="post">
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
                </div>
            </div>

        </div>
        <input class="button" type="submit" name="btnsign" id="btnsign" value="Pay From Wallet" style="position:relative; left:37%;bottom:0px;width:200px;border-radius:10px;background-color: red; color:white; font-size:20px;margin-top:500px">
        <input class="button" type="submit" name="bt" id="bt" value="Pay Online" onclick="pay_now()" style="position:relative;left:37%;bottom:0px;width:200px;border-radius:10px;background-color: green; color:white; font-size:20px;margin-top:500px">
    </form>
    <div class="sidebar">
        <ul>
            <li><a href="../USER_INFO/Mysql.php">
                    <div class="center"><i class="material-icons" style="font-size:100px;text-shadow: 0 0 5px #fff;">account_circle</i>
                        <p> <?php echo $_SESSION['usname']; ?></p>
                    </div>
                </a></li>
            <li><a href="../Menu_page_final_version/menu.php"><i class="material-icons" style="font-size:27px;text-shadow: 0 0 5px #fff;">restaurant_menu</i> Today's Menu</a></li>
            <li><a href="../Wallet_balance/BalanceUpdate.php"><i class="material-icons" style="font-size: 27px;text-shadow: 0 0 2px #fff;">summarize</i>Recharge Wallet</a></li>
            <li><a href="../OrderPage/OrderHistory.php"><i class="material-icons" style="font-size: 27px;text-shadow: 0 0 3px #fff;">receipt_long</i>Current Orders</a></li>
            <li><a href="../Wallet_balance/Wallet_balance.php"><i class="material-icons" style="font-size: 27px;text-shadow: 0 0 3px #fff;">account_balance_wallet</i>Wallet Balance</a></li>
        </ul>
        <button class="sidebarbtn">
            <span></span>
        </button>
    </div>
</body>

</html>
<script>
    // $('#validate').validate({
    //     roles: {
    //         fullname: {
    //             required: true,
    //         },
    //         email: {
    //             required: true,
    //         },
    //         address: {
    //             required: true,
    //         },
    //         city: {
    //             required: true,
    //         },
    //         number: {
    //             required: true
    //         },
    //         state: {
    //             required: true,
    //         },
    //         zip: {
    //             required: true,
    //         },
    //         cardname: {
    //             required: true,
    //         },
    //         cardnumber: {
    //             required: true,
    //         },
    //         expmonth: {
    //             required: true,
    //         },
    //         expyear: {
    //             required: true,
    //         },
    //         cvv: {
    //             required: true,
    //         },

    //     },
    //     messages: {
    //         fullname: "Please input full name*",
    //         email: "Please input email*",
    //         city: "Please input city*",
    //         address: "Please input address*",
    //         number: "Please input mobile number*",
    //         state: "Please input state*",
    //         zip: "Please input address*",
    //         cardname: "Please input card name*",
    //         cardnumber: "Please input card number*",
    //         expmonth: "Please input exp month*",
    //         expyear: "Please input exp year*",
    //         cvv: "Please input cvv*",
    //     },
    // });
    var sdetails = <?php echo json_encode($details); ?>;
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
                text: 'Your Order has been placed successfully.\n An invoice has been mailed on your registered Email-ID ',
                width: 400,
                height: 400,
                padding: '1em',
                background: '#fff url(images/confetti.gif)',
                confirmButtonColor: '#0accbe',
                confirmButtonText: 'Okay'
            })
            jQuery.ajax({
                type: 'post',
                url: "after_check.php",
                data: {
                    payment_id: response.razorpay_payment_id,
                    details: sdetails
                },


                success: function(result) {
                    localStorage.setItem("cartNumbers", 0)
                    location.reload()
                }
            });
        }
    }
    var rzp1 = new Razorpay(options);
    document.getElementById('bt').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>