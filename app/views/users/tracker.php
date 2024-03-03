<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <h2 class="text-2xl font-semibold px-3 mt-5 mb-3">Nutritional tracker</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-3">  
                <div class="p-4 rounded-md">
                    <?php include "components/cardBMI.php"; ?>
                </div>
                <div class="p-4 rounded-md">
                    <?php include "components/cardNutritionalGoals.php"; ?>
                </div>
                <div class="p-4 rounded-md">
                    <?php include "components/cardTracker.php"; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
