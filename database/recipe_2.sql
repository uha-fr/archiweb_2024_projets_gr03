-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 mars 2024 à 10:12
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recipe`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id_ingredient` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredientcategory`
--

DROP TABLE IF EXISTS `ingredientcategory`;
CREATE TABLE IF NOT EXISTS `ingredientcategory` (
  `id_category` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredientimage`
--

DROP TABLE IF EXISTS `ingredientimage`;
CREATE TABLE IF NOT EXISTS `ingredientimage` (
  `id_image` int NOT NULL,
  `id_ingredient` int DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_ingredient` (`id_ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredientrecipe`
--

DROP TABLE IF EXISTS `ingredientrecipe`;
CREATE TABLE IF NOT EXISTS `ingredientrecipe` (
  `id_aliment_recipe` int NOT NULL,
  `id_measure` int DEFAULT NULL,
  `id_ingredient` int DEFAULT NULL,
  `id_recipe` int DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  PRIMARY KEY (`id_aliment_recipe`),
  KEY `id_measure` (`id_measure`),
  KEY `id_ingredient` (`id_ingredient`),
  KEY `id_recipe` (`id_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `measure`
--

DROP TABLE IF EXISTS `measure`;
CREATE TABLE IF NOT EXISTS `measure` (
  `id_measure` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_measure`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nutrition`
--

DROP TABLE IF EXISTS `nutrition`;
CREATE TABLE IF NOT EXISTS `nutrition` (
  `id_nutrition` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_nutrition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nutritionalgoals`
--

DROP TABLE IF EXISTS `nutritionalgoals`;
CREATE TABLE IF NOT EXISTS `nutritionalgoals` (
  `id_goal` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `calories_goal` float DEFAULT NULL,
  `proteins_goal` float DEFAULT NULL,
  `lipids_goal` float DEFAULT NULL,
  `carbohydrates_goal` float DEFAULT NULL,
  `fiber_goal` float DEFAULT NULL,
  `date_modif` date DEFAULT NULL,
  PRIMARY KEY (`id_goal`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nutritioningredient`
--

DROP TABLE IF EXISTS `nutritioningredient`;
CREATE TABLE IF NOT EXISTS `nutritioningredient` (
  `id_nutrition` int NOT NULL,
  `id_ingredient` int NOT NULL,
  PRIMARY KEY (`id_nutrition`,`id_ingredient`),
  KEY `id_ingredient` (`id_ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `nutritiontracking`
--

DROP TABLE IF EXISTS `nutritiontracking`;
CREATE TABLE IF NOT EXISTS `nutritiontracking` (
  `id_tracker` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `calories_tracked` float DEFAULT NULL,
  `proteins_tracked` float DEFAULT NULL,
  `lipids_tracked` float DEFAULT NULL,
  `carbohydrates_tracked` float DEFAULT NULL,
  `fiber_tracked` float DEFAULT NULL,
  `date_tracked` date DEFAULT NULL,
  PRIMARY KEY (`id_tracker`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id_recipe` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_modif` date DEFAULT NULL,
  `id_author` int DEFAULT NULL,
  `prep_time` int DEFAULT NULL,
  `cooking_time` int DEFAULT NULL,
  `difficulty` enum('Easy','Medium','Hard') DEFAULT NULL,
  PRIMARY KEY (`id_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipefavorite`
--

DROP TABLE IF EXISTS `recipefavorite`;
CREATE TABLE IF NOT EXISTS `recipefavorite` (
  `id_user` int NOT NULL,
  `id_recipe` int NOT NULL,
  PRIMARY KEY (`id_user`,`id_recipe`),
  KEY `id_recipe` (`id_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reset_password`
--

DROP TABLE IF EXISTS `reset_password`;
CREATE TABLE IF NOT EXISTS `reset_password` (
  `id` int NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `expiry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

DROP TABLE IF EXISTS `step`;
CREATE TABLE IF NOT EXISTS `step` (
  `id_step` int NOT NULL,
  `id_recipe` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `step_number` int DEFAULT NULL,
  PRIMARY KEY (`id_step`),
  KEY `id_recipe` (`id_recipe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sexe` text COLLATE utf8mb4_general_ci NOT NULL,
  `age` int DEFAULT NULL,
  `taille` int DEFAULT NULL,
  `poids` int DEFAULT NULL,
  `date_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
