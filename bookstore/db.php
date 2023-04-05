<?php
$servername = "localhost";
$username = "apptieib_books_kiran";
$password = "books_kiran";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "USE apptieib_books_kiran";
$conn->query($sql);
?>