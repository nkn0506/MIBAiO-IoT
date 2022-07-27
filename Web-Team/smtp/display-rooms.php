<?php
if (isset($_GET['user']) && isset($_GET['env'])) {
    $servername = "localhost";
    $username = "phpmyadmin";
    $password = "password";
    $database = "user_id" . $_GET['user'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $home = mysqli_real_escape_string($conn, $_GET['env']);
        // $room = mysqli_real_escape_string($conn, $_GET['room']);
        $arr_info = array();
        $sql = "SELECT DISTINCT Room_Name FROM `user_homes` WHERE `Home_Name` = '{$home}'";
        $search = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($search);
        while ($row = mysqli_fetch_assoc($search)) {
            $arr_info[] = $row['Room_Name'];
        }
        echo ("JSON: " . json_encode($arr_info, JSON_PRETTY_PRINT));
        echo ("<br>Array: ");
        print_r($arr_info);
    }
} else {
    echo (-404);
}
