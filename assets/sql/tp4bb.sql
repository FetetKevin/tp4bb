-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Novembre 2016 à 14:42
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp4bb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(1, 'rap'),
(2, 'rock'),
(3, 'electro'),
(4, 'reggea');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id_role`, `nom_role`) VALUES
(1, 'admin'),
(2, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `roles_id_role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `motDePasse`, `roles_id_role`) VALUES
(2, 'Fetet', 'Kevin', 'fetetkevin@gmail.com', 'insectile22', 1),
(26, 'a', 'a', 'a@a.com', 'a', 2);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `videos_id_role` int(11) DEFAULT NULL,
  `categories_id_categorie` int(11) DEFAULT NULL,
  `url_video` varchar(255) NOT NULL,
  `titre_video` varchar(255) NOT NULL,
  `desc_video` varchar(2000) NOT NULL,
  `categorie_video` varchar(255) NOT NULL,
  `date_video` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `videos`
--

INSERT INTO `videos` (`id_video`, `videos_id_role`, `categories_id_categorie`, `url_video`, `titre_video`, `desc_video`, `categorie_video`, `date_video`) VALUES
(10, NULL, NULL, 'CfB9qIgSMsg', 'Vald - Urbanisme - 11.43 AM ', '&quot;Urbanisme, extrait de NQNT 2 dispo en prÃ©-commande : http://po.st/NQNT2iTunes (sortie le 25 septembre).\r\n\r\nLa suite de la journÃ©e de VALD :\r\nUrbanisme - 3.57 PM\r\nUrbanisme - 6.35 PM Ecoute le titre et ajoute-le Ã  ta playlist :\r\nDeezer http://po.st/UrbanismeDeezer\r\nSpotify http://po.st/UrbanismeSpotify\r\n\r\nhttps://www.facebook.com/VALDNQNT\r\nhttps://twitter.com/vald_ld&quot;\r\n', '1', '2016-10-27'),
(11, NULL, NULL, 'SqZNMvIEHhs', 'System Of A Down - Spiders', 'Lyrics:\r\n\r\nThe piercing radiant moon,\r\nThe storming of poor June,\r\nAll the liferunning through her hair,\r\nApproaching guiding light,\r\nOur shallow years in fright,\r\nDreams are made winding through my head,\r\nThrough my head,\r\nBefore you know,\r\nAwake,\r\nYour lives are open wide,\r\nThe V-chip gives them sight,\r\nAll the life running through her hair,\r\nThe spiders all in tune,\r\nThe evening of the moon,\r\nDreams are made winding through my head,\r\nThrough my head,\r\nBefore you know,\r\nAwake', '2', '2016-10-27'),
(12, NULL, NULL, 'x537Cqg5nEI', 'salut câ€™est cool - Techno toujours pareil ', '&quot;RÃ©alisÃ© par : Salut Câ€™est Cool\r\nProducteur : Kidding Aside&quot;', '3', '2016-10-27'),
(13, NULL, NULL, 'C-2QcC7PCZg', 'Biffty - Jamaican &quot;Souye&quot; Trap (Part. 420) Ft. Julius &amp; Keulasouye ', 'A l\'occasion du 20 Avril dernier, Biffty Ã  offert sur facebook ce Freestyle dÃ©jÃ  lÃ©gendaire : Jamaican &quot;Souye&quot; Trap (Part 420) avec ses compÃ¨res du Souye Game Julius et Keulasouye !', '4', '2016-10-27'),
(14, NULL, NULL, 'CHekNnySAfM', 'Bob Marley - Is this Love ', 'Bob Marley - Is this love\r\n\r\nThanks for the views', '4', '2016-10-27'),
(15, NULL, NULL, '8ybIROZVQPw', 'Mayhem - It\'s Murder - Full Album ', 'Tracklist:\r\n0:00 - Better Day\r\n3:39 - Stylostyler\r\n6:51 - Rescue\r\n9:30 - Laugh at Life\r\n12:09 - Doctor Rocker\r\n14:34 - It\'s Murder\r\n17:03 - Tank! Tank! Tank!\r\n19:29 - West Mansion\r\n22:47 - Eggs\r\n25:23 - Dum Dum Diday\r\n27:35 - Nailgun\r\n31:01 - 120 Red\r\n33:13 - How I Love\r\n36:26 - Spinback\r\n38:34 - Shockrocker\r\n41:25 - The Crunch\r\n44:19 - Don\'t Cry Jennifer', '3', '2016-10-27'),
(16, NULL, NULL, 'PQtRXqBQETA', 'Serj Tankian - Harakiri ', 'Â© 2012 WMG Serj Tankian\'s Official Video for &quot;Harakiri&quot;', '2', '2016-10-27'),
(17, NULL, NULL, '3EUvJlgxzmk', 'AlKpote | Mon Histoire (Clip officiel) | Album : L\'Empereur ', 'Titre &quot;Mon histoire&quot; issu de l\'album &quot;L\'Empereur&quot; d\'AlKpote sorti en 2008.', '1', '2016-10-27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `roles_id_role` (`roles_id_role`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
