<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <?php
            include "components/navbar.php";
        ?>
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid gap-2 mb-4">
                <div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="h-full p-5 rounded bg-white h-28 dark:bg-gray-100">
                                <?php
                            include "components/cardMealPlan.php";
                            ?>   
                        </div>
                        <div class="h-full p-5 rounded bg-white h-28 dark:bg-gray-100">
                                <?php
                            include "components/cardTracker.php";
                            ?>   
                        </div>
                    </div>
                </div>

                <div class="h-full p-5 rounded bg-white h-28 dark:bg-gray-100">
                    <h2 class="text-2xl font-semibold px-3 mt-5 mb-3">Favorite recipes</h2>
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
                        //include "components/listRecipes.php";
                    ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>