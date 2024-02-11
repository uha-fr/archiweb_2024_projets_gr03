<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-100 flex">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white flex flex-col" style="min-height: 100vh;">
        <div class="p-5 flex items-center space-x-4">
            <img src="https://via.placeholder.com/50" alt="Profil" class="rounded-full">
            <span class="font-bold">Nom Admin</span>
        </div>
        <hr class="border-gray-600">
        <ul class="flex-grow">
            <li>
                <form action="" method="POST">
                    <button name="action" value="gestionUtilisateurs" class="w-full text-left p-4 hover:bg-gray-700">Gestion des utilisateurs</button>
                </form>
            </li>
            <li>
                <form action="" method="POST">
                    <button name="action" value="gestionNutritionnistes" class="w-full text-left p-4 hover:bg-gray-700">Gestion des nutritionnistes</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Contenu principal -->
    <div class="flex-1 p-10">
        <h1 class="text-4xl font-bold">
            <?php
            // Titre par défaut
            $titre = "Bienvenue dans le tableau de bord de l'admin";
            
            // Modifier le titre selon l'action
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                switch ($_POST['action']) {
                    case 'gestionUtilisateurs':
                        $titre = "Gestion des utilisateurs";
                        break;
                    case 'gestionNutritionnistes':
                        $titre = "Gestion des nutritionnistes";
                        break;
                }
            }
            
            echo $titre;
            ?>
        </h1>
        <!-- Affichage conditionnel du contenu -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            switch ($_POST['action']) {
                case 'gestionUtilisateurs':
                    echo "<p>Vous êtes dans la section de gestion des utilisateurs.</p>";
                    // Ajouter ici le contenu ou les formulaires pour la gestion des utilisateurs
                    break;
                case 'gestionNutritionnistes':
                    echo "<p>Vous êtes dans la section de gestion des nutritionnistes.</p>";
                    // Ajouter ici le contenu ou les formulaires pour la gestion des nutritionnistes
                    break;
            }
        }
        ?>
    </div>

</body>
</html>
