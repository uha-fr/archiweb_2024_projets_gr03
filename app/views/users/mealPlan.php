<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid  gap-2 mb-4">
            <div class="px-3 mt-5 mb-3">
                    <h2 class="text-2xl font-semibold">Meal calendar</h2>
            </div>
                <div class="px-3">
                <?php
                include "components/calendar.php";
            ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>