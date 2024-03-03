
<?php
$bmi = $data['bmi'];
?>


<section class="w-full p-6 rounded-lg max-w-md shadow-lg shadow-gray-300 bg-white">
    <!-- Header -->
    <header class="mb-4">
        <h3 class="font-medium text-lg">Body Max Index (BMI)</h3>
    </header>

    <!-- Body -->
    <div class="flex flex-col items-center mb-4">
        <!-- Taille -->
        <div class="mb-2">
            <label class="text-sm text-gray-500">Height (cm):</label>
            <span class="font-semibold"><?php echo $userDetails['taille'];?></span>
        </div>

        <!-- Poids -->
        <div class="mb-2">
            <label class="text-sm text-gray-500">Weight (kg):</label>
            <span class="font-semibold"><?php echo $userDetails['poids'];?></span>
        </div>

        <!-- Age -->
        <div class="mb-4">
            <label class="text-sm text-gray-500">Age:</label>
            <span class="font-semibold"><?php echo $userDetails['age'];?></span>
        </div>

        <!-- IMC -->
        <div class="flex items-center">
            <label class="text-sm text-gray-500">BMI:</label>
            <h4 class="px-3 font-bold text-2xl text-[#93BE76]"><?php echo $bmi;?></h4>
        </div>
    </div>
</section>
