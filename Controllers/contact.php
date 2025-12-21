<?php 


require __DIR__ . "/../connection.php";



$success = false;


if($_SERVER["REQUEST_METHOD"] === 'POST'){

$name = htmlspecialchars($_POST['name'] ?? '');

$mail = htmlspecialchars($_POST['email'] ?? '');

$message = htmlspecialchars($_POST['message'] ?? '');


$contact = [
     'name' => $name,
     'email' => $mail,
     'message' => $message
];

    $filePath = __DIR__ . '/../Data/contacts.json';

 
    if (file_exists($filePath)) {
        $contacts = json_decode(file_get_contents($filePath), true);
        if (!is_array($contacts)) $contacts = [];
    } else {
        $contacts = [];
    }


     array_push($contacts , $contact) ;

     file_put_contents($filePath, json_encode($contacts, JSON_PRETTY_PRINT));

     // store the contacts in the contacts table in that base 
     $statment = $conn->prepare("INSERT INTO contacts (name , email , message ) VALUES (?, ? , ?)");
     $statment->bind_param("sss" , $name , $mail , $message);
     $statment->execute();
     

    $success = true;

};

require __DIR__ . "/../Views/contact.view.php";
