<?php
session_start();
include('smtp/PHPMailerAutoload.php');
include('smtp/class.phpmailer.php'); // Retrieve the email template required 
function smtp_mailer($to)
{
    $mail = new PHPMailer();
    $message = file_get_contents('order_m.html');
    $message = str_replace('%name%', $_SESSION['name'], $message);
    $message = str_replace('%order_no%', $_SESSION['user_id'], $message);
    $mail->addEmbeddedImage('logo-default-inverse-96x32.png', 'logo');
    $message = str_replace('%date%', date("Y/m/d"), $message);
    $message = str_replace('%qty%', $_SESSION['item_qty'], $message);
    $message = str_replace('%price%', $_SESSION['item_qty'] * 2499, $message);
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "webdevelopement1234@gmail.com";
    $mail->Password = "ABCDE12345";
    $mail->SetFrom("webdevelopement1234@gmail.com");
    $mail->Subject = "Order Confirmation";
    $mail->MsgHTML($message);
    $mail->IsHTML(true);
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    }
}
smtp_mailer($_SESSION['mail']);
$user_id = $_SESSION['user_id'];
$conn = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
for ($x = 0; $x < $_SESSION['item_qty']; $x++) {
    $sql = "INSERT INTO `devices`(`user_id`) VALUES ('{$user_id}')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo ("What!");
    }
}

if (isset($_POST['payment_id'])) {
    $_SESSION['token'] = $_POST['payment_id'];
}
$conn->close();
$servername = "localhost:3308";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database

$sql = "CREATE DATABASE user_id" . $user_id;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
