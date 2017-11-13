-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 23 oct. 2017 à 08:16
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_mini_chat_2017.10.21`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussions`
--

CREATE TABLE `discussions` (
  `d_id` int(11) NOT NULL,
  `d_sender` int(11) NOT NULL,
  `d_receiver` int(11) NOT NULL,
  `d_content` text NOT NULL,
  `d_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `discussions`
--

INSERT INTO `discussions` (`d_id`, `d_sender`, `d_receiver`, `d_content`, `d_date`) VALUES
(1, 1, 2, 'Salut Emile, c\'est Victor!! :)', '2017-10-22 00:00:00'),
(2, 1, 2, 'C\'etait pour avoir de tes nouvelles', '2017-10-22 00:00:00'),
(3, 1, 2, 'Raconte moi un peu comment ca va pour toi?', '2017-10-22 10:56:38'),
(4, 1, 2, 'Moi ca va', '2017-10-22 10:59:29'),
(5, 1, 2, 'Je me suis mis a la programmation\r\nJe decouvre', '2017-10-22 10:59:46'),
(6, 2, 1, 'Salut Victor, c\'est Emile!', '2017-10-22 11:01:08'),
(7, 2, 1, 'Je suis content que tu prennes de mes nouvelles!', '2017-10-22 11:01:19'),
(8, 2, 1, 'Je suis desole de voir que le monde a pris la tournure realistiquement sombre de mes livres..', '2017-10-22 11:01:42'),
(9, 1, 2, 'Oui mon ami, c\'est vrai ce que tu me dis..\r\nMais on peut garder l\'espoir, car meme si les medias font bien leur travail, il reste des gens de bien', '2017-10-22 11:03:11'),
(10, 1, 2, 'Oui mon ami, c\'est vrai ce que tu me dis..\r\nMais on peut garder l\'espoir, car meme si les medias font bien leur travail, il reste des gens de bien', '2017-10-22 11:05:54'),
(11, 1, 2, 'Oui mon ami, c\'est vrai ce que tu me dis..\r\nMais on peut garder l\'espoir, car meme si les medias font bien leur travail, il reste des gens de bien', '2017-10-22 11:06:11'),
(12, 1, 2, 'Salut emile, voici encore un test', '2017-10-22 03:07:55'),
(13, 1, 2, 'Salut emile, voici encore un test', '2017-10-22 03:22:03'),
(14, 1, 2, 'Message de Victor Hugo a emile zola		', '2017-10-22 04:10:20'),
(15, 1, 2, 'Message de Victor Hugo a emile zola		', '2017-10-22 04:10:48'),
(16, 1, 2, 'Message de Victor Hugo a emile zola		', '2017-10-22 04:16:40'),
(17, 1, 2, '		', '2017-10-22 04:17:48'),
(18, 1, 3, 'Salut pierre Bordage, c\'est Victor Hugo, message 1		', '2017-10-22 04:23:02'),
(19, 1, 3, 'Salut pierre Bordage, c\'est Victor Hugo, message 2		', '2017-10-22 04:23:17'),
(20, 3, 1, 'Salut Victor Hugo, c\'est pierre Bordage, message 1			', '2017-10-22 04:24:04'),
(21, 3, 1, 'Merci Victor Hugo d\'avoir pris de mes nouvelles, pierre Bordage, message 2		', '2017-10-22 04:24:28'),
(22, 3, 2, '		', '2017-10-22 04:24:37'),
(23, 1, 3, 'Slt pierrot, dernier message de victor avt le test de presentation des discussions message 3		', '2017-10-22 04:27:00'),
(24, 1, 3, 'Slt pierrot, dernier message de victor avt le test de presentation des discussions message 3		', '2017-10-22 04:47:53'),
(25, 1, 3, 'Bon c\'est encore Victor, premier essai apres la presentation de la discusisoin		', '2017-10-22 04:54:19'),
(26, 1, 3, '		Ca a l\'air pas trop mal', '2017-10-22 04:54:33'),
(27, 1, 3, '		Ca fait bien plaisir en fait', '2017-10-22 04:54:44'),
(28, 1, 3, '		Par contre je vois que le text area ne descend pas\r\n', '2017-10-22 04:55:03'),
(29, 1, 3, '		ca ressemble a un genre de focus ou de checked', '2017-10-22 04:55:24'),
(30, 3, 1, '		Salut victorino, c\'est emile, pas Louis, Zola\r\n', '2017-10-22 04:56:20'),
(31, 3, 1, '		Ah non merde, cest pierre, quel con!!', '2017-10-22 04:56:37'),
(32, 3, 1, '		J\' connais meme pas mon prenom, haha!!', '2017-10-22 04:56:52'),
(33, 3, 1, '		J\' connais meme pas mon prenom, haha!!', '2017-10-22 05:16:32'),
(34, 3, 1, '		J\' connais meme pas mon prenom, haha!!', '2017-10-22 05:16:41'),
(35, 3, 1, '		J\' connais meme pas mon prenom, haha!!', '2017-10-22 05:26:14'),
(36, 3, 1, '		J\' connais meme pas mon prenom, haha!!', '2017-10-22 05:26:27'),
(37, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:26:55'),
(38, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:29:54'),
(39, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:33:44'),
(40, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:33:54'),
(41, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:34:52'),
(42, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:35:15'),
(43, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:37:58'),
(44, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:38:07'),
(45, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:38:23'),
(46, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:38:31'),
(47, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:38:39'),
(48, 3, 1, '	Message apres avoir insere ligne de code pour scroller en bas\r\n	', '2017-10-22 05:38:44'),
(49, 3, 1, '		Bon je viens de trouver une technique pourave pour scroller en bas', '2017-10-22 05:39:04'),
(50, 3, 1, '		Mais vraiment trres pourave, il y aun leger decalage entre le chargement et le scroll d\'ailleurs', '2017-10-22 05:39:36'),
(51, 3, 1, '		j\'ai changé scrollTop par Bottom:0+\'px\'', '2017-10-22 05:40:23'),
(52, 3, 1, '		Mais ca marche pas, je vais remmetre la technique pourave pour l\'instant', '2017-10-22 05:42:31'),
(53, 3, 1, '		L\'idée était pas mauvaise dans l\'idée', '2017-10-22 05:42:53'),
(54, 3, 1, '		L\'idée était pas mauvaise dans l\'idée', '2017-10-22 05:44:16'),
(55, 3, 1, '		L\'idée était pas mauvaise dans l\'idée', '2017-10-22 05:48:18'),
(56, 3, 1, '		L\'idée était pas mauvaise dans l\'idée', '2017-10-22 05:48:53'),
(57, 2, 4, '		Salut Paulo, c\'est Emile!', '2017-10-22 05:50:16'),
(58, 2, 4, '		Mince, tu m\'avais pas envoyé un message?', '2017-10-22 05:50:35'),
(59, 2, 4, '		Je fais ma popote la', '2017-10-22 05:50:47'),
(60, 2, 1, '		Bon, j\'ecris pour tester\r\n', '2017-10-22 06:01:10'),
(61, 2, 1, '		mince, ca marche pas', '2017-10-22 06:01:36'),
(62, 2, 4, '		ca marche ici?', '2017-10-22 06:01:57'),
(63, 2, 1, '		allo?', '2017-10-22 06:02:16'),
(64, 2, 3, '		aLLO?', '2017-10-22 06:02:33'),
(65, 2, 3, '		ca marche ici', '2017-10-22 06:02:44'),
(66, 2, 1, '		test', '2017-10-22 06:03:00'),
(67, 2, 1, '		test', '2017-10-22 06:04:00'),
(68, 2, 1, '		test', '2017-10-22 06:04:08'),
(69, 2, 1, '		test', '2017-10-22 06:04:19'),
(70, 2, 1, '		test', '2017-10-22 06:05:41'),
(71, 2, 3, '		test', '2017-10-22 06:05:54'),
(72, 2, 4, '		test', '2017-10-22 06:06:22'),
(73, 2, 4, '		test', '2017-10-22 06:06:27'),
(74, 2, 1, '		test', '2017-10-22 06:10:48'),
(75, 2, 1, '		test', '2017-10-22 06:11:19'),
(76, 2, 1, '		test', '2017-10-22 06:12:47'),
(77, 2, 3, '		', '2017-10-22 06:17:29'),
(78, 2, 3, '		gsdg', '2017-10-22 06:18:09'),
(79, 2, 3, '	tre	', '2017-10-22 06:18:12'),
(80, 2, 3, '	tre	', '2017-10-22 06:18:24'),
(81, 2, 4, '		jtyjt', '2017-10-22 06:18:48'),
(82, 2, 1, '		rqqweq', '2017-10-22 06:18:56'),
(83, 2, 1, '		rqqweq', '2017-10-22 06:25:00'),
(84, 2, 1, '		rqqweq', '2017-10-22 06:25:13'),
(85, 2, 1, '		rqqweq', '2017-10-22 06:25:23'),
(86, 2, 1, '		rqqweq', '2017-10-22 06:25:33'),
(87, 2, 1, '		rqqweq', '2017-10-22 06:25:44'),
(88, 2, 1, '		hgff', '2017-10-22 06:25:57'),
(89, 2, 1, '		test a 18:26 de emile a victor', '2017-10-22 06:27:07'),
(90, 2, 1, '		test a 18:26 de emile a victor', '2017-10-22 06:28:51'),
(91, 2, 1, '		test a 18:26 de emile a victor', '2017-10-22 06:29:04'),
(92, 2, 1, '		test a 18:26 de emile a victor', '2017-10-22 06:49:08'),
(93, 2, 1, '		test a 18h49', '2017-10-22 06:49:23'),
(94, 2, 1, '		bon, ben c\'etait un pbm de nombre de ligne retournées par phpMyAdmin, qui est limité a 25', '2017-10-22 06:49:50'),
(95, 2, 1, '		j\'ai utilisé LIMIT 0, 100, mais le soucis c\'est que tu peux pas mettre directement de nombre dans la requete\r\n', '2017-10-22 06:50:38'),
(96, 2, 1, '		Il faut faire un bindValue() et mettre en troisieme argument le type de parametre lie a la requete', '2017-10-22 06:51:09'),
(97, 2, 1, '		bon j\'ai pas mis tant de temps que ca apres', '2017-10-22 06:51:24'),
(98, 2, 1, '		qu\'est ce au\'il me reste a faire??? a oui je voulais affiche ques les dernieres requeres, en requete SQL pure, pas trouvé, il faut faire une requete DEScendatne, et afficher que les premiere (donc les dernieres), puis utiliser array_reverse en PHP pour inverser le foreach de presentation des messages', '2017-10-22 06:52:53'),
(99, 2, 1, '		Aussi change le format horaire AM PM, c\'est la merde ce truc, vraiment du gros caca', '2017-10-22 06:53:28'),
(100, 2, 1, '		bon j\'ai trouve pour l\'heure am pm', '2017-10-22 18:58:59'),
(101, 2, 1, '		et ca se voit direct', '2017-10-22 18:59:08'),
(102, 2, 1, '		et ca se voit direct', '2017-10-22 19:04:26'),
(103, 2, 1, '		et ca se voit direct', '2017-10-22 19:04:54'),
(104, 1, 4, '		Bonjour Paulo', '2017-10-22 22:08:26'),
(105, 1, 4, 'Ca va?		', '2017-10-22 22:08:43'),
(106, 4, 1, '		Oui ca va merci', '2017-10-22 22:09:19'),
(107, 4, 1, '		cefcf\r\ncre', '2017-10-22 22:12:12'),
(108, 4, 1, '		cfrefce', '2017-10-22 22:12:15'),
(109, 4, 1, '	xwedxwed	', '2017-10-22 22:12:17'),
(110, 4, 1, '	xreefrcgr	', '2017-10-22 22:12:19'),
(111, 4, 1, '	ct	', '2017-10-22 22:12:21'),
(112, 4, 1, '	ctr	', '2017-10-22 22:12:22'),
(113, 4, 1, '	cfrtfc	', '2017-10-22 22:12:24'),
(114, 4, 1, '	cftrf	', '2017-10-22 22:12:25'),
(115, 4, 1, '	cftrfc	', '2017-10-22 22:12:27'),
(116, 4, 1, '	cftrf	', '2017-10-22 22:12:28'),
(117, 4, 1, '	komkm	', '2017-10-22 22:12:31'),
(118, 4, 1, '	buyhbyuhb	', '2017-10-22 22:12:33'),
(119, 4, 1, '		zaqzq', '2017-10-22 22:12:36'),
(120, 4, 1, '	xdwx	', '2017-10-22 22:12:38'),
(121, 4, 1, '		poule', '2017-10-22 22:12:43'),
(122, 4, 3, '	 cd 	', '2017-10-22 23:53:21'),
(123, 4, 4, '		jtyjt', '2017-10-22 23:54:10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(60) NOT NULL,
  `u_lname` varchar(60) NOT NULL,
  `u_login` varchar(30) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_email` varchar(60) NOT NULL,
  `u_status` varchar(20) NOT NULL DEFAULT 'deconnected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_lname`, `u_login`, `u_password`, `u_email`, `u_status`) VALUES
(1, 'Victor', 'Hugo', 'Victorlogin', 'Hugopwd', 'victor.hugo@gmail.com', 'deconnected'),
(2, 'Emile', 'Zola', 'Emilelogin', 'Zolapwd', 'emile.zola@gmail.com', 'deconnected'),
(3, 'Pierre', 'Bordage', 'Pierrelogin', 'Bordagepwd', 'pierre.bordage@gmail.com', 'deconnected'),
(4, 'Paulo', 'Coehlo', 'Paulologin', 'Coehlopwd', 'paulo.coehlo@gmail.com', 'deconnected');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `d_sender` (`d_sender`,`d_receiver`),
  ADD KEY `d_receiver` (`d_receiver`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_login` (`u_login`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`d_sender`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `discussions_ibfk_2` FOREIGN KEY (`d_receiver`) REFERENCES `users` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
