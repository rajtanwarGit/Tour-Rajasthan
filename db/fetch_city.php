<?php

// Get City data to display on Index page
$query = $conn->query("SELECT city, city_name, city_img, city_quote FROM cities_data");



//Display Cities Data on City page
$queryCity = $conn->query("SELECT * FROM cities_data");




?>