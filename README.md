# Manger - Projet en PHP MVC

## Description du Projet
"Manger" est un projet basé sur le modèle MVC (Modèle-Vue-Contrôleur) en PHP, conçu pour faciliter la gestion des recettes et des repas. L'objectif principal de ce projet est de fournir une plateforme conviviale permettant aux utilisateurs de créer, partager et explorer des recettes, ainsi que de planifier leurs repas.

## Fonctionnalités Principales
- **Gestion des Recettes:** Ajoutez, modifiez et supprimez facilement des recettes avec des détails complets, y compris les ingrédients, les étapes de préparation et les images.
- **Exploration des Recettes:** Parcourez une collection diversifiée de recettes partagées par la communauté.
- **Planification des Repas:** Planifiez vos repas en fonction des recettes disponibles dans la base de données.
- **Système d'Utilisateur:** Créez un compte, connectez-vous et gérez votre profil d'utilisateur.

## Prérequis
- PHP 7.x
- Serveur Web (ex: Apache)
- Base de données MySQL

## Installation
1. Clonez le projet depuis le dépôt Git : `git clone https://github.com/uha-fr/archiweb_2024_projets_gr03.git`
2. Modifiez le fichier `app/config.php` avec les informations spécifiques à votre configuration.
3. Importez la base de données fournie dans le dossier `database/`.
4. Lancez l'application dans votre navigateur.

## Configuration
Modifiez le fichier `app/config.php` avec les informations de connexion à votre base de données.

```php
<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'recipe');
define('DB_USER', 'votre_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');

?>
