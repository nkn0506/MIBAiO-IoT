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

    $device_id = $_GET['id'];
    $sql = "DELETE FROM user_homes WHERE device_ID='{$device_id}'";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        $sql = "DELETE FROM user_devices_state WHERE device_ID='{$device_id}'";
        $delete = mysqli_query($conn, $sql);
        if ($delete) {
            for ($x = 1; $x <= 4; $x++) {
                $table_name = $device_id . "_IO" . $x;
                $sql = "DROP Table {$table_name} ";
                if ($conn->query($sql) == TRUE) {
                    echo ("Done!");
                } else {
                    echo (mysqli_error($conn));
                }
            }
        }
    } else {
        echo ("Not done!");
    }
}
