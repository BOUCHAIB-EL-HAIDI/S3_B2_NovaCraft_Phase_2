<?php 

$host = 'localhost';
$user = 'root';
$password = 'Bouchaib3690';
$database = 'novacraft';

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}