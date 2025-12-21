<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DigitalWave Solutions - NovaCraft</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      
      <ul class="flex space-x-6">
        <li><a href="/" class="<?php if($uri === "/") echo "text-blue-600"?> hover:text-blue-600">Accueil</a></li>
        <li><a href="/services" class="<?php if($uri === "/services") echo "text-blue-600"?> hover:text-blue-600">Services</a></li>
        <li><a href="/about" class="<?php if($uri === "/about") echo "text-blue-600"?> hover:text-blue-600">À propos</a></li>
        <li><a href="/contact" class="<?php if($uri === "/contact") echo "text-blue-600"?> hover:text-blue-600">Contact</a></li>
      </ul>
      
      <div class="auth flex items-center space-x-4">
        <?php if(isset($_SESSION['user_id'])): ?>
          <!--if  User is logged in -->
          <a href="/profile" class="<?php if($uri === "/profile") echo "text-blue-600"?> hover:text-blue-600">Profil</a>
          <a href="/logout" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Logout</a>
        <?php else: ?>
          <!--if  User is not logged in -->
          <a href="/login" class="<?php if($uri === "/login") echo "text-blue-600"?> hover:text-blue-600">Login</a>
          <a href="/signup" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Sign Up</a>
        <?php endif; ?>
      </div>
    </nav>
  </header>