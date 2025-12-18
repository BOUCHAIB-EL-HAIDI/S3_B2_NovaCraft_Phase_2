
<?php

require __DIR__ . "/../Views/signup.view.php";
require __DIR__ . "/../connection.php";

if($_SERVER["REQUEST_METHOD"] === 'POST') {

$error = [];
$username = htmlspecialchars(trim($_POST['username'] ?? ''));

$email = htmlspecialchars(trim($_POST['email'] ?? ''));

$password = htmlspecialchars(trim($_POST['password'] ?? ''));

if(empty($username)){
$error['username'] = "Username should not be empty";

}elseif(!preg_match('/^[a-zA-Z0-9_-]{2,}$/', $username)){
  $error['username'] = "Username must be 2+ chars and contain only letters, numbers, _ or -.";  
}

if(empty($email)){
$error['email'] = "Email should not be empty";
}elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){

    $error['email'] = "Invalid email format";
}
if(empty($password)){
$error['password'] = "please choose a password";
}elseif(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $password)) {
    $error['password'] = "Password must be at least 6 chars and include letters & numbers";
}

}