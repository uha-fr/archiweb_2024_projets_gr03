<?php
$nutritionTracked = $data['nutritionTracked'];

$caloriesValue = '';
$proteinsValue = '';
$lipidsValue = '';
$carbohydratesValue = '';
$fiberValue = '';

if ($nutritionTracked) {
    $caloriesValue = $nutritionTracked['calories_tracked'];
    $proteinsValue = $nutritionTracked['proteins_tracked'];
    $lipidsValue = $nutritionTracked['lipids_tracked'];
    $carbohydratesValue = $nutritionTracked['carbohydrates_tracked'];
    $fiberValue = $nutritionTracked['fiber_tracked'];
}
?>

<div class="flex min-h-full flex-col items-center justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <i class="fa-solid fa-bullseye text-[#93BE76] text-5xl"></i>
        <h2 class="mt-2 text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Track your intake</h2>
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
        <form class="space-y-3" action="<?php echo BASE_URL . "dashboard/addDailyNutritionalIntake" ?>" method="POST">
            <div>
                <label for="calories_tracked" class="block text-sm font-medium leading-6 text-gray-900">Calories </label>
                <div class="mt-2">
                    <input id="calories_tracked" name="calories_tracked" type="number" required min="0" value="<?php echo $caloriesValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="proteins_tracked" class="block text-sm font-medium leading-6 text-gray-900">Proteins </label>
                <div class="mt-2">
                    <input id="proteins_tracked" name="proteins_tracked" type="number" required min="0" value="<?php echo $proteinsValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="lipids_tracked" class="block text-sm font-medium leading-6 text-gray-900">Lipids </label>
                <div class="mt-2">
                    <input id="lipids_tracked" name="lipids_tracked" type="number" required min="0" value="<?php echo $lipidsValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="carbohydrates_tracked" class="block text-sm font-medium leading-6 text-gray-900">Carbohydrates </label>
                <div class="mt-2">
                    <input id="carbohydrates_tracked" name="carbohydrates_tracked" type="number" required min="0" value="<?php echo $carbohydratesValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="fiber_tracked" class="block text-sm font-medium leading-6 text-gray-900">Fiber </label>
                <div class="mt-2">
                    <input id="fiber_tracked" name="fiber_tracked" type="number" required min="0" value="<?php echo $fiberValue;?>" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <button type="submit" name='add' class="mt-5 flex w-full justify-center rounded-md bg-[#93BE76] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#C6E0B9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
            </div>
            <div>
                <button type="submit" name='reset' class="mt-5 flex w-full justify-center rounded-md bg-[#93BE76] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#C6E0B9] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reset</button>
            </div>
        </form>
        <a href="<?php echo BASE_URL . "dashboard/tracker" ?>">
           <button class="mt-5 flex w-full justify-center rounded-md text-gray-700 bg-gray-100 px-3 py-1.5 text-sm font-semibold leading-6 focus:outline-none hover:bg-gray-200 ">Annuler</button>
        </a>
    </div>
</div>
