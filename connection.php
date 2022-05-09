<?php
function connection(){
    $server_name = "localhost";
    $username = "root";
    $password = ""; // For MAMP users, password is "root"
    $db_name = "minimart_catalog";

    // Create a connection
    $conn = new mysqli($server_name, $username, $password, $db_name);
    // $conn holds the connection
    // $conn - object
    // mysqli - class (contains different functions and variables inside)
    // mysql improved

    // Check the connection
    if($conn->connect_error){
        // There is an error.
        die("Connection failed: " . $conn->connect_error);
        // die() will terminate the current script
    } else {
        // No error in the connection
        return $conn;
    }

    // -> object operator (object is on the left)
    // connect_error contains a String value of the error
}