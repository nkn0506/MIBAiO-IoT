<?php

session_start();
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "user_id" . $_GET['user'];

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    $sql = "SELECT schema_name FROM information_schema.schemata WHERE schema_name = '{$database}'";
    $search = mysqli_query($conn, $sql);

    if (mysqli_num_rows($search)) {
        // Database present
        $db_selected = mysqli_select_db($conn, $database);
        if (!$db_selected) {
            die('Cannot use database : ' . mysqli_error($conn));
        } else {
            // Database user_id connected
            // Create Table user_homes if it doesn't exist
            $exists = mysqli_query($conn, "SELECT 1 from 'user_homes'");

            if ($exists != FALSE) {
                echo ("This table exists");
            } else {
                $sql = "CREATE TABLE user_homes(ID int(11) PRIMARY KEY, Home_Name varchar(60) NOT NULL, Room_Name varchar(60), Device_ID varchar(60)) ";
                if ($conn->query($sql) == TRUE) {
                    echo ("Created!");
                } else {
                    echo ("Not created!");
                }
            }
            // $home = mysqli_real_escape_string($conn, $_GET['env']);
            // $room = mysqli_real_escape_string($conn, $_GET['room']);
            // $sql =
            //     "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`) VALUES ('{$home}','{$room}')";
            // $result = mysqli_query($conn, $sql);
            // if ($result) {
            //     return 1;
            // } else {
            //     return 0;
            // }
            $home = mysqli_real_escape_string($conn, $_GET['env']);
            $rooms = explode(",", $_GET['room']);
            $count = count($rooms);
            $flag_done = 1;
            for (
                $i = 0;
                $i < $count;
                $i++
            ) {
                // echo ($rooms[$i]);
                $room = mysqli_real_escape_string($conn, $rooms[$i]);
                $sql =
                    "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`) VALUES ('{$home}','{$room}')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $flag_done = 1;
                } else {
                    $flag_done = 0;
                }
            }
            if (
                $flag_done == 0
            ) {
                return 0;
            }
            if ($flag_done == 1) {
                return 1;
            }
        }
    } else {
        // needs to be created

        $sql = "CREATE DATABASE user_id" . $_GET['user'];

        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
            $db_selected = mysqli_select_db($conn, $database);
            if (!$db_selected) {
                die('Cannot use database : ' . mysqli_error($conn));
            } else {
                // Create Table user_homes if it doesn't exist
                $exists = mysqli_query($conn, "SELECT 1 from 'user_homes'");

                if ($exists !== FALSE) {
                    echo ("This table exists");
                } else {
                    $sql = "CREATE TABLE user_homes(ID int(11) PRIMARY KEY AUTO_INCREMENT, Home_Name varchar(60) NOT NULL, Room_Name varchar(60), Device_ID varchar(60)) ";
                    if ($conn->query($sql) == TRUE) {
                        echo ("Created!");
                    } else {
                        echo ("Not created!");
                    }
                }
                $home = mysqli_real_escape_string($conn, $_GET['env']);
                // $room = mysqli_real_escape_string($conn, $_GET['room']);
                $rooms = explode(",", $_GET['room']);
                $count = count($rooms);
                $flag_done = 1;
                for ($i = 0; $i < $count; $i++) {
                    // echo ($rooms[$i]);
                    $room = mysqli_real_escape_string($conn, $rooms[$i]);
                    $sql =
                        "INSERT INTO `user_homes` (`Home_Name`,`Room_Name`) VALUES ('{$home}','{$room}')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $flag_done = 1;
                    } else {
                        $flag_done = 0;
                    }
                }
                if ($flag_done == 0) {
                    return 0;
                }
                if (
                    $flag_done == 1
                ) {
                    return 1;
                }
            }
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }
}
