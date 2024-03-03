<!-- component -->
    <section
      class="w-full p-6 rounded-lg max-w-2xl shadow-lg shadow-gray-300 bg-white"
    >
      <header class="flex items-center">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-2 shrink-0 w-6 h-6 text-gray-500"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          stroke-width="2"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M4 19l16 0"></path>
          <path d="M4 15l4 -6l4 2l4 -5l4 4"></path>
        </svg>
        <h3 class="font-medium text-lg">Daily nutritional tracking</h3>
      </header>
      <section class="py-4 grid md:grid-cols-2 gap-x-6 grid-cols-1">
        <div class="flex items-center py-3">
          <div class="space-y-3 flex-1">
            <div class="flex items-center">
              <h4
                class="font-medium text-sm mr-auto text-gray-700 flex items-center"
              >
                Calories :&nbsp; 
                <span class="font-semibold"><?php echo $nutritionTracked['calories_tracked'];?></span>
              </h4>
              <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
                6.2 / 10
              </span>
            </div>
            <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
              <span
                class="h-full bg-[#93BE76] w-full block rounded-full"
                style="width: 62%"
              ></span>
            </div>
          </div>
        </div>
        <div class="flex items-center py-3">
          <div class="space-y-3 flex-1">
            <div class="flex items-center">
              <h4
                class="font-medium text-sm mr-auto text-gray-700 flex items-center"
              >
                Proteins :&nbsp; 
                <span class="font-semibold"><?php echo $nutritionTracked['proteins_tracked'];?></span>
              </h4>
              <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
                6.8 / 10
              </span>
            </div>
            <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
              <span
                class="h-full bg-[#93BE76] w-full block rounded-full"
                style="width: 68%"
              ></span>
            </div>
          </div>
        </div>
        <div class="flex items-center py-3 border-t border-gray-100">
          <div class="space-y-3 flex-1">
            <div class="flex items-center">
              <h4
                class="font-medium text-sm mr-auto text-gray-700 flex items-center"
              >
                Lipids :&nbsp; 
                <span class="font-semibold"><?php echo $nutritionTracked['lipids_tracked'];?></span>
              </h4>
              <span
                class="px-2 py-1 rounded-lg bg-green-50 text-green-700 text-xs"
              >
                7.3 / 10
              </span>
            </div>
            <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
              <span
                class="h-full bg-[#93BE76] w-full block rounded-full"
                style="width: 73%"
              ></span>
            </div>
          </div>
        </div>
        <div class="flex items-center py-3 border-t border-gray-100">
          <div class="space-y-3 flex-1">
            <div class="flex items-center">
              <h4
                class="font-medium text-sm mr-auto text-gray-700 flex items-center"
              >
                Carbohydrates :&nbsp; 
                <span class="font-semibold"><?php echo $nutritionTracked['carbohydrates_tracked'];?></span>
              </h4>
              <span class="px-2 py-1 rounded-lg bg-red-50 text-red-500 text-xs">
                6.4 / 10
              </span>
            </div>
            <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
              <span
                class="h-full bg-[#93BE76] w-full block rounded-full"
                style="width: 64%"
              ></span>
            </div>
          </div>
        </div>
        <div class="flex items-center py-3 border-t border-gray-100">
          <div class="space-y-3 flex-1">
            <div class="flex items-center">
              <h4
                class="font-medium text-sm mr-auto text-gray-700 flex items-center"
              >
                Fiber :&nbsp; 
                <span class="font-semibold"><?php echo $nutritionTracked['fiber_tracked'];?></span>
              </h4>
              <span
                class="px-2 py-1 rounded-lg bg-green-50 text-green-700 text-xs"
              >
                8 / 10
              </span>
            </div>
            <div class="overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
              <span
                class="h-full bg-[#93BE76] w-full block rounded-full"
                style="width: 80%"
              ></span>
            </div>
          </div>
        </div>
        
      </section>
      <footer class="border-t border-gray-100 pt-4">
        <p class="text-sm text-gray-500 text-center">
          Powered by <span class="font-bold">TailwindCSS</span>
        </p>
      </footer>
    </section>
  </div>