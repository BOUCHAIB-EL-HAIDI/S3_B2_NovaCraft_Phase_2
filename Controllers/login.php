<?php

require __DIR__ . "/../connection.php";

$emailOrUsername = '';
$password = '';
$loginFailedMessage = ''; 

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $emailOrUsername = trim($_POST['email_or_username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($emailOrUsername !== '' && $password !== '') {
        $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ? OR name = ?");
        $stmt->bind_param("ss", $emailOrUsername, $emailOrUsername);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            

            header("Location: /profile");
            exit;
        } else {
            // Login failed
            $loginFailedMessage = "Invalid email/username or password.";
        }
    } else {
        $loginFailedMessage = "Please fill in both fields.";
    }
}


require __DIR__ . "/../Views/login.view.php";
