
<?php require __DIR__ . "/../Partials/Header.php"; ?>


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-white">
      Create your account
    </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="#" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">

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
            required
            class="border-2 border-black text-black block w-full rounded-md bg-white/5 px-3 py-1.5 outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
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
            required
            class="border-2 border-black text-black block w-full rounded-md bg-white/5 px-3 py-1.5  outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
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
            required
            class="border-2 border-black text-black block w-full rounded-md bg-white/5 px-3 py-1.5  outline outline-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:outline-indigo-500"
          />
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