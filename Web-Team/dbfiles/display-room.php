<?php
if (isset($_GET['user']) && isset($_GET['env'])) {
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
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
        $i = 1;
        while ($row = mysqli_fetch_assoc($search)) {
            $arr_info[] = array($i => $row['Room_Name']);
            $i++;
            // if ($row['Device_ID'] != null) {
            //     $sql1 = "SELECT * FROM `user_devices_state` WHERE `Device_ID` = '{$row['Device_ID']}'";
            //     $search1 = mysqli_query($conn, $sql1);
            //     $row1 = mysqli_fetch_array($search1);
            //     $arr_info[] = array("Home_Name" => $row['Home_Name'], "Room_Name" => $row['Room_Name'], "Device_ID" => $row['Device_ID'], $row1['IO1_Name'] => $row1['IO1'], $row1['IO2_Name'] => $row1['IO2'], $row1['IO3_Name'] => $row1['IO3'], $row1['IO4_Name'] => $row1['IO4']);
            // } else {

            // }
        }
        echo (json_encode($arr_info, JSON_PRETTY_PRINT));

        // echo ("<br>Array: ");
        // print_r($arr_info);
    }
} else {
    echo (-404);
}
