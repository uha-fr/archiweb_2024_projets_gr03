<div class="flex flex-wrap min-h-full align-center ">
    <div class="h-full md:min-h-screen w-full md:w-1/3 bg-blue-100 width-50 bg-cover  bg-[linear-gradient(to_right_bottom,rgba(49,84,44,0.8),rgba(16,71,52,0.8)),url('https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')]">
        Manger

    </div>
  <div class=" flex-1">


        <div class=" mx-auto md:mx-10 sm:w-full sm:max-w-sm px-6 py-12 lg:px-8">
                    <span class="my-0 flex text-dark font-semibold text-[1.55rem]/[1.2] text-slate-950	 ">S'inscrire</span>
                    <span class="mb-10 pt-1 text-secondary-dark text-[0.80rem] font-medium text-slate-500	">Remplissez les informations nécessaires.</span> 
                
                    <form class="mt-10 space-y-4 md:space-y-6" action="signup" method="post">

                    <?php if (isset($error) && !empty($error)): ?>
                        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif;?>

                        <div class="flex space-x-4">
                            <div class="flex-1">
                                <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                                <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" value="<?php echo isset($_SESSION['signup_input']['firstname']) ? htmlspecialchars($_SESSION['signup_input']['firstname']) : ''; ?>" required="">
                            </div>
                            <div class="flex-1">
                                <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" value="<?php echo isset($_SESSION['signup_input']['lastname']) ? htmlspecialchars($_SESSION['signup_input']['lastname']) : ''; ?>" required="">
                            </div>
                        </div>
                        <div>
                            <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom d'utilisateur</label>
                            <input type="number" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john_doe" value="<?php echo isset($_SESSION['signup_input']['username']) ? htmlspecialchars($_SESSION['signup_input']['username']) : ''; ?>" required="">
                        </div>
    
                        <label for="sexe" class="block  text-sm font-medium text-gray-900 dark:text-white">Sexe</label>

                        <ul class="flex space-x-4">
                                <li class="flex-1">
                                    <input class="sr-only peer" type="radio" value="homme" name="sexe" id="homme">
                                    <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="homme">Homme</label>


                                <li class="flex-1">
                                    <input class="sr-only peer" type="radio" value="femme" name="sexe" id="femme">
                                    <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="femme">Femme</label>


                                </li>
                            </ul>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">J'accepte les <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Termes et conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Vous avez déjà un compte? <a href="<?php echo BASE_URL . "auth/login" ?>" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Connectez-vous</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
  </div>
</body>
</html>
