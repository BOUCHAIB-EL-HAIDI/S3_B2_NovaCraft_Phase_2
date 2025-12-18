<?php 



$host = 'localhost';
$user = 'root';

$password = 'Bouchaib3690';

$database = 'novacraft';


$conn = new mysqli($host , $user , $password , $database);


if($conn->connect_error) {

    die("connection Failed:" . $conn->connect_error);
}
