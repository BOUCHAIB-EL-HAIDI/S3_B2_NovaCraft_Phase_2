<?php require __DIR__ . "/../Partials/Header.php"; ?>

<section class="container mx-auto py-16 px-4">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">My Profil</h2>
        
        <div class="bg-white shadow-lg rounded-lg p-8">
            
            <div class="space-y-6">
                <div class="border-b pb-4">
                    <label class="text-sm font-semibold text-gray-600 uppercase">Username</label>
                    <p class="text-lg text-gray-800 mt-1"><?= htmlspecialchars($user['name']) ?></p>
                </div>
                
                <div class="border-b pb-4">
                    <label class="text-sm font-semibold text-gray-600 uppercase">Email</label>
                    <p class="text-lg text-gray-800 mt-1"><?= htmlspecialchars($user['email']) ?></p>
                </div>
                
                <div class="pb-4">
                    <label class="text-sm font-semibold text-gray-600 uppercase">Membre since</label>
                    <p class="text-lg text-gray-800 mt-1">
                        <?= date('d/m/Y', strtotime($user['created_at'])) ?>
                    </p>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="/logout" class="block w-full text-center bg-red-600 text-white py-3 px-4 rounded-lg hover:bg-red-700">
                   logout
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . "/../Partials/Footer.php"; ?>