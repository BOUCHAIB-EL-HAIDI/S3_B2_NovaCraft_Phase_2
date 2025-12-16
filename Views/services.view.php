


<?php require __DIR__ . "/../Partials/Header.php"; ?>


  <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
       <?php foreach($jsonData as $d): ?>
  
         <div class="bg-white p-6 shadow-md rounded-lg">
         <h3 class="text-xl font-bold mb-2"><?=$d['service']?></h3>
         <p class="text-gray-600"><?=$d['desc']?></p>
         </div>


       <?php endforeach;  ?> 
   
    </div>
  </section>

<?php require __DIR__ . "/../Partials/Footer.php"; ?>

  
    