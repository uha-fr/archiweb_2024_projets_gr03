<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Recette</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
   <style>
      @import url("https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Roboto:wght@400;700&display=swap");

      :root {
         --background: #fbfcfb;
         --primary: #93be76;
         --primary-dark: #6e9b59;
         --secondary: #4d3c38;
         --accent: #f89a48;
         --text-primary: #050315;
         --text-secondary: #fbfcfb;
      }
    </style>
</head>

<body class="relative">
    <?php
        include "components/sidebar.php";
    ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">  
            <div class="mb-8 mt-2">  
            <?php
                include "components/searchbar.php";
            ?>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
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
</body>
</html>