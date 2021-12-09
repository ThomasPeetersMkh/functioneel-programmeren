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

function printHead(){
    print file_get_contents('C:\xampp\htdocs\functioneel\les3\head.html');
}

function printJumbo($title,$subtitle){
    $jumbo = file_get_contents('C:\xampp\htdocs\functioneel\templates\jumbo.html');
    $jumbo =str_replace('@@title@@',$title,$jumbo);
    $jumbo =str_replace('@@text@@',$subtitle,$jumbo);
    print $jumbo;
}
?>
