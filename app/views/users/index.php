

<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <?php
            include "components/navbar.php";
        ?>
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            

            <div class="grid  gap-2 mb-4">
                <div>
                    <div class="grid grid-cols-2 gap-2 mb-4">
                        <div class="h-full w-full p-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <p> Calendrier </p>
                            <?php
                                include "components/calendar.php";
                            ?>   
                        </div>
                        <div class="h-full p-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <?php
                         include "components/suivi.php";
                        ?>   
                        </div>
                    </div>
                </div>

                <div class="h-full p-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p> Recette </p>
                    <?php
                        include "components/listRecipes.php";
                    ?>   
                </div>


            </div>
        </div>
    </div>
</body>
</html>