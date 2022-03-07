-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 06 mars 2022 à 21:44
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdm`
--

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `id_mot` int(11) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `mot` varchar(255) CHARACTER SET utf8 NOT NULL,
  `occurence` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`id_mot`, `documents`, `modele`, `mot`, `occurence`) VALUES
(1, 'texte.txt', 'C:laragonwwwsearchmot', 'sincÃ¨re', 1),
(2, 'texte.txt', 'C:laragonwwwsearchmot', 'relation', 1),
(3, 'texte.txt', 'C:laragonwwwsearchmot', 'entretiens', 1),
(4, 'texte.txt', 'C:laragonwwwsearchmot', 'nouvelles', 1),
(5, 'texte.txt', 'C:laragonwwwsearchmot', 'entendre', 1),
(6, 'texte.txt', 'C:laragonwwwsearchmot', 'voix', 1),
(7, 'texte.txt', 'C:laragonwwwsearchmot', 'familiÃ¨re', 1),
(8, 'texte.txt', 'C:laragonwwwsearchmot', 'tÃ©lÃ©phone', 1),
(9, 'texte.txt', 'C:laragonwwwsearchmot', 'partager', 1),
(10, 'texte.txt', 'C:laragonwwwsearchmot', 'repas', 1),
(11, 'texte.txt', 'C:laragonwwwsearchmot', '\r\nAssurÃ©ment', 1),
(12, 'texte.txt', 'C:laragonwwwsearchmot', 'Ã©changes', 1),
(13, 'texte.txt', 'C:laragonwwwsearchmot', 'sporadiques', 1),
(14, 'texte.txt', 'C:laragonwwwsearchmot', 'foudres', 1),
(15, 'texte.txt', 'C:laragonwwwsearchmot', 'malentendus', 1),
(16, 'texte.txt', 'C:laragonwwwsearchmot', 'discussions', 1),
(17, 'texte.txt', 'C:laragonwwwsearchmot', 'sombrent', 1),
(18, 'texte.txt', 'C:laragonwwwsearchmot', 'explications', 1),
(19, 'texte.txt', 'C:laragonwwwsearchmot', 'finir', 1),
(20, 'texte.txt', 'C:laragonwwwsearchmot', 'voire', 1),
(21, 'texte.txt', 'C:laragonwwwsearchmot', 'gens', 1),
(22, 'texte.txt', 'C:laragonwwwsearchmot', 'Ã©crivent', 1),
(23, 'texte.txt', 'C:laragonwwwsearchmot', 'savoir', 1),
(24, 'texte.txt', 'C:laragonwwwsearchmot', 'vivante\r\nSe', 1),
(25, 'texte.txt', 'C:laragonwwwsearchmot', 'levant', 1),
(26, 'texte.txt', 'C:laragonwwwsearchmot', 'poing', 1),
(27, 'texte.txt', 'C:laragonwwwsearchmot', 'foudroie', 1),
(28, 'texte.txt', 'C:laragonwwwsearchmot', 'tÃ¢che', 1),
(29, 'texte.txt', 'C:laragonwwwsearchmot', 'peau', 1),
(30, 'texte.txt', 'C:laragonwwwsearchmot', 'bleu', 1),
(31, 'texte.txt', 'C:laragonwwwsearchmot', 'incrÃ©dule', 1),
(32, 'texte.txt', 'C:laragonwwwsearchmot', 'transperce', 1),
(33, 'texte.txt', 'C:laragonwwwsearchmot', 'murs\r\nsourds', 1),
(34, 'texte.txt', 'C:laragonwwwsearchmot', 'abÃ®me', 1),
(35, 'texte.txt', 'C:laragonwwwsearchmot', 'reste', 1),
(36, 'texte.txt', 'C:laragonwwwsearchmot', 'impuni', 1),
(37, 'texte.txt', 'C:laragonwwwsearchmot', 'Verbe', 1),
(38, 'texte.txt', 'C:laragonwwwsearchmot', 'destructeur', 1),
(39, 'texte.txt', 'C:laragonwwwsearchmot', 'empoisonne', 1),
(40, 'texte.txt', 'C:laragonwwwsearchmot', 'veines\r\ndÃ©molit', 1),
(41, 'texte.txt', 'C:laragonwwwsearchmot', 'Ã¢me', 1),
(42, 'texte.txt', 'C:laragonwwwsearchmot', 'oreille', 1),
(43, 'texte.txt', 'C:laragonwwwsearchmot', 'voisine', 1),
(44, 'texte.txt', 'C:laragonwwwsearchmot', 'voile', 1),
(45, 'texte.txt', 'C:laragonwwwsearchmot', 'belles', 1),
(46, 'texte.txt', 'C:laragonwwwsearchmot', 'paroles\r\ncachent', 1),
(47, 'texte.txt', 'C:laragonwwwsearchmot', 'sanglots', 1),
(48, 'texte.txt', 'C:laragonwwwsearchmot', 'prince', 2),
(49, 'texte.txt', 'C:laragonwwwsearchmot', 'prince', 2),
(50, 'texte.txt', 'C:laragonwwwsearchmot', 'charmant', 1),
(51, 'texte.txt', 'C:laragonwwwsearchmot', 'brode', 1),
(52, 'texte.txt', 'C:laragonwwwsearchmot', 'enfer', 1),
(53, 'texte.txt', 'C:laragonwwwsearchmot', 'quotidien\r\nen', 1),
(54, 'texte.txt', 'C:laragonwwwsearchmot', 'maitre', 1),
(55, 'texte.txt', 'C:laragonwwwsearchmot', 'absolu', 1),
(56, 'texte.txt', 'C:laragonwwwsearchmot', 'communication', 3),
(57, 'texte.txt', 'C:laragonwwwsearchmot', 'communication', 3),
(58, 'texte.txt', 'C:laragonwwwsearchmot', 'communication', 3),
(59, 'texte.txt', 'C:laragonwwwsearchmot', 'ensemble', 2),
(60, 'texte.txt', 'C:laragonwwwsearchmot', 'ensemble', 2),
(61, 'texte.txt', 'C:laragonwwwsearchmot', 'interactions', 1),
(62, 'texte.txt', 'C:laragonwwwsearchmot', 'autrui', 1),
(63, 'texte.txt', 'C:laragonwwwsearchmot', 'transmettent', 1),
(64, 'texte.txt', 'C:laragonwwwsearchmot', 'information', 1),
(65, 'texte.txt', 'C:laragonwwwsearchmot', 'distingue', 1),
(66, 'texte.txt', 'C:laragonwwwsearchmot', 'communication\r\n', 1),
(67, 'texte.txt', 'C:laragonwwwsearchmot', 'interpersonnelle', 1),
(68, 'texte.txt', 'C:laragonwwwsearchmot', 'groupe', 1),
(69, 'texte.txt', 'C:laragonwwwsearchmot', 'masse', 1),
(70, 'texte.txt', 'C:laragonwwwsearchmot', 'moyens', 1),
(71, 'texte.txt', 'C:laragonwwwsearchmot', 'techniques', 1),
(72, 'texte.txt', 'C:laragonwwwsearchmot', 'permettant', 1),
(73, 'texte.txt', 'C:laragonwwwsearchmot', 'diffusion', 1),
(74, 'texte.txt', 'C:laragonwwwsearchmot', 'message', 1),
(75, 'texte.txt', 'C:laragonwwwsearchmot', 'organisation', 1),
(76, 'texte.txt', 'C:laragonwwwsearchmot', 'sociale', 1),
(77, 'texte.txt', 'C:laragonwwwsearchmot', 'auprÃ¨s', 1),
(78, 'texte.txt', 'C:laragonwwwsearchmot', 'large', 1),
(79, 'texte.txt', 'C:laragonwwwsearchmot', 'audience', 1),
(80, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\nPlusieurs', 1),
(81, 'texte2.txt', 'C:laragonwwwsearchmot', 'disciplines', 1),
(82, 'texte2.txt', 'C:laragonwwwsearchmot', 'emploient', 1),
(83, 'texte2.txt', 'C:laragonwwwsearchmot', 'notion', 1),
(84, 'texte2.txt', 'C:laragonwwwsearchmot', 'communication', 5),
(85, 'texte2.txt', 'C:laragonwwwsearchmot', 'communication', 5),
(86, 'texte2.txt', 'C:laragonwwwsearchmot', 'communication', 5),
(87, 'texte2.txt', 'C:laragonwwwsearchmot', 'communication', 5),
(88, 'texte2.txt', 'C:laragonwwwsearchmot', 'communication', 5),
(89, 'texte2.txt', 'C:laragonwwwsearchmot', 'accorder', 1),
(90, 'texte2.txt', 'C:laragonwwwsearchmot', 'dÃ©finition', 1),
(91, 'texte2.txt', 'C:laragonwwwsearchmot', 'commune', 1),
(92, 'texte2.txt', 'C:laragonwwwsearchmot', 'Comme', 1),
(93, 'texte2.txt', 'C:laragonwwwsearchmot', 'constate', 1),
(94, 'texte2.txt', 'C:laragonwwwsearchmot', 'Daniel', 1),
(95, 'texte2.txt', 'C:laragonwwwsearchmot', 'Bougnoux', 1),
(96, 'texte2.txt', 'C:laragonwwwsearchmot', 'Nulle', 1),
(97, 'texte2.txt', 'C:laragonwwwsearchmot', 'part', 1),
(98, 'texte2.txt', 'C:laragonwwwsearchmot', 'existe', 1),
(99, 'texte2.txt', 'C:laragonwwwsearchmot', 'terme', 1),
(100, 'texte2.txt', 'C:laragonwwwsearchmot', 'recouvre', 1),
(101, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\ntrop', 1),
(102, 'texte2.txt', 'C:laragonwwwsearchmot', 'pratiques', 1),
(103, 'texte2.txt', 'C:laragonwwwsearchmot', 'nÃ©cessairement', 1),
(104, 'texte2.txt', 'C:laragonwwwsearchmot', 'disparates', 1),
(105, 'texte2.txt', 'C:laragonwwwsearchmot', 'indÃ©finiment', 1),
(106, 'texte2.txt', 'C:laragonwwwsearchmot', 'ouvertes', 1),
(107, 'texte2.txt', 'C:laragonwwwsearchmot', 'dÃ©nombrables1', 1),
(108, 'texte2.txt', 'C:laragonwwwsearchmot', 'monde', 1),
(109, 'texte2.txt', 'C:laragonwwwsearchmot', 'accorde', 1),
(110, 'texte2.txt', 'C:laragonwwwsearchmot', 'dÃ©finir', 1),
(111, 'texte2.txt', 'C:laragonwwwsearchmot', 'processus', 1),
(112, 'texte2.txt', 'C:laragonwwwsearchmot', 'points', 1),
(113, 'texte2.txt', 'C:laragonwwwsearchmot', 'vue', 1),
(114, 'texte2.txt', 'C:laragonwwwsearchmot', 'divergent', 1),
(115, 'texte2.txt', 'C:laragonwwwsearchmot', 'lorsqu', 1),
(116, 'texte2.txt', 'C:laragonwwwsearchmot', 'agit', 1),
(117, 'texte2.txt', 'C:laragonwwwsearchmot', 'qualifier', 1),
(118, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\nLes', 1),
(119, 'texte2.txt', 'C:laragonwwwsearchmot', 'sciences', 2),
(120, 'texte2.txt', 'C:laragonwwwsearchmot', 'sciences', 2),
(121, 'texte2.txt', 'C:laragonwwwsearchmot', 'information', 2),
(122, 'texte2.txt', 'C:laragonwwwsearchmot', 'information', 2),
(123, 'texte2.txt', 'C:laragonwwwsearchmot', 'proposent', 1),
(124, 'texte2.txt', 'C:laragonwwwsearchmot', 'approche', 1),
(125, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\ncommunication', 1),
(126, 'texte2.txt', 'C:laragonwwwsearchmot', 'basÃ©e', 1),
(127, 'texte2.txt', 'C:laragonwwwsearchmot', 'thÃ©orie', 1),
(128, 'texte2.txt', 'C:laragonwwwsearchmot', 'Ã©ventuellement', 1),
(129, 'texte2.txt', 'C:laragonwwwsearchmot', 'complÃ©tÃ©e', 1),
(130, 'texte2.txt', 'C:laragonwwwsearchmot', 'apports', 1),
(131, 'texte2.txt', 'C:laragonwwwsearchmot', 'cognitives', 1),
(132, 'texte2.txt', 'C:laragonwwwsearchmot', 'psychologie', 1),
(133, 'texte2.txt', 'C:laragonwwwsearchmot', 'sociale', 1),
(134, 'texte2.txt', 'C:laragonwwwsearchmot', 'intÃ©resse', 1),
(135, 'texte2.txt', 'C:laragonwwwsearchmot', 'essentiellement', 1),
(136, 'texte2.txt', 'C:laragonwwwsearchmot', 'interpersonnelle', 1),
(137, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\nUn', 1),
(138, 'texte2.txt', 'C:laragonwwwsearchmot', 'mÃ©tier', 1),
(139, 'texte2.txt', 'C:laragonwwwsearchmot', 'activitÃ©', 1),
(140, 'texte2.txt', 'C:laragonwwwsearchmot', 'professionnelle', 1),
(141, 'texte2.txt', 'C:laragonwwwsearchmot', 'destinÃ©e', 1),
(142, 'texte2.txt', 'C:laragonwwwsearchmot', '\r\nconvaincre', 1),
(143, 'texte2.txt', 'C:laragonwwwsearchmot', 'persuader', 1),
(144, 'texte2.txt', 'C:laragonwwwsearchmot', 'travers', 1),
(145, 'texte2.txt', 'C:laragonwwwsearchmot', 'mÃ©dias', 1),
(146, 'texte2.txt', 'C:laragonwwwsearchmot', 'moderne', 1),
(147, 'texte2.txt', 'C:laragonwwwsearchmot', 'rhÃ©torique', 1),
(148, 'texte3.txt', 'C:laragonwwwsearchmot', 'prince', 1),
(149, 'texte3.txt', 'C:laragonwwwsearchmot', 'joue', 1),
(150, 'texte3.txt', 'C:laragonwwwsearchmot', 'ballon', 1),
(151, 'texte3.txt', 'C:laragonwwwsearchmot', 'communication', 1),
(152, 'texte3.txt', 'C:laragonwwwsearchmot', 'amour', 1),
(153, 'texte3.txt', 'C:laragonwwwsearchmot', 'douleur', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`id_mot`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `id_mot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
