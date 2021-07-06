<?php

// Fetching data from Database to show on Website
$city = $_COOKIE["name"];
// echo $city;


// Sql Query
$sql = "SELECT * FROM `cities_data` WHERE city= '$city';";
$result = mysqli_query($conn, $sql);

while ($rows = mysqli_fetch_array($result)) {
    $city_name = $rows['city_name'];
    $city_quote = $rows['city_quote'];
    $desc_p1 = $rows['desc_p1'];
    $desc_p2 = $rows['desc_p2'];
    $desc_p3 = $rows['desc_p3'];
    $city_img = $rows['city_img'];
    $att1 = $rows['att1'];
    $att2 = $rows['att2'];
    $att3 = $rows['att3'];
    $att4 = $rows['att4'];
    $att5 = $rows['att5'];
    $att6 = $rows['att6'];
    $att7 = $rows['att7'];
    $plane = $rows['plane'];
    $road = $rows['road'];
    $train = $rows['train'];
    $marker_img = $rows['marker_img'];
}


?>