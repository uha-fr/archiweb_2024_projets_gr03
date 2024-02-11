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
                    <div class="grid grid-cols-2 gap-2">
                        <div class="h-full w-full p-5 rounded bg-white h-28 dark:bg-[#C6E0B9]">
                            <p class="mb-3 text-l font-bold"> Calendrier </p>
                            <?php
                                include "components/calendar.php";
                            ?>   
                        </div>
                        <div class="h-full p-5 mt-11 rounded bg-white h-28 dark:bg-[#C6E0B9]">
                            <?php
                         include "";
                        ?>   
                        </div>
                    </div>
                </div>

                <div class="h-full p-5 rounded bg-white h-28 dark:bg-[#C6E0B9]">
                    <p class="mb-3 text-l font-bold"> Recette favoris</p>
                    <div class="p-3 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                        <?php
                        $recipes = [
                            ['title' => 'Recipe 1', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 1'],
                            ['title' => 'Recipe 2', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 2'],
                            ['title' => 'Recipe 3', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 3'],
                            //...
                        ];

                        foreach ($recipes as $recipe) {
                            include 'components/cardRecipe.php';
                        }
                    ?>

                    <?php
                       
                    ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>