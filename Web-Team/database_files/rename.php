<?php
session_start();

$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "user_id" . $_SESSION['user_id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $device_id = $_GET['d_id'];
    $app_id = $_GET['a_id'];
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $row_name = "IO" . $app_id . "_Name";
    $sql = "UPDATE `user_devices_state` SET {$row_name}='{$name}' WHERE `Device_ID`='{$device_id}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo ("Done");
    } else {
        echo (mysqli_error($conn));
    }
}
