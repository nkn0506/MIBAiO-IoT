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

    $home = mysqli_real_escape_string($conn, $_GET['env']);
    $room = mysqli_real_escape_string($conn, $_GET['room']);
    $sql = "SELECT Device_ID FROM `user_homes` WHERE `Home_Name`='{$home}' AND `Room_Name`='{$room}'";
    $search = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($search)) {
        $device_id = $row[0];
        for ($x = 1; $x <= 4; $x++) {
            $table_name = $device_id . "_IO" . $x;
            $sql = "DROP Table {$table_name} ";
            if ($conn->query($sql) == TRUE) {
                echo ($device_id);
            } else {
                echo (mysqli_error($conn));
            }
        }
        $sql = "DELETE FROM user_devices_state WHERE device_ID='{$device_id}'";
        $delete = mysqli_query($conn, $sql);
    }



    $sql = "DELETE FROM user_homes WHERE `Home_Name`='{$home}' AND `Room_Name`='{$room}'";
    $delete = mysqli_query($conn, $sql);
    // if ($delete) {
    //     // $sql = "DELETE FROM user_devices_state WHERE device_ID='{$device_id}'";
    //     // $delete = mysqli_query($conn, $sql);

    //     // 

    // } else {
    //     echo ("Not done!");
    // }
}
