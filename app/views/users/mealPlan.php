<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid  gap-2 mb-4">
                <div>
                    Meal plan
                </div>
                <div class="h-full w-full p-5 rounded bg-white h-28 dark:bg-[#C6E0B9]">
                            <p class="mb-3 text-l font-bold"> Calendrier </p>
                            <?php
                                include "components/calendar.php";
                            ?>   
                </div>
            </div>
        </div>
    </div>
</body>
</html>