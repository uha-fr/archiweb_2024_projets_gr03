

<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>




<div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white py-3 px-3 md:py-5 md:px-20">
    
    <div class="flex flex-wrap items-center justify-between mb-10 space-y-3">
        <div class="left flex items-center">
            <img class="rounded-full h-32 w-32 mr-5 p-1 object-cover	 ring-2 ring-gray-300 dark:ring-gray-500" src="<?php echo IMG_LOAD . '/profile/' . $nutritionistDetails["image"]?>" alt="">
            <div class="flex flex-col">
                <div class="name text-xl"><?php echo (strtoupper($nutritionistDetails['lastname']) ." ". ucfirst($nutritionistDetails['firstname'])) ?></div>
                <div class="username text-sm italic text-slate-500	">@<?php echo $nutritionistDetails['username'] ?></div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button type="button" class="modify-info text-white bg-[#93BE76] hover:bg-[#5F8B41] focus:ring-4 focus:ring-[#C6E0B9] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#93BE76] dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Modifier mes infos</button>
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Changer Mot de passe</button>
        </div>
    </div>
    <hr class="mb-10">





    
<div id="accordion-arrow-icon" data-accordion="open">
  <h2 id="accordion-arrow-icon-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-900 bg-gray-100 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true" aria-controls="accordion-arrow-icon-body-1">
      <span>Mes informations personnelles</span>
      <i class="fa-solid fa-user"></i>
    </button>
  </h2>
  <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
    <form class="space-y-4 md:space-y-6" action="signup" method="post">

<?php if (isset($error) && !empty($error)) : ?>
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <?php echo $error;  ?>
    </div>
<?php endif;?>
    <div class="flex space-x-4">
        <div class="flex-1">
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
            <input  type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" value="<?php echo $nutritionistDetails['firstname']?>" required="">
        </div>
        <div class="flex-1">
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
            <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" value="<?php echo $nutritionistDetails['lastname']?>" required="">
        </div>
    </div>
    <div>
          <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom d'utilisateur</label>
          <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john_doe" value="<?php echo $nutritionistDetails['username']?>" required="">
    </div>
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" value="<?php echo $nutritionistDetails['email']?>" required="">
      </div>

      <label for="sexe" class="block  text-sm font-medium text-gray-900 dark:text-white">Sexe</label>

      <ul class="flex space-x-4">
            <li class="flex-1">
                <input class="sr-only peer" <?php echo $nutritionistDetails['sexe']==="homme"? "checked":"" ?> type="radio" value="homme" name="sexe" id="homme">
                <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="homme">Homme</label>


            <li class="flex-1">
                <input class="sr-only peer" <?php echo $nutritionistDetails['sexe']==="femme"? "checked":"" ?> type="radio" value="femme" name="sexe" id="femme">
                <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="femme">Femme</label>


            </li>
        </ul>

      <button type="submit" class="flex w-full justify-center rounded-md bg-[#93BE76] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#C6E0B9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C6E0B9]">Modifier</button>

  </form>
    </div>
  </div>
  <h2 id="accordion-arrow-icon-heading-2">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false" aria-controls="accordion-arrow-icon-body-2">
      <span>Accordion with another icon</span>
      <svg class="w-4 h-4 shrink-0 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
  <h2 id="accordion-arrow-icon-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false" aria-controls="accordion-arrow-icon-body-3">
      <span>Accordion without arrow rotation</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
      <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
      </ul>
    </div>
  </div>
</div>


              
          </div>
      </div>
  </div>



