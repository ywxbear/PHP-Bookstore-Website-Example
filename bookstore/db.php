<?php
$servername = "db";
$username = "root";
$password = "test";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "myDb";
$conn->query($sql);
?>
