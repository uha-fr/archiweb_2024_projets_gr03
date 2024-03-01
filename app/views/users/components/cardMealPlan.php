<!-- Daily Meal Plan Card -->
<section class="w-full p-6 rounded-lg max-w-2xl shadow-lg shadow-gray-300 bg-white">
  <header class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 shrink-0 w-6 h-6 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
      <path d="M4 19l16 0"></path>
      <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
    </svg>
    <h3 class="font-medium text-lg">Daily Meal Plan</h3>
  </header>

  <!-- Daily Meal Plan Sections -->
  <section class="py-4">
    <!-- Breakfast Section -->
    <a href="#" class="block hover:bg-[#C6E0B9] rounded p-4">
      <div id="breakfast" class="flex items-center">
        <span class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          </svg>
        </span>
        <div class="space-y-1 flex-1">
          <div class="items-center">
            <h4 class="font-medium text-sm mr-auto text-gray-700 flex items-center">
              Breakfast
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 shrink-0 w-5 h-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              </svg>
            </h4>
            <p id="recipeBreakfast" class="text-gray-500">Recipe name</p>
          </div>
        </div>
      </div>
    </a>

    <!-- Lunch Section -->
    <a href="#" class="block hover:bg-[#C6E0B9] rounded p-4">
      <div id="lunch" class="flex items-center">
        <span class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="items-center">
            <h4 class="font-medium text-sm mr-auto text-gray-700 flex items-center">
              Lunch
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 shrink-0 w-5 h-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              </svg>
            </h4>
            <p id="recipeLunch" class="text-gray-500">Recipe name</p>
          </div>
        </div>
      </div>
    </a>

    <!-- Dinner Section -->
    <a href="#" class="block hover:bg-[#C6E0B9] rounded p-4">
      <div id="dinner" class="flex items-center">
        <span class="w-8 h-8 shrink-0 mr-4 rounded-full bg-blue-50 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          </svg>
        </span>
        <div class="space-y-3 flex-1">
          <div class="items-center">
            <h4 class="font-medium text-sm mr-auto text-gray-700 flex items-center">
              Dinner
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 shrink-0 w-5 h-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              </svg>
            </h4>
            <p id="recipeDinner" class="text-gray-500">Recipe name</p>
          </div>
        </div>
      </div>
    </a>

  </section>
  <!-- Card Footer -->
  <footer class="border-t border-gray-100 pt-4">
    <p class="text-sm text-gray-500 text-center">
      Powered by <span class="font-bold">TailwindCSS</span>
    </p>
  </footer>
</section>
