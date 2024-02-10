<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 bg-white">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid  gap-2 mb-4">
                <div>
                <?php
                include "components/searchbar.php";
            ?>
                </div>

                <div class="h-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-3">
                <?php
                    $recipes = [
                        ['title' => 'Recipe 1', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 1'],
                        ['title' => 'Recipe 2', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 2'],
                        ['title' => 'Recipe 3', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 3'],
                        ['title' => 'Recipe 4', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 4'],
                        ['title' => 'Recipe 5', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 5'],
                        ['title' => 'Recipe 6', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 6'],
                        ['title' => 'Recipe 7', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 7'],
                        ['title' => 'Recipe 8', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 8'],
                        ['title' => 'Recipe 9', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description of Recipe 9'],
                        //...
                    ];

                    foreach ($recipes as $recipe) {
                        include 'components/recette_card.php';
                    }
                ?>
                     
                </div>
            </div>
        </div>
    </div>
</body>
</html>