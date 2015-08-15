<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "libs";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        //echo "Connected successfully";
        $conn->set_charset("utf8");          //max happy when i find this function :/ :/
    }
?>
