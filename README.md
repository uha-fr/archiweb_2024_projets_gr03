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
```
## Lancement du web-app
Aprés l'installation et la configuration vous pouvez accéder à l'application par cette url :
`http://localhost/archiweb_2024_projets_gr03/public/`

## Documentation
### Backlog
Pour le sprint 1:
| Priorité | Tâche                                                  | Description                                                          |Assignée à |
| Haute    | Configuration de l'Environnement de Développement      | Mettre en place les serveurs et environnements de développement.     | Toute l'équipe |
| Haute    | Conception de la Base de Données                       | Définir les schémas pour les utilisateurs, recettes, repas.          | Badr/Ahcene |
| Haute    | Mise en Place du Framework Front-End (Tailwind)        | Intégrer Tailwind et créer un template de base.                      |Sonia/Ayah  |
| Haute    | Page d'Accueil et Navigation                           | Développer une page d'accueil et système de navigation.              | Sonia |
| Moyenne  | Fonctionnalité d'Inscription des Utilisateurs          | Implementer la logique inscription et connexion et validation côté serveur.  |Badr  |
| Moyenne  | Fonctionnalité de Connexion des Utilisateurs           | Créer les formulaires de connexion et inscription.                   |Sonia  |
| Moyenne  | Conception d'une Interface pour la Gestion des Profils | Créer une interface pour gérer le profil utilisateur.                | Ayah |
| Moyenne  | Conception d'une Interface pour la Gestion des Profils | Créer une interface pour gérer le profil nutrisionite.               | Sonia|
| Moyenne  | Conception d'une Interface pour la Gestion des Profils | Créer une interface pour gérer le profil admin.                      | Ahcene |
| Basse    | Test et Validation                                     | Tester les fonctionnalités et assurer la sécurité des formulaires.   | Sonia |
| Basse    | Documentation                                          | Documenter les choix techniques et configurations.                   | Badr |
### Schéma actuelle de la base de données
### Identité visuelle
lien vers le figma : [visual identity board](https://www.figma.com/file/ueHI18DFaa58xfa1ceqSSJ/Visual-identity?type=design&node-id=0%3A1&mode=design&t=ErciRZZByM3St0u5-1)
