
<?php 
require __DIR__ . '/../connection.php';


if(!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit();
}


$userId = $_SESSION['user_id'];


$stmt = $conn->prepare("SELECT name, email, created_at FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();
$stmt->close();

require __DIR__ . "/../Views/profile.view.php";