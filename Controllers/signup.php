
<?php


require __DIR__ . "/../connection.php";
$error = [
    'username' => '',
    'email' => '',
    'password' => ''
];
$username = $email = $password = '';

if($_SERVER["REQUEST_METHOD"] === 'POST') {

    // getting and validating the inputs from the sign up form 

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
}elseif(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
    $error['password'] = "Password must be at least 6 chars and include letters & numbers";
}


// now checking if the username or email is already in the database if so throw an error 
//username
$statment = $conn->prepare("SELECT id FROM users WHERE name = ?");
$statment->bind_param("s", $username);
$statment->execute();
$statment->store_result();

if($statment->num_rows > 0){
    $error['username'] = "username already taken choose a diffrent one";
}
$statment->close();

//email 
$statment = $conn->prepare("SELECT id FROM users WHERE email = ?");
$statment->bind_param("s", $email);
$statment->execute();
$statment->store_result();

if($statment->num_rows > 0){
    $error['email'] = "choose a diffrent email";
}
$statment->close();

//storing the data in the users table in database


     if(!count(array_filter($error))){
     //username
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     $statment = $conn->prepare("INSERT INTO users (name , email , password ) VALUES (?, ? , ?)");
     $statment->bind_param("sss" , $username , $email , $hashedPassword);
     $statment->execute();


    header("Location: /signup?success=1");
    exit;
     
   }

}

if(!empty($_GET['success'])){
    $successMessage = "User registered successfully!";
    $username = $email = $password = '';
    $error = ['username'=>'','email'=>'','password'=>''];
}

require __DIR__ . "/../Views/signup.view.php";