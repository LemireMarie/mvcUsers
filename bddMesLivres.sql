-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table meslivres. books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table meslivres.books : ~5 rows (environ)
INSERT INTO `books` (`id`, `name`, `description`, `price`) VALUES
	(18, 'Apprenez les langages HTML5', 'Ce livre s&#039;adresse &agrave; de grands d&eacute;butants en d&eacute;veloppement informatique, qui n&#039;ont jamais programm&eacute; avec HTML5...', 35),
	(19, 'Pimpez votre site web grace &agrave; CSS3', 'Con&ccedil;u pour les d&eacute;butants, cet ouvrage vous permettra de styliser vos pages con&ccedil;ues en HTML 5 gr&acirc;ce &agrave; CSS 3...', 25),
	(20, 'Oh my code (JS edition)', 'Le JavaScript sert avant tout à rendre les pages web interactives et dynamiques du côté de l’utilisateur, mais il est  également de plus en plus utilisé pour...', 20),
	(21, 'PHP 8 by Olivier Heurtrel', 'Ce livre sur PHP 8 (en version 8.0 au moment de l&#039;&eacute;criture) s&#039;adresse aux concepteurs et d&eacute;veloppeurs qui souhaitent utiliser PHP pour d&eacute;velopper...', 35),
	(46, 'SQL pour les nuls', 'SQL pour d&eacute;butants', 30);

-- Listage de la structure de table meslivres. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table meslivres.users : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
