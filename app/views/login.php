<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img src='<?php echo IMG_LOAD . '/logo.png' ?>' class="mx-auto h-48 w-auto" alt="Logo Manger"/>
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>



  <?php if (isset($error) && !empty($error)) : ?>
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <?php echo $error;  ?>
  </div>
  <?php endif; ?>
  <?php if (isset($success) && !empty($success)) : ?>
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <?php echo $success;  ?>
  </div>
  <?php endif; ?>


  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="login" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
          <div class="text-sm">
            <a href="<?php echo BASE_URL."auth/reset" ?>" class="font-semibold text-[#5F8B41] hover:text-[#93BE76]">Mot de passe oublié ?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#93BE76] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#C6E0B9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Pas encore un membre ?
      <a href="<?php echo BASE_URL."auth/signup" ?>" class="font-semibold leading-6 text-[#5F8B41] hover:text-[#93BE76]">Inscrivez-vous</a>
    </p>
  </div>
</div>


</body>
</html>