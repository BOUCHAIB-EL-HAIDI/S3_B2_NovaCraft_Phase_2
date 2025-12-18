<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DigitalWave Solutions - Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="/" class="<?php  if($uri === "/") echo "text-blue-600"?> hover:text-blue-600">Accueil</a></li>
        <li><a href="/services" class=" <?php  if($uri === "/services") echo "text-blue-600"?> hover:text-blue-600">Services</a></li>
        <li><a href="/about" class=" <?php  if($uri === "/about") echo "text-blue-600"?> hover:text-blue-600">À propos</a></li>
        <li><a href="/contact" class="<?php  if($uri === "/contact") echo "text-blue-600"?> hover:text-blue-600 ">Contact</a></li>
        <li><a href="/login" class="<?php  if($uri === "/login") echo "text-blue-600"?> hover:text-blue-600 ">login</a></li>
        <button class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"><li><a href="/signup" class="<?php  if($uri === "/signup") echo "text-blue-600"?> hover:text-blue-600 ">Sign Up</a></li></button>
      </ul>
    </nav>
  </header>