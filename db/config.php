<?php

//Connecting to Database
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "tr";

//Creating a connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
//Die if connection was not successful
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());}

//  else {
//     echo "Connection Successful";
// }



?>