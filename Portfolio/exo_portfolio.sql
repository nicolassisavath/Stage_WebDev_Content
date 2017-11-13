-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Novembre 2017 à 13:22
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exo_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `a_id` int(11) NOT NULL,
  `a_presentation` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`a_id`, `a_presentation`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `c_id` int(11) NOT NULL,
  `c_nom` varchar(40) DEFAULT NULL,
  `c_prenom` varchar(40) DEFAULT NULL,
  `c_content` varchar(3000) DEFAULT NULL,
  `c_email` varchar(25) DEFAULT NULL,
  `c_tel` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`c_id`, `c_nom`, `c_prenom`, `c_content`, `c_email`, `c_tel`) VALUES
(1, 'j', 'poiyuituyrtyqgd', 'hjghjghj', 'jhg', '0'),
(2, 'j', 'poiyuituyrtyqgd', 'hjghjghj', 'jhg', '0'),
(3, 'hjgh', 'jhgf', 'qjgfgfdhj', 'jghjhj', '1234567890'),
(4, 'hgfh', 'hgfh', 'fj,d hr hr', 'hgfh', '35435'),
(5, 'hgfh', 'hgfh', 'fj,d hr hr', 'hgfh', '35435'),
(6, 'hrtsh', NULL, '2453', 'lo', '25437387'),
(7, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(8, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(9, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(10, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(11, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(12, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(13, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(14, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(15, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(16, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(17, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(18, 'ngf', 'ngdf', 'ud jdsty jty', 'ngf', '2452'),
(19, 'gfd', '', 'gfd', '', '0');

-- --------------------------------------------------------

--
-- Structure de la table `images_realisations`
--

CREATE TABLE `images_realisations` (
  `i_id` int(11) NOT NULL,
  `i_path` varchar(256) DEFAULT NULL,
  `r_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images_realisations`
--

INSERT INTO `images_realisations` (`i_id`, `i_path`, `r_id_fk`) VALUES
(1, 'assets/img/Real_1/description.jpg', 1),
(2, 'assets/img/Real_1/d-web-pages-templates-agri1200-01.jpg', 1),
(3, 'assets/img/Real_1/ictworldnews24.jpg', 1),
(4, 'assets/img/Real_2/description.jpg', 2),
(5, 'assets/img/Real_2/free-html5-website-template-airlines.jpg', 2),
(6, 'assets/img/Real_2/it-technologies.jpg', 2),
(7, 'assets/img/Real_3/description.jpg', 3),
(8, 'assets/img/Real_3/interior-design-psd-template_42775_01_home_big.jpg', 3),
(9, 'assets/img/Real_3/Music-Site.jpg', 3),
(12, 'assets/img/Real_4/description.jpg', 4),
(13, 'assets/img/Real_4/d-flash-websites-template-busi462-01.jpg', 4),
(14, 'assets/img/Real_4/d-full-css-website-templates-beau1562-01.jpg', 4),
(15, 'assets/img/Real_4/website-templates-free-website-templates-free-web-templates-photo-website-templates.jpg', 4),
(16, 'assets/img/Real_5/description.jpg', 5),
(17, 'assets/img/Real_5/2177_green-white_spa.jpg', 5),
(18, 'assets/img/Real_5/image2.jpg', 5),
(19, 'assets/img/Real_5/images.jpg', 5),
(20, 'assets/img/Real_5/lovely_pets_photography_template_2437.jpg', 5),
(21, 'assets/img/Real_6/description.jpg', 6),
(22, 'assets/img/Real_6/d-html-css-web-templates-busi1078-01.jpg', 6),
(23, 'assets/img/Real_6/images2.jpg', 6),
(24, 'assets/img/Real_6/images.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

CREATE TABLE `realisations` (
  `r_id` int(11) NOT NULL,
  `r_titre` varchar(40) DEFAULT NULL,
  `r_description` varchar(2000) DEFAULT NULL,
  `r_titre_prestation` varchar(40) DEFAULT NULL,
  `r_image_descr_path` varchar(200) DEFAULT NULL,
  `r_presta_link` varchar(256) DEFAULT NULL,
  `r_img_dossier` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `realisations`
--

INSERT INTO `realisations` (`r_id`, `r_titre`, `r_description`, `r_titre_prestation`, `r_image_descr_path`, `r_presta_link`, `r_img_dossier`) VALUES
(1, 'titre du site 1', 'Site 1 jaune vert\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.\r\n', 'titre_prestation site 1', 'assets/img/Real_1/description.jpg', NULL, 'assets/img/Real_1'),
(2, 'titre du site 2', 'Site 2 noir et bleu\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.', 'titre_prestation site 2', 'assets/img/Real_2/description.jpg', NULL, 'assets/img/Real_2'),
(3, 'titre du site 3', 'Site 3 noir\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.', 'titre_prestation site 3', 'assets/img/Real_3/description.jpg', NULL, 'assets/img/Real_3'),
(4, 'titre du site 4', 'Site 4 noir, vert, un peu coloré\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.', 'titre_prestation site 4', 'assets/img/Real_4/description.jpg', NULL, 'assets/img/Real_4'),
(5, 'titre du site 5', 'Site 5 blanc et un peu de verdure\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.', 'titre_prestation site 5', 'assets/img/Real_5/description.jpg', NULL, 'assets/img/Real_5'),
(6, 'titre du site 6', 'Site 6 orange\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestiae placeat quisquam amet commodi, totam recusandae, officiis labore ratione consequatur odio assumenda architecto non adipisci consectetur magni, eos quod distinctio.', 'titre_prestation site 6', 'assets/img/Real_6/description.jpg', NULL, 'assets/img/Real_6');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_service` varchar(50) DEFAULT NULL,
  `s_titre` varchar(50) DEFAULT NULL,
  `s_description` varchar(400) DEFAULT NULL,
  `s_image_descr_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`s_id`, `s_service`, `s_titre`, `s_description`, `s_image_descr_path`) VALUES
(1, 'Intégration / Développement Front-End', 'Integ-Title', 'Je sais faire du flex cool', 'assets/img/Services/front/description.png'),
(2, 'Developpement Back-end', 'Back-Title', 'Je sais faire du MVC super cool!!', 'assets/img/Services/back/description.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_login` varchar(40) NOT NULL,
  `u_pwd` varchar(8) NOT NULL,
  `u_status` int(1) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`u_id`, `u_login`, `u_pwd`, `u_status`) VALUES
(1, 'admin', 'admin', 1),
(2, 'referenceur', 'referenc', 2),
(3, 'contributeur', 'contribu', 3),
(4, 'abonne1', 'abonne1', 4),
(5, 'abonne2', 'abonne2', 4),
(6, 'abonne3', 'abonne3', 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`a_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`c_id`);

--
-- Index pour la table `images_realisations`
--
ALTER TABLE `images_realisations`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `FK_images_realisations_r_id` (`r_id_fk`);

--
-- Index pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`r_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `images_realisations`
--
ALTER TABLE `images_realisations`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `images_realisations`
--
ALTER TABLE `images_realisations`
  ADD CONSTRAINT `FK_images_realisations_r_id` FOREIGN KEY (`r_id_fk`) REFERENCES `realisations` (`r_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
