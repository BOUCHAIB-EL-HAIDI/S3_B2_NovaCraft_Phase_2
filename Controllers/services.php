<?php



$jsonFile = __DIR__ . '/../Data/services.JSON';  
$jsonData = json_decode(file_get_contents($jsonFile), true);
require __DIR__ . "/../Views/services.view.php";