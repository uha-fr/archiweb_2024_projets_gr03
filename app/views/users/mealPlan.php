<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid  gap-2 mb-4">
            <div class="px-3 mt-5 mb-3">
                        <span class="text-dark font-semibold text-[1.35rem]/[1.2] text-slate-950"> Meal plan calendar </span>
                </div>
                <div>
                <?php
                include "components/calendar.php";
            ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>