<?php 

function dd($value){

echo "<pre>";

echo  var_dump($value);
echo "<pre>";
die();

};

$uri = $_SERVER['REQUEST_URI'];



$routes = [

    
    '/' => 'Controllers/home.php',
    
    '/about' => 'Controllers/about.php',
    '/contact' => 'Controllers/contact.php',
    '/services' => 'Controllers/services.php'
];



function routeToControllers($uri , $routes){

  

if(array_key_exists($uri ,$routes)) {

require $routes[$uri];


}else {

   require "Views/404.php";
}

}



routeToControllers($uri , $routes);









