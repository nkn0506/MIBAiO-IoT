<?php
if (isset($_GET['user']) && isset($_GET['env']) && isset($_GET['room'])) {
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
        $room = mysqli_real_escape_string($conn, $_GET['room']);
        $arr_info = array();
        $sql = "SELECT Device_ID FROM `user_homes` WHERE `Home_Name` = '{$home}' AND `Room_Name` = '{$room}'";
        $search = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($search);
        while ($row = mysqli_fetch_assoc($search)) {

            if ($row['Device_ID'] != null) {
                $sql1 = "SELECT * FROM `user_devices_state` WHERE `Device_ID` = '{$row['Device_ID']}'";
                $search1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_array($search1);
                $arr_info[] = array("Device_ID" => $row['Device_ID'], $row1['IO1_Name'] => $row1['IO1'], $row1['IO2_Name'] => $row1['IO2'], $row1['IO3_Name'] => $row1['IO3'], $row1['IO4_Name'] => $row1['IO4']);
            } else {
                $arr_info[] = null;
            }
        }
        echo ("JSON: " . json_encode($arr_info, JSON_PRETTY_PRINT));
    }
} else {
    echo (-404);
}
