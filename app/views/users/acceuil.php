<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Acceuil</title>
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
            <div class="mb-4">
                        <?php
                            include "components/hi.php";
                        ?> 
                  
            </div>     
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <?php
                                //include "components/suivi.php";
                            ?>   
                            <p> suivi </p>
                        </div>
                        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                            <?php
                                //include "components/liste.php";
                            ?>   
                            <p> liste </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                        <?php
                            //include "components/recetteFavoris.php";
                        ?>  
                        <p> recette </p>
                    </div>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <?php
                        //include "components/calendrier.php";
                    ?>   
                    <p> calendrier </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>