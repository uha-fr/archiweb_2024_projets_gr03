<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manger</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="antialiased">
    <header class="text-gray-600 body-font shadow w-full">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="<?php echo BASE_URL ?>" class="flex title-font font-medium items-center text-gray-900 md:mb-0">
                <img src="<?php echo IMG_LOAD . '/logo.png' ?>" alt="logo" class="w-16 h-16 text-white p-2 rounded-full">
                <span class="ml-3 text-xl">Manger</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="#tutorial" class="mr-5 hover:text-gray-900">How does it work ?</a>
                <a href="#meals" class="mr-5 hover:text-gray-900">Meals</a>
                <a href="#testimonials" class="mr-5 hover:text-gray-900">Testimonials</a>
                <a href="<?php echo BASE_URL . "dashboard" ?>" class="inline-block text-white bg-[#93BE76] border-0 py-2 px-6 focus:outline-none hover:bg-[#C6E0B9] rounded text-lg">Connexion</a>
            </nav>
        </div>
    </header>
    <section class="text-gray-800 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
      Nourishing Lives, Every Day
      </h1>
      <p class="mb-8 leading-relaxed">
      Savor the flavor of a healthier you with Manger's personalized nutrition tracking and meal planning.
      </p>
      <div class="flex justify-center">
        <a href="<?php echo BASE_URL . "dashboard" ?>" class="inline-flex text-white bg-[#93BE76] border-0 py-2 px-6 focus:outline-none hover:bg-[#C6E0B9] rounded text-lg">Start Eating Well</a>
        <a href="#tutorial" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Learn More &darr;</a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-none h-48 w-96 " alt="hero" src="<?php echo IMG_LOAD . '/hero.png' ?>">
    </div>
  </div>
</section>

<section id="tutorial" class="bg-[#C6E0B9] py-12">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Your daily dose of health in 3 simple steps</h2>
    <div class="flex flex-col md:flex-row justify-center md:space-x-8 space-y-6 md:space-y-0">
      <div class="flex-1">
        <img class="mx-auto mb-6 w-2/3 md:w-full" src="" alt="Step 1">
        <h3 class="text-xl font-semibold mb-2">Create your account and set your nutritional goals</h3>
        <p class="text-gray-600">Share your preferences and objectives to customize your meals and align them with your health aspirations.</p>
      </div>
      <div class="flex-1">
        <img class="mx-auto mb-6 w-2/3 md:w-full" src="" alt="Step 2">
        <h3 class="text-xl font-semibold mb-2">Explore and personalize your nutrition hub</h3>
        <p class="text-gray-600">Add your favorite recipes, craft personalized meal plans, and effortlessly track your nutritional intake, all in one place.</p>
      </div>
      <div class="flex-1">
        <img class="mx-auto mb-6 w-2/3 md:w-full" src="" alt="Step 3">
        <h3 class="text-xl font-semibold mb-2">Connect with a nutritionist for expert guidance</h3>
        <p class="text-gray-600">Choose to follow a nutritionist who can curate specialized meal plans and set tailored nutritional goals to elevate your health journey.</p>
      </div>
    </div>
  </div>
</section>
<section id="meals" class="bg-gray-100 text-gray-800 py-12">
    <div class="container mx-auto px-6 text-center">
        <span class="text-[#93BE76] font-semibold text-xl">Meals</span>
        <h2 class="text-3xl font-semibold my-4">Choose from 5,000+ recipes</h2>
    </div>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6 my-8">
       
        <div class="max-w-sm mx-auto">
            <img src="./img/meals/meal-1.jpg" alt="Japanese Gyozas" class="w-full rounded-lg shadow-md">
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="inline-block bg-green-200 text-green-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">Vegetarian</span>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-gray-800">Japanese Gyozas</h3>
                <div class="mt-3 flex items-center">
                    <span class="text-sm font-semibold">650</span>&nbsp;calories
                </div>
                <div class="mt-1">
                    <span class="text-sm font-semibold">NutriScore &reg; 74</span>
                </div>
                <div class="mt-1">
                    <span class="text-sm font-semibold">4.9</span> rating (537)
                </div>
            </div>
        </div>
       
        <div class="max-w-sm mx-auto">
            <img src="./img/meals/meal-1.jpg" alt="Japanese Gyozas" class="w-full rounded-lg shadow-md">
            <div class="mt-4">
                <div class="flex items-center">
                    <span class="inline-block bg-green-200 text-green-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">Vegetarian</span>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-gray-800">Japanese Gyozas</h3>
                <div class="mt-3 flex items-center">
                    <span class="text-sm font-semibold">650</span>&nbsp;calories
                </div>
                <div class="mt-1">
                    <span class="text-sm font-semibold">NutriScore &reg; 74</span>
                </div>
                <div class="mt-1">
                    <span class="text-sm font-semibold">4.9</span> rating (537)
                </div>
            </div>
        </div>
               
        <div class="bg-white p-6 rounded-lg shadow-lg">
  <h3 class="text-2xl text-gray-800 font-semibold mb-4">Works with any diet:</h3>
  <ul class="list-disc list-inside space-y-2">
    <li class="flex items-center">
      <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
      Vegetarian
    </li>
    <li class="flex items-center">
      <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
      Vegan
    </li>
  
  </ul>
</div>

    </div>
    
    <div class="container mx-auto text-center py-4">
        <a href="#" class="text-[#93BE76] font-semibold hover:underline">See all recipes &rarr;</a>
    </div>
</section>

<section id="testimonials" class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Once you try it, you can't go back</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Testimonials</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-1/3 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <img alt="Photo of customer Dave Bryson" class="w-24 h-24 mb-4 rounded-full mx-auto" src="img/customers/dave.jpg">
          <p class="leading-relaxed mb-6">Manger is my nutrition ally! Simple steps, personalized plans, and delicious meals. It's my go-to for a healthier me !</p>
          <a class="inline-flex items-center">
            <div class="text-gray-900 font-medium text-lg">Dave Bryson</div>
          </a>
        </div>
      </div>

      <div class="p-4 md:w-1/3 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <img alt="Photo of customer Jane Doe" class="w-24 h-24 mb-4 rounded-full mx-auto" src="img/customers/jane.jpg">
          <p class="leading-relaxed mb-6">Effortless nutrition with Manger! Love the variety, ease of tracking, and the nutritionist option. My secret to staying healthy on the go!</p>
          <a class="inline-flex items-center">
            <div class="text-gray-900 font-medium text-lg">Jane Doe</div>
          </a>
        </div>
      </div>

      <div class="p-4 md:w-1/3 w-full">
        <div class="h-full bg-gray-100 p-8 rounded">
          <img alt="Photo of customer John Smith" class="w-24 h-24 mb-4 rounded-full mx-auto" src="img/customers/john.jpg">
          <p class="leading-relaxed mb-6">Manger's user-friendly approach keeps me on track. From setting goals to following a nutritionist, it's my key to a healthier lifestyle.</p>
          <a class="inline-flex items-center">
            <div class="text-gray-900 font-medium text-lg">John Smith</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="bg-white">
  <div class="container mx-auto px-5 py-8 grid grid-cols-2 md:grid-cols-6 gap-8">
    <div class="col-span-2 md:col-span-1 flex flex-col items-start justify-start">
      <a href="#" class="flex items-center">
        <img src="<?php echo IMG_LOAD . '/logo.png' ?>" alt="mANGER logo" class="logo w-32 mb-4" />
      </a>
      <div class="flex mt-4">
        <a href="#" class="text-gray-500 hover:text-gray-900 mr-4">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
          </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-900 mr-4">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
          </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-900">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
          </svg>
        </a>
      </div>
      <p class="text-gray-500 text-sm mt-4">&copy; 2024 by Manger, Inc. All rights reserved.</p>
    </div>
    
    <div class="col-span-2 md:col-span-1">
      <h2 class="title-font font-semibold text-gray-900 tracking-widest text-sm mb-3">Contact us</h2>
      <nav class="list-none mb-10">
        <li>
          <p class="text-gray-600">Uha , Mulhouse , France</p>
        </li>
        <li>
          <a href="tel:415-201-6370" class="text-gray-600">415-201-6370</a>
        </li>
        <li>
          <a href="mailto:hello@manger.com" class="text-gray-600">hello@manger.com</a>
        </li>
      </nav>
    </div>
    
    <div class="col-span-1 md:col-span-1">
      <h2 class="title-font font-semibold text-gray-900 tracking-widest text-sm mb-3">Account</h2>
      <nav class="list-none mb-10">
        <li>
          <a href="<?php echo BASE_URL . "dashboard" ?>" class="text-gray-600 hover:text-gray-800">Create account</a>
        </li>
        <li>
          <a href="<?php echo BASE_URL . "dashboard" ?>" class="text-gray-600 hover:text-gray-800">Sign in</a>
        </li>
        
      </nav>
    </div>

    <div class="col-span-1 md:col-span-1">
      <h2 class="title-font font-semibold text-gray-900 tracking-widest text-sm mb-3">About us</h2>
      <nav class="list-none mb-10">
        <li class="mb-3">
          <p>Our mission is to make healthy eating simple, enjoyable, and tailored to your unique preferences and goals. Whether you're tracking your nutritional intake, creating personalized meal plans, or connecting with expert nutritionists, Manger is your trusted companion on the journey to a healthier, happier you. Embrace wellness effortlessly with Manger.</p>
        </li>
        <li>
          <a href="#" class="text-gray-600 hover:text-gray-800">Learn More</a>
        </li>
      </nav>
    </div>
  </div>
</footer>


</body>
</html>
