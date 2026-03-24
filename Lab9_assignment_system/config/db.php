<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "assignment_system";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>