<?php
function GetData($query,$dbname){
    $servername = "localhost";
    $username = "root";
    $password = "";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//define and execute query
    $result = $conn->query($query);
    $conn->close();
    return $result;
}
?>
