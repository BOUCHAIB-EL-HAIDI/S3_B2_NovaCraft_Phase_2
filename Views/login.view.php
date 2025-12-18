<?php require __DIR__ . "/../Partials/Header.php"; ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="#" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
      <div>
        <label for="email" class="block text-sm/6 font-medium text-black">Email address</label>
        <div class="mt-2">
          <input id="email" placeholder="Enter Your Email" type="email" name="email" required autocomplete="email" class="border-2 border-grey-300 block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
        </div>
      </div>

      <div>
        <div class="mt-2">
          <label for="password" class="block text-sm/6 font-medium text-black">Password</label>
          <input id="password" placeholder="Enter Your Password" type="password" name="password" required autocomplete="current-password" class="border-2 border-grey-300 block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6 " />
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
      </div>
    </form>
  </div>
</div>


<?php require __DIR__ . "/../Partials/Footer.php"; ?>