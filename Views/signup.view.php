
<?php require __DIR__ . "/../Partials/Header.php"; ?>


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-white">
      Create your account
    </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/signup" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

      <!-- Username -->
      <div>
        <label for="username" class="text-black block text-sm font-medium ">
          Username
        </label>
        <div class="mt-2">
          <input
            id="username"
            name="username"
            type="text"
            placeholder = "Enter a Username"
             value="<?= htmlspecialchars($username) ?>"
            required
            class="border-2 order-grey-300 text-black block w-full rounded-md bg-white/5 px-3 py-1.5 outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
          <?php if(!empty($error['username'])): ?>

          <p class = "text-red-600"><?= $error['username'] ?></p>
          <?php endif ; ?>

        </div>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="text-black block text-sm font-medium ">
          Email address
        </label>
        <div class="mt-2">
          <input
            id="email"
            name="email"
            type="email"
            placeholder = "Enter Your Email"
            value="<?= htmlspecialchars($email) ?>"
            required
            class="border-2 order-grey-300 text-black block w-full rounded-md bg-white/5 px-3 py-1.5  outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
              <?php if(!empty($error['email'])): ?>

          <p class = "text-red-600"><?= $error['email'] ?></p>
          <?php endif ; ?>
        </div>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="text-black block text-sm font-medium ">
          Password
        </label>
        <div class="mt-2">
          <input
            id="password"
            name="password"
            type="password"
            placeholder = "Enter a Password"
            value=""
            required
            class="border-2 border-grey-300 text-black block w-full rounded-md bg-white/5 px-3 py-1.5  outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
                 <?php if(!empty($error['password'])): ?>

          <p class = "text-red-600"><?= $error['password'] ?></p>
          <?php endif ; ?>
        </div>
      </div>

      <!-- Sign Up Button -->
      <div>
        <button
          type="submit"
          class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
        >
          Sign Up
        </button>
      </div>

    </form>
  </div>
</div>


<?php require __DIR__ . "/../Partials/Footer.php"; ?>