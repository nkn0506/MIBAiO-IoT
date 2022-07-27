<?php
if (isset($_GET['user']) && isset($_GET['env']) && isset($_GET['room']) && isset($_GET['d_id'])) {
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
        $device_id = $_GET['d_id'];
        // Check if the entered Device ID is bought by the user id or not?
        $conn2 = mysqli_connect("localhost:3308", "root", "", "id15897598_esp_data") or die("Can't Connect!");
        $sql = "SELECT user_id FROM `devices` WHERE device_label = '$device_id'";
        $search = mysqli_query($conn2, $sql);
        $row = mysqli_fetch_array($search);

        // If yes, the device belongs to the user then,
        if ($row['user_id'] == $_GET['user']) {

            // if the device id is already in use
            $sql = "SELECT * FROM `user_homes` WHERE `Device_ID` = '{$device_id}'";
            $search = mysqli_query($conn, $sql);

            // Already In One Room
            if (mysqli_num_rows($search) > 0) {
                return -100;
            }
            // never used, then do the necessary operations
            else {

                // See if the device id is set in table, if its not null, meaning there's already a device in one room, create another 
                // entry
                $sql = "SELECT * FROM `user_homes` WHERE `Home_Name`='{$home}' AND `Room_Name`='{$room}' AND `Device_ID` is NULL";
                $search = mysqli_query($conn, $sql);
                if (mysqli_num_rows($search) > 0) {
                    $sql =
                        "UPDATE `user_homes` SET `Device_ID`='{$device_id}' WHERE `Home_Name`='{$home}' AND `Room_Name`='{$room}'";
                    $result = mysqli_query($conn, $sql);
                } else {
                    $sql =
                        "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`,`Device_ID`) VALUES ('{$home}','{$room}','{$device_id}')";
                    $result = mysqli_query($conn, $sql);
                }

                // check if the user_devices_state is present
                $sql = "select 1 from user_devices_state";
                $exists = mysqli_query($conn, $sql);
                if ($exists != TRUE) {
                    // if not, create it
                    $sql = "CREATE TABLE user_devices_state(Device_ID int(11) PRIMARY KEY, IO1_Name varchar(60) NOT NULL, IO1 int NOT NULL, IO2_Name varchar(60) NOT NULL, IO2 int NOT NULL,IO3_Name varchar(60) NOT NULL, IO3 int NOT NULL,IO4_Name varchar(60) NOT NULL, IO4 int NOT NULL) ";
                    if ($conn->query($sql) == TRUE) {
                        echo ("Created!");
                    } else {
                        echo ("Not created!");
                    }
                }

                // After creation, insert the device and its switches data in the user_devices_state
                $sql = "INSERT INTO `user_devices_state` (`Device_ID`,`IO1_Name`,`IO1`,`IO2_Name`,`IO2`,`IO3_Name`,`IO3`,`IO4_Name`,`IO4`) VALUES ('{$device_id}','Switch1',0,'Switch2',0,'Switch3',0,'Switch4',0)";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo ("1_State");
                } else {
                    echo ("N Inserted!");
                }

                // create tables for every switch of the inserted device
                for ($x = 1; $x <= 4; $x++) {
                    $table_name = $device_id . "_IO" . $x;
                    $sql = "CREATE TABLE {$table_name}(ID int(11) PRIMARY KEY, ON_At timestamp,OFF_At timestamp DEFAULT CURRENT_TIMESTAMP,ON_time int NOT NULL ) ";
                    if ($conn->query($sql) == TRUE) {
                        echo ("1_Done");
                    } else {
                        echo (mysqli_error($conn));
                    }
                }
            }
        } else {
            echo ("Invalid Device ID");
        }
    }
} else {
    return -404;
}
