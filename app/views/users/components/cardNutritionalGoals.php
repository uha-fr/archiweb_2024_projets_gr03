<section class="w-full p-6 rounded-lg max-w-md shadow-lg shadow-gray-300 bg-white">
    <!-- Header -->
    <header class="mb-4">
        <h3 class="font-medium text-lg">Nutritional goals</h3>
    </header>

    <!-- Body -->
    <div class="flex flex-col items-center mb-4">
        <div class="mb-2">
            <label class="text-sm text-gray-500">Calories:</label>
            <span class="font-semibold"><?php echo $nutritionGoals['calories_goal'];?></span>
        </div>

        <div class="mb-2">
            <label class="text-sm text-gray-500">Proteins:</label>
            <span class="font-semibold"><?php echo $nutritionGoals['proteins_goal'];?></span>
        </div>

        <div class="mb-2">
            <label class="text-sm text-gray-500">Lipids:</label>
            <span class="font-semibold"><?php echo $nutritionGoals['lipids_goal'];?></span>
        </div>

         <div class="mb-2">
            <label class="text-sm text-gray-500">Carbohydrates:</label>
            <span class="font-semibold"><?php echo $nutritionGoals['carbohydrates_goal'];?></span>
        </div>

         <div>
            <label class="text-sm text-gray-500">Fiber:</label>
            <span class="font-semibold"><?php echo $nutritionGoals['fiber_goal'];?></span>
        </div>

        <a href="<?php echo BASE_URL . "dashboard/updateGoals" ?>" 
        class="inline-block text-white bg-[#93BE76] border-0 py-2 px-6 mt-5 focus:outline-none hover:bg-[#C6E0B9] rounded text-lg">
        Click here to update
    </a>  
    </div>
</section>