<?php  
defined("BASEPATH") or exit ("Kamu Mau ngapain?");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kepuasan_pasien";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>