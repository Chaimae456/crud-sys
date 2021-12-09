-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 déc. 2021 à 09:38
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE `accounts` (
  `idac` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accounts`
--

INSERT INTO `accounts` (`idac`, `FirstName`, `Email`, `password`, `type`) VALUES
(51, 'nidal', 'nidal@gmail', '$2y$10$G7ohN6iM6EjPjShnjUx.u.yaX6zS4ZCeTyuvUtGSrHa9tXhPoxPvS', 1),
(56, 'test', 'test@gmail', '$2y$10$teTZ/9tl2RycMSSfubpoIep9d3OHFqfTnq8GIDZdHsA0Fx/CD1NM.', 0),
(57, 'test', 'teeeest@gmail', '$2y$10$fQ0uW/QzlQG/3FSCASbgrOCb1.Sg1I8i9ziKlrj7rinAdwg/a.f4S', 0),
(58, 'test', 'tests@gmail', '$2y$10$erw6WZbIjcB59QVwOONLPOl9uDywWrmImfQvDTywnHYz2orSq1ox2', 0),
(59, 'test', 'test@gmailtt', '$2y$10$NV1O2PMp7eteQalnTbdwIOF8jWbWHpYxMDC.AZmBGxNubImAEndSO', 0),
(60, 'chaimae', 'chaimae@gmail', '$2y$10$Vqe5dh/XIt.8PE4O0h7aleFEfQncuIe2hcdMi4CNPqeh7tjifC4V.', 0),
(61, 'chaimae', 'chaimaetest@gmail', '$2y$10$b.yCUHzOl.Cz.opnMI/nVO8AS6WFku/9Jwp3fx.nSFRhjPZ03wxXW', 0),
(62, 'chaimae1', 'chaimaee@gmail', '$2y$10$ClqUpqkcQ.oMFYPkVfUJueURiizXO95pQuF.egQyAelpimKvslpjy', 0),
(63, 'chaimae', 'chaimaet@gmail', '$2y$10$SiZXrDmCtqHXrrlT5AzEP.0PUPahzzu/piarcPOLQbpgTk/Y282Oe', 0),
(64, 'chaimae', 'tesss@gmail', '$2y$10$qe/Htl.Kjw3EnlIEIOQfT.X74VlITcTBrgvftI/RDKpbxl/CZH7ZC', 0),
(65, 'chaimae', 'tessst@gmail', '$2y$10$HOi5/P2dFHV7yGXrSdja3OZKI7XbBBogvL0l0LA1J31UUzi5Ooh5i', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Specialization` varchar(50) DEFAULT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`idac`);

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `idac` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
