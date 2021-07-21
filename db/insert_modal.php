<?php

// Modal Form Variables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $number =  $_POST['number'];
    $date =  $_POST['date'];
    $country =  $_POST['country'];

    // Sql query for Inserting Data 
$sqlModal = "INSERT INTO `modal_form` (`name`, `email`, `number`, `date`, `country`) VALUES ('$name', '$email', '$number', '$date', '$country');";
$resulModal = mysqli_query($conn, $sqlModal);

}