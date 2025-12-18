<?php require __DIR__ . "/../Partials/Header.php"; ?>


  <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

   <?php if ($success): ?>
    <p id="successMessage" class="text-green-600 text-center mb-4 font-extrabold">
        Message enregistré avec succès !
    </p>

    <script>
        setTimeout(function() {
            const msg = document.getElementById('successMessage');
            if(msg) {
                msg.style.display = 'none';
            }
        }, 3000);
    </script>
<?php endif; ?>
    <form action="/contact" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4"  method="POST">
      <input type="text" name="name" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg" pattern="[A-Za-z ]{2,50}" title="2-50 letters only" required>
      <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg" pattern="[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}" 
           title="Enter a valid email address" required>
      <textarea placeholder="Votre message" name="message" class="w-full border px-4 py-2 rounded-lg" pattern="[\w\s.,!?'-]{5,500}" 
              title="5-500 characters, letters, numbers, punctuation" required></textarea>
      <button  type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
  </section>

<?php require __DIR__ . "/../Partials/Footer.php"; ?>

