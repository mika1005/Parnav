<?php
$host = "localhost";
$username = "u567894005_Parnav";
$password = "Parnav@!12345";
$database = "uu567894005_Parnav_DB";
$connection = mysqli_connect("$host","$username","$password", "$database") or die('Connection not establised');
// $connection = mysqli_connect("u567894005_Parnav","uu567894005_Parnav_DB
// ","Parnav@!12345","joining");
if (!$connection) {
    die("Error in database connection".$connection->connect_error);
}
?>
