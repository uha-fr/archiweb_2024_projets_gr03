<?php
$nutritionGoals = $data['nutritionGoals'];

$caloriesGoalValue = '';
$proteinsGoalValue = '';
$lipidsGoalValue = '';
$carbohydratesGoalValue = '';
$fiberGoalValue = '';

if ($nutritionGoals) {
    // Populate form fields with existing values
    $caloriesGoalValue = $nutritionGoals['calories_goal'];
    $proteinsGoalValue = $nutritionGoals['proteins_goal'];
    $lipidsGoalValue = $nutritionGoals['lipids_goal'];
    $carbohydratesGoalValue = $nutritionGoals['carbohydrates_goal'];
    $fiberGoalValue = $nutritionGoals['fiber_goal'];
}
?>

<div class="flex min-h-full flex-col items-center justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <i class="fa-solid fa-bullseye text-[#93BE76] text-5xl"></i>
        <h2 class="mt-2 text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Add nutritional goals to track your intake</h2>
    </div>

    <?php if (isset($error) && !empty($error)) : ?>
        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($success) && !empty($success)) : ?>
        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm p-4 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <?php echo $success; ?>
        </div>
    <?php endif; ?>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
        <form class="space-y-3" action="<?php echo BASE_URL . "dashboard/updateGoals" ?>" method="POST">
            <div>
                <label for="calories_goal" class="block text-sm font-medium leading-6 text-gray-900">Calories goal</label>
                <div class="mt-2">
                    <input id="calories_goal" name="calories_goal" type="number" required min="0" value="<?php echo $caloriesGoalValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="proteins_goal" class="block text-sm font-medium leading-6 text-gray-900">Proteins goal</label>
                <div class="mt-2">
                    <input id="proteins_goal" name="proteins_goal" type="number" required min="0" value="<?php echo $proteinsGoalValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="lipids_goal" class="block text-sm font-medium leading-6 text-gray-900">Lipids goal</label>
                <div class="mt-2">
                    <input id="lipids_goal" name="lipids_goal" type="number" required min="0" value="<?php echo $lipidsGoalValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="carbohydrates_goal" class="block text-sm font-medium leading-6 text-gray-900">Carbohydrates goal</label>
                <div class="mt-2">
                    <input id="carbohydrates_goal" name="carbohydrates_goal" type="number" required min="0" value="<?php echo $carbohydratesGoalValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="fiber_goal" class="block text-sm font-medium leading-6 text-gray-900">Fiber goal</label>
                <div class="mt-2">
                    <input id="fiber_goal" name="fiber_goal" type="number" required min="0" value="<?php echo $fiberGoalValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" class="mt-5 flex w-full justify-center rounded-md bg-[#93BE76] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#C6E0B9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Goals</button>
            </div>
        </form>
        <a href="<?php echo BASE_URL . "dashboard/tracker" ?>">
           <button class="mt-5 flex w-full justify-center rounded-md text-gray-700 bg-gray-100 px-3 py-1.5 text-sm font-semibold leading-6 focus:outline-none hover:bg-gray-200 ">Annuler</button>
        </a>
    </div>
</div>
