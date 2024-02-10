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
                    $nutritionnistes = [
                        ['nom' => 'Nom1', 'prenom' => 'Prenom1', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description du nutritionniste 1'],
                        ['nom' => 'Nom2', 'prenom' => 'Prenom2', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description du nutritionniste 2'],
                        ['nom' => 'Nom3', 'prenom' => 'Prenom3', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description du nutritionniste 3'],
                        ['nom' => 'Nom4', 'prenom' => 'Prenom4', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description du nutritionniste 4'],
                        ['nom' => 'Nom5', 'prenom' => 'Prenom5', 'image' => 'https://www.foodiesfeed.com/wp-content/uploads/2023/12/seafood-soup.jpg', 'description' => 'Description du nutritionniste 5'],

                        //...
                    ];

                    foreach ($nutritionnistes as $nutri) {
                        //include 'components/recette_card.php';
                    }
                ?>
                     
                </div>
            </div>
        </div>
    </div>
</body>
</html>