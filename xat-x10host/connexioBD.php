<?php
$servername = "198.91.81.7";
$username = "erikx103_eriik";
$password = "19919972000";
$dbname = "erikx103_Xat";

// Create connection
$conn = mysqli_connect('198.91.81.7','erikx103_eriik','19919972000','erikx103_Xat');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>