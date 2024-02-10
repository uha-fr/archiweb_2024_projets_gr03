<style>
  body{
            font-family: 'Open Sans', sans-serif;
        }
        #signUpForm {
            max-width: 500px;
        }
        #signUpForm .form-header .stepIndicator.active {
            font-weight: 600;
        }
        #signUpForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #93BE76;
        }
        #signUpForm .form-header .stepIndicator::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #C6E0B9;
            border-radius: 50%;
            border: 3px solid #e2fcd4;
        }
        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #C6E0B9;
            border: 3px solid #e2fcd4;
        }
        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #5F8B41;
            border: 3px solid #C6E0B9;
        }
        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }
        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #93BE76;
        }
        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #5F8B41;
        }
        #signUpForm .form-header .stepIndicator:last-child:after {
            display: none;
        }
        #signUpForm input.invalid {
            border: 2px solid #ffaba5;
        }
        #signUpForm .step {
          display: none;
        }
</style>
<div class="flex flex-col">
<p class="text-2xl font-bold text-gray-700 leading-tight text-center mt-12 mb-2">
  Votre corps idéal vous attend
</p>
<p class="text-lg font-bold text-gray-400 leading-tight text-center mb-12">Inscrivez-vous maintenant</p>
<?php if (isset($error) && !empty($error)): ?>
                        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <i class="fa-regular fa-circle-exclamation"></i> <?php echo $error; ?>
                        </div>
                    <?php endif;?>
</div>
<form
  id="signUpForm"
  class="p-12 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 border-gray-100 mb-8"
  action="signup"
  method="post"
  enctype="multipart/form-data">
  <!-- start step indicators -->
  <div class="form-header flex gap-3 mb-4 text-xs text-center">
    <span class="stepIndicator flex-1 pb-8 relative">Informations du Compte</span>
    <span class="stepIndicator flex-1 pb-8 relative">Détails Personnels</span>
    <span class="stepIndicator flex-1 pb-8 relative"> Informations Santé</span>
  </div>
  <!-- end step indicators -->
  <!-- step one -->
  <div class="step">
    <p class="text-sm text-gray-700 leading-tight text-center mt-8 mb-5">
    Créez Votre Compte : Sécurisez Vos Informations Ici
    </p>
    <div class="mb-4">
        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nom d'utilisateur" value="<?php echo isset($_SESSION['signup_input']['username']) ? htmlspecialchars($_SESSION['signup_input']['username']) : ''; ?>" required="">
    </div>

    <div class="mb-4">
        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value="<?php echo isset($_SESSION['signup_input']['email']) ? htmlspecialchars($_SESSION['signup_input']['email']) : ''; ?>" required="">
    </div>

    <div class="mb-4">
        <input type="password" name="password" id="password" placeholder="Mot de passe" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    </div>

    <div class="mb-4">
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirmation du mot de passe" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
    </div>
  </div>

  <!-- step two -->
  <div class="step">
    <p class="text-sm text-gray-700 leading-tight text-center mt-8 mb-5">
    Personnalisez Votre Profil : Deuxième Étape de Votre Parcours
    </p>
    <div class="flex items-center flex-col justify-center space-x-6 space-y-6 mb-5">
      <div class="shrink-0">
        <img id='preview_img' class="h-32 w-32 object-cover rounded-full" src="<?php echo IMG_LOAD?>/profile/man-avatar.png" alt="Current profile photo" />
      </div>
      <label class="block">
        <input type="file" name="profile-image" id="profile-image" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-blue-50 file:text-blue-700
          hover:file:bg-blue-100 cursor-pointer
        "/>
      </label>
    </div>
    <div class="mb-4">
        <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom" value="<?php echo isset($_SESSION['signup_input']['firstname']) ? htmlspecialchars($_SESSION['signup_input']['firstname']) : ''; ?>" required="">
    </div>
    <div class="mb-4">
        <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nom" value="<?php echo isset($_SESSION['signup_input']['lastname']) ? htmlspecialchars($_SESSION['signup_input']['lastname']) : ''; ?>" required="">
    </div>

      <ul class="flex space-x-4 mb-4">
        <li class="flex-1">
          <input class="sr-only peer" type="radio" value="homme" name="sexe" id="homme" checked>
          <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="homme">Homme</label>
        </li>
        <li class="flex-1">
          <input class="sr-only peer" type="radio" value="femme" name="sexe" id="femme">
          <label class="text-center bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer focus:outline-none hover:bg-gray-50 peer-checked:ring-black-500 peer-checked:ring-2 peer-checked:border-transparent" for="femme">Femme</label>
        </li>
      </ul>
      <hr class="mb-4">
  </div>
  <!-- step three -->
  <div class="step">
    <p class="text-sm text-gray-700 leading-tight text-center mt-8 mb-5">
      Complétez Votre Profil : Troisième Étape pour une Vie Plus Saine
    </p>
    <div class="mb-4">
        <input type="number" name="age" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre age" value="<?php echo isset($_SESSION['signup_input']['firstname']) ? htmlspecialchars($_SESSION['signup_input']['firstname']) : ''; ?>" required="">
    </div>
    <div class="mb-4 relative">
        <input type="number" name="poids" id="poids" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre poids" value="<?php echo isset($_SESSION['signup_input']['firstname']) ? htmlspecialchars($_SESSION['signup_input']['firstname']) : ''; ?>" required="">
        <span class="absolute md:right-7 right-2 top-1/2 transform -translate-y-1/2 text-slate-600">Kg</span>
    </div>
    <div class="mb-4 relative">
        <input type="number" name="taille" id="taille" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre taille" value="<?php echo isset($_SESSION['signup_input']['firstname']) ? htmlspecialchars($_SESSION['signup_input']['firstname']) : ''; ?>" required="">
        <span class="absolute md:right-7 right-2 top-1/2 transform -translate-y-1/2 text-slate-600">Cm</span>

    </div>
  </div>
  <!-- start previous / next buttons -->
  <div class="form-footer flex gap-3">
    <button
      type="button"
      id="prevBtn"
      class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
      onclick="nextPrev(-1)">
      Précédent
    </button>
    <button
      type="button"
      id="nextBtn"
      class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-[#5F8B41] hover:bg-[#93BE76] text-lg"
      onclick="nextPrev(1)">
      Suivant
    </button>
  </div>
  <!-- end previous / next buttons -->
</form>
<!-- tailwind css -->

<script>

  var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }

        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }

  function validateForm() {
      var x, y, i, valid = true;
      x = document.getElementsByClassName("step");
      y = x[currentTab].getElementsByTagName("input");

      clearErrorMessages();

      for (i = 0; i < y.length; i++) {
        if (y[i].value == "" && y[i].name !="profile-image") {
          y[i].className += " invalid";
          valid = false;
          displayErrorMessage(y[i], "Ce champ est obligatoire");

        } else {
          // Additional validations for email, password, and confirm password
          if (y[i].name === "email" && !validateEmail(y[i].value)) {
            y[i].className += " invalid";
            displayErrorMessage(y[i], "Veuillez entrer une adresse e-mail valide");
            valid = false;
          }else if (y[i].name === "confirm-password" && y[i].value !== document.getElementById("password").value) {
            y[i].className += " invalid";
            displayErrorMessage(y[i], "Les mots de passe ne correspondent pas");

            valid = false;
          }
        }
      }

      if (valid) {
        document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
      }
      return valid;
  }

  function clearErrorMessages() {
    var errorMessages = document.querySelectorAll(".text-red-500");
    errorMessages.forEach(function (errorMessage) {
      errorMessage.remove();
    });

    var invalidInputs = document.querySelectorAll(".invalid");
    invalidInputs.forEach(function (input) {
      input.classList.remove("invalid");
    });
  }

  function validateEmail(email) {
    // Use a regular expression for basic email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  function displayErrorMessage(inputElement, message) {
    // Display error message below the input field
    var errorMessage = document.createElement("p");
    errorMessage.className = "text-sm text-red-500 mt-1";
    errorMessage.innerHTML = message;

    var parentElement = inputElement.parentElement;
    parentElement.appendChild(errorMessage);
  }



        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
          
        }


        /***********************Image preview******************* */
        var loadFile = function(event) {
            
            var input = event.target;
            var file = input.files[0];
            var type = file.type;

           var output = document.getElementById('preview_img');


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };



        /**************************Image************************ */
        var radios = document.querySelectorAll('input[type=radio][name="sexe"]');
        var image = document.querySelector("#preview_img");
        var fileInput = document.querySelector('input[type="file"]');

        radios.forEach(function (radio) {
          radio.addEventListener('change', function () {
            if (fileInput.files.length <= 0) {
              if (this.value == "homme") {
                image.src = "<?php echo IMG_LOAD?>/profile/man-avatar.png";
              } else {
                image.src = "<?php echo IMG_LOAD?>/profile/woman-avatar.png";
              }
            }
          });
        });



</script>
