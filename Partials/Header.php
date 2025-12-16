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
      </ul>
    </nav>
  </header>