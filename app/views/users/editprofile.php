

<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>




<div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white py-3 px-3 md:py-5 md:px-20">
    
    <div class="flex flex-wrap items-center justify-between mb-10 space-y-3">
        <div class="left flex items-center">
            <img class="rounded-full h-32 w-32 mr-5" src="<?php echo IMG_LOAD . '/profile/' . $userDetails["image"]?>" alt="">
            <div class="flex flex-col">
                <div class="name text-xl"><?php echo (strtoupper($userDetails['lastname']) ." ". ucfirst($userDetails['firstname'])) ?></div>
                <div class="username text-sm italic text-slate-500	">@<?php echo $userDetails['username'] ?></div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button type="button" class="modify-info text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Modifier mes infos</button>
            <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Changer Mot de passe</button>
        </div>
    </div>
    <hr class="mb-10">

              <form class="space-y-4 md:space-y-6" action="signup" method="post">

            <?php if (isset($error) && !empty($error)) : ?>
                <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <?php echo $error;  ?>
                </div>
            <?php endif;?>
                <div class="flex space-x-4">
                    <div class="flex-1">
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                        <input  type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" value="<?php echo $userDetails['firstname']?>" required="">
                    </div>
                    <div class="flex-1">
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" value="<?php echo $userDetails['lastname']?>" required="">
                    </div>
                </div>
                <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom d'utilisateur</label>
                      <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john_doe" value="<?php echo $userDetails['username']?>" required="">
                </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" value="<?php echo $userDetails['email']?>" required="">
                  </div>

                  <label for="sexe" class="block  text-sm font-medium text-gray-900 dark:text-white">Sexe</label>

                  <ul class="flex space-x-4">
                        <li class="flex-1">
                            <input class="sr-only peer" <?php echo $userDetails['sexe']==="homme"? "checked":"" ?> type="radio" value="homme" name="sexe" id="homme">
                            <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="homme">Homme</label>


                        <li class="flex-1">
                            <input class="sr-only peer" <?php echo $userDetails['sexe']==="femme"? "checked":"" ?> type="radio" value="femme" name="sexe" id="femme">
                            <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="femme">Femme</label>


                        </li>
                    </ul>

                  <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>

              </form>
          </div>
      </div>
  </div>



