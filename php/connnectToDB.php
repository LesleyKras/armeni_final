<?php
// Gegevens voor Database
$username="XXXXX";
$password="XXXXX";
$database="XXXXX";
$url = "XXXXX";

//Verbinding naar database
$connection = mysqli_connect($url,$username,$password,$database);

//Check connectie + error als het misgaat
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}