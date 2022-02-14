-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 14 fév. 2022 à 01:58
-- Version du serveur : 10.3.31-MariaDB-0+deb10u1
-- Version de PHP : 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `telef971907`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id_abonnement` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `date_deb` varchar(10) NOT NULL,
  `date_fin` varchar(10) NOT NULL,
  `gps` int(1) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `type_vehicule` varchar(50) NOT NULL,
  `poid_max` int(11) NOT NULL,
  `img_vehicule` varchar(100) NOT NULL,
  `valide` int(11) NOT NULL,
  `ID_gps` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abonnements`
--

INSERT INTO `abonnements` (`id_abonnement`, `matricule`, `marque`, `date_deb`, `date_fin`, `gps`, `telephone`, `type_vehicule`, `poid_max`, `img_vehicule`, `valide`, `ID_gps`) VALUES
(18, '123A', 'mercedes', '04/05/2021', '04/05/2022', 0, '00242123456789', 'Frigorifique', 5005, '15791377661.png', 0, ''),
(19, 'LT 749 JB', 'Mercedes ', '02/06/2020', '02/06/2021', 0, '00237690465196', 'Fourgon', 8, '15802736091.jpg', 1, ''),
(22, 'CHASSIS 600041', 'MERCEDES', '07/05/2020', '07/06/2020', 0, '00237653687407', 'Fourgon', 1, '15888548861.jpg', 0, '+Â£Âµ'),
(27, 'RC 400 MK 4', 'volvo', '21/03/2021', '21/03/2022', 1, '690465196', 'Plateau', 32, '16147726451.jpg', 1, ''),
(28, 'LT052 KY', 'MERCEDES ACTROS 3042', '16/12/2021', '16/06/2022', 1, '690465196', 'Plateau', 30, '16171219631.png', 0, '821814'),
(29, 'LTTR647 AD', 'MERCEDES ACTROS 3340', '14/04/2021', '14/05/2021', 1, '693815796', 'Plateau', 30, '16184154631.jpg', 1, '821806'),
(30, 'LT 012 JT', 'MERCEDES', '27/04/2021', '27/05/2021', 0, '699936004', 'Fourgon', 1, '16195182721.jpeg', 1, '821826'),
(31, 'LT TR992AM', 'RENAULT ', '19/05/2021', '19/06/2021', 0, '693130067', 'Porte Conteneur', 30, '16214102371.jpg', 1, ''),
(32, 'NWTR 282 AA', 'MERCEDES BENZ 3340', '20/05/2021', '20/06/2021', 0, '674500813', 'Porte Engin', 30, '16215406141.jpg', 1, ''),
(33, 'LT TR229AB', 'RENAULT PREMIUM 450', '27/05/2021', '27/06/2021', 0, '692352153', 'Porte Conteneur', 30, '16221148391.jpg', 1, '821826'),
(34, 'LTTR 564 AC', 'Mercedes Actros 3340', '14/12/2021', '14/12/2022', 0, '657281332', 'Benne', 2, '16226421041.jpg', 1, '821825'),
(35, 'LTTR647 AD', 'MERCEDES ACTROS 3340', '14/04/2021', '14/05/2021', 1, '693815796', 'Plateau', 30, '16184154631.jpg', 1, '821806'),
(36, 'LTTR 550 AF', 'mercedes actros', '08/01/2022', '08/01/2023', 1, '693130067', 'Fourgon', 30, '16416344991.jpg', 1, ''),
(37, 'XY56545', 'WAYLYS CAR', '15/01/2022', '15/01/2023', 1, '22494066', 'Porte Conteneur', 2000, '16422452121.jpg', 1, '821827');

-- --------------------------------------------------------

--
-- Structure de la table `chargement`
--

CREATE TABLE `chargement` (
  `id_charg` int(11) NOT NULL,
  `marchandise` varchar(50) NOT NULL,
  `emballage` varchar(50) NOT NULL,
  `mode_t` varchar(50) NOT NULL,
  `valeurm` varchar(50) NOT NULL,
  `poid` varchar(50) NOT NULL,
  `nb_colis` int(11) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `type_vehicule` varchar(50) NOT NULL,
  `details_march` varchar(100) NOT NULL,
  `img_march` varchar(50) NOT NULL,
  `pays_charg` varchar(50) NOT NULL,
  `ville_charg` varchar(50) NOT NULL,
  `date_charg` varchar(10) NOT NULL,
  `adresse_charg` varchar(100) NOT NULL,
  `pays_liv` varchar(50) NOT NULL,
  `ville_liv` varchar(50) NOT NULL,
  `date_liv` varchar(10) NOT NULL,
  `adresse_liv` varchar(100) NOT NULL,
  `tol_charg` varchar(10) NOT NULL,
  `jr_retard2` varchar(11) NOT NULL,
  `tol_liv` varchar(10) NOT NULL,
  `jr_retard` varchar(11) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `prix_prop` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `nb_vehicules` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chargement`
--

INSERT INTO `chargement` (`id_charg`, `marchandise`, `emballage`, `mode_t`, `valeurm`, `poid`, `nb_colis`, `volume`, `type_vehicule`, `details_march`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `date_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop`, `status`, `nb_vehicules`) VALUES
(96, 'Produit alimentaires', 'Sacs', 'Transport routier', ' ', '30', 600, '', 'Plateau', 'sucre en sac de 50 kg', '15887812101.jpg', 'Cameroun', 'Douala', '15/11/2020', 'port de douala ', 'Tchad', 'Moundou', '01/12/2020', 'centre ville', '0', '0', '0', '0', 'International  TCHYC', '00237690465196', '00237690465196', '2400000 FCFA', 0, 1),
(98, 'Grumes & Bois', 'Colis', 'Transport routier', ' ', '27', 12, '30', 'Plateau', 'bois dÃ©butÃ©  et conditionnÃ© en colis.', '15887822861.jpg', 'Congo', 'Lopola', '28/06/2020', 'chantier de lopola', 'Cameroun', 'Douala', '03/07/2020', 'port de Douala ', '1', '3', '1', '3', 'International  TCHYC', '00237690465196', '00237690465196', '3200000 FCFA', 0, 1),
(104, 'Produit alimentaires', 'Cartons', 'Transport routier', ' ', '14', 1, '', 'Plateau', 'produits alimentaires divers', '15906580331.jpg', 'Cameroun', 'Douala', '29/05/2020', 'port de douala', 'RÃ©publique centrafricaine', 'Kaga-Bandoro', '05/06/2020', 'centre ville', '1', '2', '1', '2', 'nikita', '00237676716357', '00237690465196', '3000000 FCFA', 0, 1),
(163, 'Materiaux De Construction', 'Autres', '', ' ', '27 Tonnes', 100, '', 'plateau', 'Divers quincaillerie 8 tonnes ', '16177102631.', 'Cameroun', 'Douala', '08/04/2021', 'MarchÃ© Congo', 'Congo', 'Ouesso', '12/04/2021', 'Avenu marie  ngouebi', '1', '2', '0', '0', 'Ã‰ric fofie', '670140552', '656790336', ' ', 0, 1),
(203, 'Materiaux De Construction', 'Sacs', '', '3000000 FCFA', '27 Tonnes', 500, '', 'plateau', 'Ciment en sac de 50 kg', '16205545521.', 'Cameroun', 'Abong-Mbang', '10/05/2021', 'Centre ville', 'Cameroun', 'Bertoua', '11/05/2021', 'Total 2', '1', '1', '0', '0', 'Yannick', '690465196', '696383440', '200000 FCFA', 0, 1),
(188, 'Materiaux De Construction', 'Autres', '', ' ', '', 0, '', 'Fourgon', 'Fer , tuyaux', '16196134891.', 'Cameroun', 'Douala', '04/05/2021', 'Akwa', 'Cameroun', 'Bafang', '06/05/2021', 'Bafang', '0', '0', '0', '0', '', '', '695956778', ' ', 0, 1),
(215, 'Demenagement', 'Bonbonnes', '', ' ', '30 Tonnes', 25, '', 'plateau', 'Bonjour', '16215917591.', 'Cameroun', 'YaoundÃ©', '20/05/2021', 'labas', 'Cameroun', 'Douala', '20/05/2021', 'la bas', '0', '0', '0', '0', '', '', '22494066', ' ', 0, 1),
(216, 'Grumes & Bois', 'Autres', '', ' ', '30 Tonnes', 5, '', 'plateau', 'bois dÃ©bitÃ© et grumes', '16215984631.', 'Congo', 'mokabi', '02/06/2021', 'mokabi', 'Cameroun', 'Douala', '05/06/2021', 'Douala', '0', '0', '0', '0', '', '', '0699173736', ' ', 0, 1),
(303, 'Produit alimentaires', 'Sacs', '', ' ', '27 Tonnes', 500, '', 'plateau', 'sacs de riz', '16433887891.jpg', 'Cameroun', 'Douala', '02/02/2022', 'Zone Industrielle bassa', 'Cameroun', 'Abong-Mbang', '05/02/2022', 'marchÃ© ', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 2),
(299, 'Produit alimentaires', 'Conteneur 20â€™', '', ' ', '20 Tonnes', 4, '', 'plateau', 'besoin de 02 plateaux', '16432156161.jpg', 'Cameroun', 'Kribi', '27/01/2022', 'PAD', 'Cameroun', 'YaoundÃ©', '28/01/2022', 'Nsam', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 2),
(222, 'Produit alimentaires', 'Sacs', '', ' ', '30 Tonnes', 360, '', 'plateau', 'Chargement de au port de Douala pour destination Bangui', '16225511661.jpg', 'Cameroun', 'Douala', '02/06/2021', '237 693448161', 'Republique centrafricaine', 'Bangui', '05/06/2021', '237 693448161', '0', '0', '0', '0', '', '', '693448161', '30300 FCFA', 0, 1),
(224, 'Produit alimentaires', 'Sacs', '', ' ', '30 Tonnes', 0, '', 'plateau', 'Produit alimentaire prix produit alimentaire', '16225552781.jpg', 'Cameroun', 'Douala', '02/06/2021', '237 693448161', 'Cameroun', 'KoussÃ©ri', '06/06/2021', '237 693448161', '0', '0', '0', '0', '', '', '693448161', '65000 FCFA', 0, 1),
(301, 'Produit alimentaires', 'Sacs', '', ' ', '27 Tonnes', 500, '', 'plateau', 'sacs de cacao', '16432163561.jpg', 'Cameroun', 'Yokadouma', '02/02/2022', 'Yokadouma', 'Cameroun', 'Kribi', '04/02/2022', 'PAK', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 1),
(239, 'Materiaux Lourds', 'Sacs', '', ' ', '32 Tonnes', 0, '', 'plateau', 'Chargement de ciment dangote plusieurs ton Ã  charger destination Maroua et kousserie', '16238588881.jpg', 'Cameroun', 'Douala', '18/06/2021', '237 693448161', 'Cameroun', 'Maroua', '24/06/2021', '237 693448161', '0', '0', '0', '0', '', '', '693448161', '1536000 FCFA', 0, 1),
(240, 'Materiaux Lourds', 'Sacs', '', ' ', '30 Tonnes', 0, '', 'plateau', 'Chargement de ciment dangote Ã  Douala destination pour kousserie', '16238593021.jpg', 'Cameroun', 'Douala', '18/06/2021', '237 693448161', 'Cameroun', 'KoussÃ©ri', '24/06/2021', '237 693448161', '0', '0', '0', '0', '', '', '693448161', '1950000 FCFA', 0, 1),
(248, 'Produit alimentaires', 'Sacs', '', ' ', '30 Tonnes', 0, '', 'plateau', 'Farine , savons, riz', '16277453031.', 'Cameroun', 'Douala', '02/08/2021', 'Port de Douala', 'Cameroun', 'Maroua', '05/08/2021', 'Centre ville', '0', '0', '0', '0', '', '', '698814037', '1425000 FCFA', 0, 1),
(249, 'Produit alimentaires', 'Sacs', '', ' ', '', 0, '', 'plateau', 'Riz', '16278920071.', 'Cameroun', 'Douala', '06/08/2021', 'Port autonome de Douala', 'Cameroun', 'Maroua', '11/08/2021', 'Centre ville', '0', '0', '0', '0', '', '', '698814037', '55000 FCFA', 0, 1),
(250, 'Produit alimentaires', 'Conteneur 40â€™', '', ' ', '30 Tonnes', 0, '', 'plateau', 'Conteneur scellÃ© avec documents', '16278922401.', 'Cameroun', 'Douala', '02/08/2021', 'Port autonome de Douala', 'Republique centrafricaine', 'Bambari', '07/08/2021', 'Centre', '0', '0', '0', '0', '', '', '698814037', '3500000 FCFA', 0, 1),
(253, 'Produit alimentaires', 'Cartons', '', ' ', '30 Tonnes', 0, '', 'carrosserie', 'Biscuit', '16279999641.', 'Cameroun', 'Douala', '04/08/2021', 'Port autonome de Douala', 'Cameroun', 'KoussÃ©ri', '06/08/2021', 'Centre ville', '0', '0', '0', '0', '', '', '698814037', '2000000 FCFA', 0, 1),
(258, 'Produit alimentaires', 'Conteneur 40â€™', '', ' ', '30 Tonnes', 0, '', 'plateau', 'Produit alimentaire', '16283232501.', 'Cameroun', 'Kribi', '07/08/2021', 'Port de kribi', 'Cameroun', 'Douala', '09/08/2021', 'Port autonome de Douala', '0', '0', '0', '0', '', '', '698814037', '300000 FCFA', 0, 1),
(298, 'Produit alimentaires', 'Cartons', '', ' ', '', 200, '', 'Fourgon', 'Huile vÃ©gÃ©tale', '16432150941.jpg', 'Cameroun', 'Garoua', '31/01/2022', 'Garoua', 'Cameroun', 'YaoundÃ©', '03/02/2022', 'MarchÃ© centrale', '0', '0', '0', '0', 'FUNGA Gautier', '656003167', '656003167', ' ', 1, 0),
(275, 'Produit alimentaires', 'Cartons', '', ' ', '12 Tonnes', 600, '', 'carrosserie', 'Cartons de biscuits', '16409502481.', 'Cameroun', 'DOUALA', '06/12/2021', 'Bonaberi', 'Cameroun', 'DSCHANG', '08/12/2021', 'marchÃ©', '0', '0', '0', '0', '', '', '658579550', ' ', 0, 1),
(276, 'Produit alimentaires', 'Cartons', '', ' ', '7 Tonnes', 600, '', 'carrosserie', 'Cartons de biscuits', '16409506301.', 'Cameroun', 'Douala', '05/01/2022', 'bonaberi', 'Cameroun', 'Dschang', '06/01/2022', 'marchÃ©', '0', '0', '0', '0', '', '', '658579550', ' ', 0, 1),
(277, 'Produits Agricoles ', 'Cartons', '', ' ', '10 Tonnes', 500, '', 'Fourgon', 'INSECTICIDES', '16409512821.', 'Cameroun', 'Douala', '04/01/2022', 'bonaberi', 'Cameroun', 'Garoua', '07/01/2022', 'lagdo', '0', '0', '0', '0', '', '', '673506390', ' ', 0, 1),
(278, 'Produit alimentaires', 'Cartons', '', '9000000 FCFA', '30 Tonnes', 1200, '', 'Fourgon', 'sardine', '16412821181.jpg', 'Cameroun', 'douala', '05/01/2022', 'MBOPPI', 'Cameroun', 'yaounde', '06/01/2022', 'ODZA', '1', '1', '1', '1', 'YANNICK TCHIENTE', '690465196', '656003131', '650000 FCFA', 0, 1),
(279, 'Produit alimentaires', 'Conteneur 40â€™', '', ' ', '27 Tonnes', 1, '', 'plateau', 'Marchandise gÃ©nÃ©rale', '16414534711.', 'Cameroun', 'Douala', '10/01/2022', 'BonabÃ©ri', 'Republique centrafricaine', 'BANGUI', '14/01/2022', 'Bangui', '1', '1', '0', '0', '', '', '692352153', ' ', 0, 1),
(281, 'Agregats', 'En vrac', '', ' ', '20 Tonnes', 0, '', 'Benne', 'sable carrire', '16414892091.png', 'Cameroun', 'douala', '07/01/2022', 'yassa', 'Congo', 'ouesso', '09/01/2022', 'ville', '0', '0', '0', '0', '', '', '656003131', ' ', 0, 1),
(302, 'Divers marchandises', 'Conteneur 20â€™', '', ' ', '20 Tonnes', 2, '', 'plateau', 'divers', '16433883741.jpg', 'Cameroun', 'Douala', '01/02/2022', 'PAD', 'Cameroun', 'YaoundÃ©', '02/02/2022', 'Nsam Escale', '1', '1', '1', '1', '', '', '656003167', ' ', 1, 2),
(291, 'Grumes & Bois', 'Colis', '', '13 FCFA', '30 Tonnes', 11, '', 'plateau', 'bois dÃ©bitÃ© en lattes', '16424248851.jpg', 'Cameroun', 'yokadouma', '18/01/2022', 'ngato', 'Cameroun', 'douala', '21/01/2022', 'port ', '1', '1', '1', '2', '', '', '656003131', '1300000 FCFA', 1, 1),
(300, 'Materiaux Lourds', 'Conteneur 40â€™', '', ' ', '27 Tonnes', 2, '', 'plateau', 'pots de douche', '16432160211.jpeg', 'Cameroun', 'Douala', '31/01/2022', 'PAD', 'Cameroun', 'YaoundÃ©', '02/02/2022', 'Niki Mokolo', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 2),
(307, 'Produit alimentaires', 'En vrac', '', ' ', '27 Tonnes', 500, '', 'plateau', 'sac de riz', '16439899711.jpg', 'Cameroun', 'Douala', '08/02/2022', 'ZI bassa', 'Cameroun', 'YaoundÃ©', '09/02/2022', 'marchÃ© central ', '1', '1', '1', '1', '', '', '656003167', ' ', 1, 2),
(305, 'Materiaux Lourds', 'Conteneur 40â€™', '', ' ', '20 Tonnes', 2, '', 'plateau', 'Conteneurs vides.', '16437879681.jpeg', 'Cameroun', 'Douala', '03/02/2022', 'Essengue', 'Cameroun', 'Kribi', '04/02/2022', 'PAK', '0', '0', '0', '0', 'FUNGA Gautier', '656003167', '656003167', ' ', 1, 2),
(306, 'Materiaux De Construction', 'Conteneur 20â€™', '', ' ', '20 Tonnes', 2, '', 'plateau', 'pots de toilettes, vachettes et serrures .', '16437890491.jpg', 'Cameroun', 'Douala', '08/02/2022', 'PAD', 'Cameroun', 'Bafoussam', '09/02/2022', '100m de la gare routiÃ¨re', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 2),
(308, 'Produit alimentaires', 'En vrac', '', ' ', '27 Tonnes', 400, '', 'plateau', 'SACS DE FARINE', '16439901561.', 'Cameroun', 'Douala', '09/02/2022', 'BonabÃ©ri', 'Cameroun', 'YaoundÃ©', '10/02/2022', 'Coron ', '1', '1', '1', '1', '', '', '656003167', ' ', 1, 2),
(309, 'Materiaux Lourds', 'Conteneur 40â€™', '', ' ', '20 Tonnes', 2, '', 'plateau', 'CONTENEURS VIDES', '16439904951.jpg', 'Cameroun', 'Douala', '08/02/2022', 'Tradex Yassa', 'Cameroun', 'Kribi', '09/02/2022', 'Port Autonome de Kribi', '1', '1', '1', '1', 'FUNGA Gautier', '656003167', '656003167', ' ', 1, 2),
(310, 'Produits Agricoles ', 'Conteneur 40â€™', '', ' ', '27 Tonnes', 350, '', 'plateau', 'SACS DE CACAO', '16439911211.jpeg', 'Cameroun', 'Abong-Mbang', '09/02/2022', 'Ã  500m du marchÃ©', 'Cameroun', 'Douala', '11/02/2022', 'PAD', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 1),
(311, 'Materiaux De Construction', 'Conteneur 40â€™', '', ' ', '27 Tonnes', 2, '', 'plateau', 'Sanitaire', '16444001781.jpeg', 'Cameroun', 'Kribi', '14/02/2022', 'PAK', 'Cameroun', 'YaoundÃ©', '15/02/2022', 'Mokolo', '0', '0', '0', '0', 'FUNGA Gautier', '656003167', '656003167', ' ', 1, 2),
(312, 'Produits Chimiques', 'Conteneur 20â€™', '', ' ', '27 Tonnes', 3, '', 'plateau', 'engrais chimiques dans des conteneurs 20 pieds', '16444007251.jpg', 'Cameroun', 'Douala', '15/02/2022', 'PAD', 'Cameroun', 'Bafoussam', '16/02/2022', 'Bafoussam', '0', '0', '0', '0', '', '', '656003167', ' ', 1, 2),
(313, 'Materiaux Lourds', 'Conteneur 40â€™', '', ' ', '20 Tonnes', 6, '', 'plateau', 'conteneurs 20 pieds vides', '16444011531.jpg', 'Cameroun', 'Douala', '15/02/2022', 'Essengue', 'Cameroun', 'Kribi', '16/02/2022', 'PAK', '1', '1', '1', '1', '', '', '656003167', ' ', 1, 3),
(314, 'Materiaux De Construction', 'Sacs', '', ' ', '32 Tonnes', 1600, '', 'plateau', 'Ciment Cole en sac de 20 kg', '16445644491.jpg', 'Cameroun', 'Douala', '12/02/2022', 'Bekoko', 'Cameroun', 'Bertoua', '14/02/2022', 'Ville', '1', '1', '1', '1', 'Eric', '56884588864', '692352153', '700000 FCFA', 1, 2),
(315, 'Materiaux De Construction', 'Sacs', '', ' ', '32 Tonnes', 1600, '', 'plateau', 'Ciment Cole en sac de 20 kg', '16445644541.jpg', 'Cameroun', 'Douala', '12/02/2022', 'Bekoko', 'Cameroun', 'Bertoua', '14/02/2022', 'Ville', '1', '1', '1', '1', 'Eric', '56884588864', '692352153', '700000 FCFA', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `chargement_vehicules`
--

CREATE TABLE `chargement_vehicules` (
  `id` int(11) NOT NULL,
  `id_abonnement` int(11) NOT NULL,
  `id_chargement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chargement_vehicules`
--

INSERT INTO `chargement_vehicules` (`id`, `id_abonnement`, `id_chargement`) VALUES
(53, 30, 199),
(54, 33, 291),
(55, 30, 291),
(56, 32, 291),
(57, 35, 291),
(58, 29, 291),
(59, 36, 293),
(60, 35, 293),
(61, 31, 295),
(62, 36, 296),
(63, 33, 196),
(64, 33, 303),
(65, 33, 315);

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `id_disp` int(11) NOT NULL,
  `poid_disp` int(11) NOT NULL,
  `pays_dep` varchar(30) NOT NULL,
  `ville_dep` varchar(30) NOT NULL,
  `date_dep` varchar(10) NOT NULL,
  `adresse_dep` varchar(100) NOT NULL,
  `pays_arr` varchar(30) NOT NULL,
  `ville_arr` varchar(30) NOT NULL,
  `date_arr` varchar(10) NOT NULL,
  `adresse_arr` varchar(100) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `id_abonnement` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id_disp`, `poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`) VALUES
(47, 499999, 'Cameroun', 'douala', '10/03/2020', 'fggfgf', 'Cameroun', 'yaounde', '12/03/2020', 'fgfg', 'Mohamed Aziz Trabels', '00237655767535', 20),
(82, 6, 'Cameroun', 'douala', '26/11/2020', 'Mbopi ', 'Cameroun', 'yaounde', '28/11/2020', 'MarchÃ© central YaoundÃ©', 'International  TCHYC', '00237690465196', 19),
(80, 2500, 'Gabon', 'Mbouda', '18/03/2021', 'qsqsqss', 'Tchad', 'Oum Hadjer', '20/03/2021', 'dfgdgdgggfgf', '', '', 18),
(83, 0, 'Cameroun', 'Douala', '29/04/2021', 'Salem', 'Cameroun', 'YaoundÃ©', '30/04/2021', 'Salem', '', '', 0),
(84, 0, 'Cameroun', 'Douala', '30/04/2021', 'Port', 'Cameroun', 'Kribi', '30/04/2021', 'PORT', '', '', 0),
(85, 0, 'Cameroun', 'Douala', '30/04/2021', 'Port', 'Cameroun', 'Kribi', '30/04/2021', 'PORT', '', '', 0),
(86, 0, 'Cameroun', 'Douala', '30/04/2021', 'Port', 'Cameroun', 'Kribi', '30/04/2021', 'PORT', '', '', 0),
(87, 555, 'Cameroun', 'Douala', '29/04/2021', 'Bonjur', 'Congo', 'YaoundÃ©', '30/04/2021', 'Bonjur', '', '', 0),
(88, 255, 'Cameroun', 'YaoundÃ©', '30/04/2021', 'Bonjour', 'Cameroun', 'Douala', '01/05/2021', 'Bonjour', '', '', 0),
(90, 1, 'Cameroun', 'Douala', '01/05/2021', 'Port', 'Cameroun', 'Batouri', '02/05/2021', 'Batouri', '', '', 0),
(112, 1, 'Cameroun', 'Douala', '25/01/2022', 'Yassa', 'Cameroun', 'POUMA', '26/01/2022', 'MarchÃ©', 'FUNGA Gautier ', '656003167', 30),
(97, 15, 'Cameroun', 'Douala', '11/05/2021', '\r\nlmlllllllm', 'Cameroun', 'YaoundÃ©', '12/05/2021', 'ikikklkkkk', '', '', 27),
(98, 1, 'Cameroun', 'Douala', '22/11/2021', 'Bonamoussadi', 'Cameroun', 'YaoundÃ©', '23/11/2021', 'Odja', '', '', 30),
(100, 30, 'Cameroun', 'Douala', '22/05/2021', 'Texaco aÃ©roport', 'Congo', 'Ouesso', '25/05/2021', 'Port de OUESSO', '', '', 27),
(102, 30, 'Cameroun', 'Douala', '29/11/2021', 'ChÃ¢teau Bonaberi', 'RÃ©publique centrafricaine', 'Bangui', '03/12/2021', 'Bangui', 'GAUTIER FUNGA', '656003167', 32),
(107, 1, 'Cameroun', 'Douala', '21/10/2021', 'tres', 'Cameroun', 'YaoundÃ©', '23/10/2021', 'vbbhbb', '', '', 18),
(132, 30, 'Cameroun', 'Douala', '24/01/2022', 'BonabÃ©rie', 'Cameroun', 'KoussÃ©ri', '27/01/2022', 'KoussÃ©ri', '', '', 29),
(113, 5, 'Cameroun', 'Douala', '30/11/2021', 'gggg', 'Cameroun', 'Bertoua', '01/12/2021', 'v vvvvvv', '', '', 30),
(124, 30, 'Cameroun', 'YaoundÃ©', '07/02/2022', 'Messassi ', 'Cameroun', 'Douala', '08/02/2022', 'ESSENGUE', '', '', 33),
(125, 30, 'RÃ©publique centrafricaine', 'Bangui', '03/02/2022', 'Bangui', 'Cameroun', 'Douala', '08/02/2022', 'ChÃ¢teau BonabÃ©ri', 'FUNGA Gautier', '656003167', 32),
(127, 30, 'Cameroun', 'Garoua', '31/01/2022', 'Lagdo', 'Cameroun', 'Douala', '03/02/2022', 'fret aÃ©roport', 'FUNGA GAUTIER', '656003167', 31),
(130, 20, 'Cameroun', 'douala', '17/01/2022', 'tftfyfyu', 'Congo', 'ouesso', '20/01/2022', 'yyyyyy', '', '', 27),
(131, 40, 'Cameroun', 'douala', '16/01/2022', 'yassa', 'Cameroun', 'yaounde', '18/01/2022', 'mvang', '', '', 37),
(133, 30, 'Cameroun', 'ngaoundÃ©rÃ©', '14/02/2022', 'Port sec', 'Cameroun', 'Douala', '16/02/2022', 'Essengue', 'FUNGA Gautier', '656003167', 29),
(134, 30, 'Cameroun', 'Kribi', '14/02/2022', 'PAK', 'Cameroun', 'NgaoundÃ©rÃ©', '16/02/2022', 'NgaoundÃ©rÃ©', '', '', 33),
(135, 30, 'Cameroun', 'Douala', '14/02/2022', 'Bonaberi', 'RÃ©publique centrafricaine', 'Bangui', '18/02/2022', 'Bangui', '', '', 32),
(136, 1, 'Cameroun', 'Douala', '15/02/2022', 'Bonamoussadi', 'Cameroun', 'YaoundÃ©', '16/02/2022', 'Melen', '', '', 30);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `telephone` int(11) NOT NULL,
  `id_chargement` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `id_postuler` int(11) NOT NULL,
  `to_telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `date`, `telephone`, `id_chargement`, `type`, `contenu`, `statut`, `id_postuler`, `to_telephone`) VALUES
(90, '2022-01-18', 674500813, 290, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 73, '693815796'),
(91, '2022-01-18', 693815796, 290, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 73, '674500813'),
(92, '2022-01-18', 699936004, 199, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 74, '656003167'),
(93, '2022-01-18', 656003167, 199, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 74, '699936004'),
(94, '2022-01-18', 699936004, 289, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 75, '674500813'),
(95, '2022-01-18', 692352153, 291, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 76, '656003131'),
(96, '2022-01-18', 656003131, 291, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 76, '692352153'),
(97, '2022-01-18', 699936004, 291, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 77, '656003131'),
(98, '2022-01-18', 656003131, 291, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 77, '699936004'),
(99, '2022-01-18', 674500813, 291, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 78, '656003131'),
(101, '2022-01-19', 693815796, 291, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 79, '656003131'),
(103, '2022-01-19', 693815796, 291, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 80, '656003131'),
(105, '2022-01-20', 693130067, 293, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 81, '656003167'),
(106, '2022-01-20', 656003167, 293, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 81, '693130067'),
(107, '2022-01-20', 693815796, 293, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 82, '656003167'),
(108, '2022-01-20', 656003167, 293, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 82, '693815796'),
(109, '2022-01-22', 693130067, 295, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 83, '693130067'),
(110, '2022-01-22', 693130067, 295, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 83, '693130067'),
(111, '2022-01-23', 693130067, 296, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 84, '692352153'),
(112, '2022-01-23', 692352153, 296, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 84, '693130067'),
(113, '2022-01-24', 674500813, 198, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 85, '656003167'),
(114, '2022-01-24', 692352153, 196, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 86, '656003167'),
(115, '2022-01-24', 656003167, 196, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 0, 86, '692352153'),
(116, '2022-01-31', 693815796, 298, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 87, '656003167'),
(117, '2022-02-01', 699936004, 298, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 88, '656003167'),
(118, '2022-02-01', 699936004, 300, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 89, '656003167'),
(119, '2022-02-01', 699936004, 298, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 90, '656003167'),
(120, '2022-02-01', 699936004, 298, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 91, '656003167'),
(121, '2022-02-01', 699936004, 298, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 92, '656003167'),
(122, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 93, '656003167'),
(123, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 94, '656003167'),
(124, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 95, '656003167'),
(125, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 96, '656003167'),
(126, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 97, '656003167'),
(127, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 98, '656003167'),
(128, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 99, '656003167'),
(129, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 100, '656003167'),
(130, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 101, '656003167'),
(131, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 102, '656003167'),
(132, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 103, '656003167'),
(133, '2022-02-02', 699936004, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 104, '656003167'),
(134, '2022-02-02', 693815796, 304, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 105, '656003167'),
(135, '2022-02-02', 674500813, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 106, '656003167'),
(136, '2022-02-02', 693130067, 301, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 107, '656003167'),
(137, '2022-02-04', 692352153, 303, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 108, '656003167'),
(138, '2022-02-04', 693130067, 306, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 109, '656003167'),
(139, '2022-02-04', 656003167, 303, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 108, '692352153'),
(140, '2022-02-05', 693815796, 310, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 110, '656003167'),
(141, '2022-02-09', 693815796, 308, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 111, '656003167'),
(142, '2022-02-11', 692352153, 315, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 1, 112, '692352153'),
(143, '2022-02-11', 692352153, 315, 'Reception', 'Des vÃ©hicules proposer ont Ã©tÃ© sÃ©lectionnÃ©s.', 1, 112, '692352153');

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `id` int(11) NOT NULL,
  `vehicules` varchar(255) NOT NULL,
  `avance` float NOT NULL,
  `montant` float NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_soumission` date NOT NULL DEFAULT current_timestamp(),
  `id_chargement` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `message` text NOT NULL,
  `devise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postuler`
--

INSERT INTO `postuler` (`id`, `vehicules`, `avance`, `montant`, `telephone`, `date_soumission`, `id_chargement`, `status`, `message`, `devise`) VALUES
(73, ';32', 400000, 500000, 674500813, '2022-01-18', 290, 0, 'MERCI                                ', 'FCFA'),
(74, ';30', 75000, 80000, 699936004, '2022-01-18', 199, 0, ' Mon offre prix                                           ', 'FCFA'),
(75, ';30', 75000, 90000, 699936004, '2022-01-18', 289, 0, 'Ma proposition                                         ', 'FCFA'),
(76, ';33', 350000, 500000, 692352153, '2022-01-18', 291, 0, 'test 001                                             ', 'FCFA'),
(77, ';30', 7500000, 800000000, 699936004, '2022-01-18', 291, 0, 'test 003                                             ', 'FCFA'),
(78, ';32', 50000, 60000, 674500813, '2022-01-18', 291, 0, 'test 003                                        ', 'FCFA'),
(79, ';35', 400000, 500000, 693815796, '2022-01-19', 291, 0, 'merci                                             ', 'FCFA'),
(80, ';29', 250000, 300000, 693815796, '2022-01-19', 291, 0, ' test003                                            ', 'FCFA'),
(81, ';36', 5555220, 5020000, 693130067, '2022-01-20', 293, 0, '                       TTRES IMPORTANT POUR LE PROJET                      ', 'FCFA'),
(82, ';35', 425000, 500000, 693815796, '2022-01-20', 293, 0, 'belle expÃ©rience                                             ', 'FCFA'),
(83, ';31', 150, 500, 693130067, '2022-01-22', 295, 0, '                Mergccvvbv ghbnj fhhbfdd                             ', 'EURO'),
(84, ';36', 1000000, 1800000, 693130067, '2022-01-23', 296, 0, '                                   Je suis intÃ©ressÃ© par votre annonce de changement de cacao nous disposons deux camions 3 es deux de 30 tonnes.  PrÃ©sentement dans notre pari a Bertoua      .\r\n\r\nMes salutations    ', 'FCFA'),
(85, ';32', 450000, 600000, 674500813, '2022-01-24', 198, 0, 'Bonjour, nous pouvons effectuer ce chargement Ã  ce prix.                                           ', 'FCFA'),
(86, ';33', 450000, 600000, 692352153, '2022-01-24', 196, 0, 'Merci pour la confiance', 'FCFA'),
(87, ';35', 420000, 500000, 693815796, '2022-01-31', 298, 0, 'Je peux transporter cette marchandise.\r\n                                           ', 'FCFA'),
(104, ';30', 78778, 789899000, 699936004, '2022-02-02', 301, 0, '                                             787887787887', 'FCFA'),
(105, ';35', 120000, 150000, 693815796, '2022-02-02', 304, 0, '     Merci                                       ', 'FCFA'),
(106, ';32', 120000, 150000, 674500813, '2022-02-02', 301, 0, '  Merci                                           ', 'FCFA'),
(107, ';36', 120000, 150000, 693130067, '2022-02-02', 301, 0, 'Merci                                             ', 'FCFA'),
(108, ';33', 500000, 600000, 692352153, '2022-02-04', 303, 0, 'Merci                                            ', 'FCFA'),
(109, ';36', 500000, 600000, 693130067, '2022-02-04', 306, 0, 'merci                                             ', 'FCFA'),
(110, ';35', 525000, 600000, 693815796, '2022-02-05', 310, 0, 'voici mon offre prix                                             ', 'FCFA'),
(111, ';35', 4050000, 5500000, 693815796, '2022-02-09', 308, 0, '                                             ', 'FCFA'),
(112, ';33', 300000, 800000, 692352153, '2022-02-11', 315, 0, '                                    Ghdbvgvevebvhjwvbvdvbf         ', 'FCFA');

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE `pub` (
  `id` int(11) NOT NULL,
  `image1` varchar(20) DEFAULT NULL,
  `image2` varchar(20) DEFAULT NULL,
  `image3` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pub`
--

INSERT INTO `pub` (`id`, `image1`, `image2`, `image3`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `status_gps`
--

CREATE TABLE `status_gps` (
  `Id_status` int(11) NOT NULL,
  `ID_gps` varchar(20) NOT NULL,
  `Date_D` varchar(255) NOT NULL,
  `Date_F` varchar(255) NOT NULL,
  `Etat` int(11) NOT NULL,
  `Id_abonnement` varchar(20) NOT NULL,
  `Id_dispo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status_gps`
--

INSERT INTO `status_gps` (`Id_status`, `ID_gps`, `Date_D`, `Date_F`, `Etat`, `Id_abonnement`, `Id_dispo`) VALUES
(1, '821801', '2022-01-15', '2022-04-15', 0, '123A', 80),
(2, '821825', '2022-01-15', '2022-04-15', 0, 'LTTR647 AD', 82),
(3, '821825', '0000-00-00', '0000-00-00', 0, 'RC 400 MK 4', 81),
(4, '821814', '0000-00-00', '0000-00-00', 0, 'LTTR 2021', 111),
(5, '821825', '0000-00-00', '0000-00-00', 0, 'LT 012 JT', 112),
(6, '821826', '05/01/2021', '06/01/2021', 0, '821826', 128),
(8, '1', '2022-01-15', '2022-02-16', 1, '37', 90),
(9, '1', '2022-01-15', '2022-01-16', 0, '37', 91),
(10, '1', '2022-01-15', '2022-01-16', 1, '37', 92),
(11, '1', '2022-01-15', '2022-01-16', 1, '36', 93),
(12, '1', '2022-01-17', '2022-01-18', 0, '35', 94),
(13, '1', '2022-01-15', '2022-01-16', 0, '37', 95),
(14, 'Array', '2022-01-16', '2022-01-17', 0, '37', 100),
(15, '', '2022-01-22', '2022-01-23', 0, '37', 230),
(16, '', '2022-01-29', '2022-01-30', 0, '37', 200),
(17, '821827', '2022-01-16', '2022-01-19', 0, '37', 219),
(18, '821827', '2022-01-16', '2022-01-21', 0, '37', 219),
(19, '821827', '2022-01-16', '2022-01-18', 0, '37', 131),
(20, '821827', '2022-01-16', '2022-01-18', 1, '37', 131),
(21, '821827', '2022-01-16', '2022-01-27', 0, '37', 200),
(22, '821827', '2022-01-16', '2022-01-22', 0, '37', 112),
(23, '821827', '2022-01-16', '2022-01-17', 0, '37', 98);

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

CREATE TABLE `transporteur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `r_s` mediumtext NOT NULL,
  `pays` varchar(30) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `date_limite` varchar(10) NOT NULL,
  `note` double NOT NULL,
  `nb_note` int(11) NOT NULL,
  `total_note` int(11) NOT NULL,
  `verif` int(1) NOT NULL,
  `code` varchar(11) NOT NULL,
  `indicatif` varchar(11) NOT NULL,
  `Date_inscri` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`nom`, `prenom`, `r_s`, `pays`, `adresse`, `telephone`, `email`, `password`, `type`, `genre`, `date_limite`, `note`, `nb_note`, `total_note`, `verif`, `code`, `indicatif`, `Date_inscri`) VALUES
('admin', 'TELEFRET', 'Telefret', 'Cameroun', 'Cameroun', '6904651 ', 'contact@telefret.com', 'telefretadmin01', 'admin', 'entreprise', '00/00/0000', 0, 0, 0, 1, '', '00237', ''),
('NASR', 'Malek', 'TELEFRET', 'Cameroun', 'Rue de Gabes', '00242123456789', 'malek.nasr09@gmail.com', 'Azerty', 'transporteur', 'entreprise', '14/08/2028', 2.5, 2, 5, 1, '9402', '0', ''),
('FORCHE ', 'Emmanuel ', ' ', 'Cameroun', 'emmanic.forche@gmail.com', '695226355', 'emmanic.forche@gmail.com', 'Emmanic@2408', 'client', 'particulier', '07/03/2020', 0, 0, 0, 1, '0468', '00237', ''),
('Test', 'Test', ' ', '', '7,accÃ¨s aoussou', '55005231', 'test@gmail.com', '191288', 'transporteur', 'particulier', '18/02/2028', 0, 0, 0, 1, '3926', '00216', ''),
('test', 'test', ' ', '', 'douala', '673738367', '', 'tienstiens', 'client', 'particulier', '14/07/2021', 0, 0, 0, 1, '9605', '00237', '14/06/2021'),
('Agri', 'Industrie', 'Agri', 'Cameroun', 'Douala Pk11', '658579550', 'agri.industrie94info@gmail.com', 'piam1994@', 'client', 'entreprise', '20/03/2020', 0, 0, 0, 1, '5641', '00237', ''),
('tchiente', 'yannick', '', 'Cameroun', 'logpom, douala', '690465196', 'yannicktchiente@gmail.com', 'yane01', 'transporteur', 'particulier', '03/04/2021', 0, 0, 0, 1, '0211', '00237', ''),
('PSMT', 'SARL', 'PSMT ', 'Cameroun', 'NDOGBONG', '674999826', 'aliabiako@yahoo.fr', '30mai19', 'transporteur', 'entreprise', '02/05/2020', 0, 0, 0, 1, '2671', '00237', ''),
('Kenmoe', 'Julio', ' ', 'Cameroun', 'Douala bepanda ', '653687407', 'kenmoejulio@gmail.com', '061986', 'transporteur', 'particulier', '07/06/2020', 0, 0, 0, 1, '0606', '00237', ''),
('Tamo', 'Tato', ' ', 'Cameroun', 'Douala-logbessou', '555777888', 'tamo@gmail.com', '000000', 'client', 'particulier', '07/06/2020', 0, 0, 0, 0, '5649', '00237', ''),
('Tamo', 'Tom', ' ', 'Cameroun', 'Douala-Logbessou', '555666777', 'tamo@gmail.com', '000000', 'client', 'particulier', '07/06/2020', 0, 0, 0, 0, '2634', '00237', ''),
('MERTOI', 'Company', 'transporteur', 'Cameroun', 'Douala cameroun', '696954445', 'mertoicompany@gmail.com', 'Mertoi@2020', 'transporteur', 'entreprise', '09/07/2020', 0, 0, 0, 1, '1937', '00237', ''),
('moutymbo', 'patrick', ' ', 'Cameroun', 'contact@jabeas.com', '699933333', 'moutymbopatrick@gmail.com', '106946969', 'client', 'particulier', '01/10/2020', 0, 0, 0, 1, '4111', '00237', ''),
('Salah', 'Mohamed', ' ', '', '7,accÃ¨s aousou,', '65656656', 'salah@gmail.com', '19121988', 'client', 'particulier', '18/02/2021', 0, 0, 0, 1, '7878', '00237', ''),
('Salah', 'Mohamed ', ' ', '', '7,accÃ¨s aoussou', '22494066', 'medaziztn@gmail.com', '191288', 'transporteur', 'particulier', '18/08/2021', 0, 0, 0, 1, '5320', '00216', ''),
('demano', 'Patrick ', ' ', 'Cameroun', 'KOTTO-Douala', '656003131', 'demanopatrick7@gmail.com', 'demano01', 'client', 'entreprise', '19/02/2021', 0, 0, 0, 1, '2087', '00237', ''),
('Funga', 'Gautier', ' ', '', 'Bonamoussadi', '656003167', 'gautierfunga@yahoo.com', 'gautier7', 'client', 'particulier', '20/02/2021', 0, 0, 0, 1, '8494', '00237', ''),
('Ewolem', 'Leslie', ' Sarl ', 'Cameroun', 'Logbessou', '698055417', 'ewolemilona21@gmail.com', '12345678a', 'transporteur', 'entreprise', '21/02/2021', 0, 0, 0, 1, '1341', '00237', ''),
('Marius', 'Meghadio', ' ', '', 'yaounde', '696275231', 'exploitant1@rtlogistics.eu', 'RTLogistics2019', 'client', 'particulier', '18/06/2021', 0, 0, 0, 1, '8564', '00237', '18/05/2021'),
('Momo', 'Claude', ' ', '', 'Douala akwa', '696830100', '', '123456', 'transporteur', 'particulier', '22/02/2021', 0, 0, 0, 1, '1685', '00237', ''),
('NKETCHA MBIABO', 'ULRICH GISCARD', ' ', '', 'Douala Kotto', '697319773', 'ulrichnketcha20@gmail.com', '012345', 'client', 'particulier', '22/02/2021', 0, 0, 0, 1, '9436', '00237', ''),
('WATIO', 'Elvis Martial', ' ', '', 'DOUALA', '673506390', 'elviswatio@telefret.com', 'Elvis)2021', 'client', 'particulier', '06/09/2021', 0, 0, 0, 1, '8501', '00237', '06/08/2021'),
('MOUGOL', 'Daniel landry', ' ', '', 'DOUALA', '655761449', 'danielandm24@gmail.com', '18081998', 'client', 'particulier', '24/02/2021', 0, 0, 0, 1, '6072', '00237', ''),
('NYANDING ABALANG', 'Stephanie ', ' ', '', 'YaoundÃ©', '651393104', 'de.stephanie2016@gmail.com', 'princesse2016', 'client', 'particulier', '13/05/2021', 0, 0, 0, 1, '6588', '00237', ''),
('bureau', 'test', ' ', '', 'yde', '653914382', '', 'test01', 'client', 'particulier', '09/05/2021', 0, 0, 0, 0, '4867', '00237', ''),
('DEMANO', 'Patrick', ' ', '', 'douala-cameroun', '676349104', 'demanopatrick7@gmail.com', 'demano01', 'transporteur', 'particulier', '01/05/2021', 0, 0, 0, 0, '0280', '00237', ''),
('Kana', 'boris', ' ', '', 'Nsimeyon', '676202628', 'boriskana81@gmail.com', 'lalegende', 'client', 'particulier', '05/05/2021', 0, 0, 0, 0, '2249', '00237', ''),
('FUNGA ', 'LUCHRICH', '', 'Cameroun', 'Bonamoussadi, douala', '693815796', '12345', 'gautier8', 'transporteur', 'particulier', '05/05/2021', 0, 0, 0, 1, '6350', '00237', ''),
('SOCOPAT', 'TRANSPORT', 'SOCOPAT', 'Cameroun', 'ZI Douala BASSA', '694017730', 'contact@socopat.cm', 'socopatfret', 'transporteur', 'entreprise', '06/05/2021', 0, 0, 0, 1, '5603', '00237', ''),
('Mewa', 'Isidore', ' ', '', 'Pk14', '698708080', '', '19850ketti', 'client', 'particulier', '06/05/2021', 0, 0, 0, 1, '9408', '00237', ''),
('Djioleu', 'Rodrigue', ' ', '', 'Douala', '694018774', 'rdjioleu@yahoo.fr', 'djioleu', 'client', 'particulier', '06/05/2021', 0, 0, 0, 1, '1689', '00237', ''),
('Fofie', 'Eric', ' ', '', 'Ouesso', '656790336', '', '670140552', 'client', 'particulier', '06/05/2021', 0, 0, 0, 1, '8466', '00237', ''),
('NGOUFACK', 'Alvine Carole', ' ', '', 'Douala', '691206990', 'cngoufac@yahoo.fr', 'Satarana67', 'client', 'particulier', '12/05/2021', 0, 0, 0, 1, '8156', '00237', ''),
('KOMOL', 'Salomon', ' ', '', 'Douala', '690162514', 'yapsalomon@gmail.com', 'tinocosta', 'client', 'particulier', '12/05/2021', 0, 0, 0, 1, '9925', '00237', ''),
('Mirella ', 'Franciska', ' ', '', 'Douala', '690489318 ', 'franciska.mirella12@gmail.com', '120699', 'client', 'particulier', '12/05/2021', 0, 0, 0, 1, '5256', '00237', ''),
('Emmanuel', 'Steven', ' ', '', 'Douala', '695356594', 'emmanuelsteve961@gmail.com', 'Monpays1', 'transporteur', 'entreprise', '12/05/2021', 0, 0, 0, 1, '3757', '00237', ''),
('GUEMCHE KUATE ', 'SHELLA-NOELLE ', ' ', '', 'Douala ', '655012915', 'guemshe@gmail.com', 'shelladiva', 'client', 'particulier', '12/05/2021', 0, 0, 0, 1, '8105', '00237', ''),
('GUY', 'Michel', ' ', '', 'Yaounde', '657884630', 'guymichel998@gmail.com', 'guymichel998', 'client', 'particulier', '12/05/2021', 0, 0, 0, 1, '8234', '00237', ''),
('Kouamou ', 'Gaelle ', ' ', '', 'Douala ', '695389490', 'KouamouMichele@yahoo.com', 'charly21', 'client', 'particulier', '12/05/2021', 0, 0, 0, 0, '4040', '00237', ''),
('Ulrich', 'Funga', ' ', '', 'Yaounde', '674390582', 'gaetanfunga@gmail.com', '117813', 'client', 'particulier', '12/05/2021', 0, 0, 0, 0, '0820', '00237', ''),
('Tchoumtchoua', 'Elysee', ' ', '', 'Cameroon', '673632095', 'elyseetchoumtchoua@gmail.com', '77fZhtbXpQ4dfWy', 'client', 'particulier', '13/05/2021', 0, 0, 0, 0, '9597', '00237', ''),
('SIINYUY', 'EDWARD', 'Afric development transit', '', 'Douala', '654902153', 'adtransit2018@yahoo.com', 'DHLPMUC12', 'client', 'entreprise', '13/05/2021', 0, 0, 0, 1, '0843', '00237', ''),
('Funga', 'Ulrich', ' ', '', '05525433821', '05525433821', 'gaetanfunga@gmail.com', '117813', 'client', 'particulier', '13/05/2021', 0, 0, 0, 1, '0942', '00237', ''),
('Kamtchoum', 'Djamel', 'Maryland transit', '', 'Douala', '656327078', 'marylantransit2020@gmail.com', 'Maryland03', 'transporteur', 'entreprise', '14/05/2021', 0, 0, 0, 1, '9885', '00237', ''),
('Douanla', 'Gilles Sorel', ' ', '', 'Douala', '697573092', 'soreldouanla@gmail.com', 'berenice1234', 'transporteur', 'particulier', '15/05/2021', 0, 0, 0, 1, '9315', '00237', '15/04/2021'),
('MAHOP', 'ROLAND', 'Ev\'lon', '', 'DOUALA', '655320426', 'rolandevlonlogistics@gmail.com', 'rolandevlon2022', 'transporteur', '', '26/02/2022', 0, 0, 0, 1, '3664', '00237', '26/01/2022'),
('Amougou', 'Jean', ' ', '', 'YaoundÃ©', '698589498', 'amougou.jean39@yahoo.com', '2613jean', 'client', 'particulier', '19/05/2021', 0, 0, 0, 1, '1485', '00237', '19/04/2021'),
('GHOMSI', 'Franck', ' ', '', 'YaoundÃ© ', '693549619', 'francksteveg@gmail.com', '000000', 'client', 'particulier', '19/05/2021', 0, 0, 0, 1, '1901', '00237', '19/04/2021'),
('Yotou ', 'Charlaud', ' ', '', 'Yaounde', '697345362', 'Charlaudyotho@gmail.com', 'kouamhe', 'client', 'particulier', '19/05/2021', 0, 0, 0, 1, '2244', '00237', '19/04/2021'),
('Jules', 'NOUCHE', ' ', '', 'YaoundÃ©', '695565205', 'nouchetchuente2007@gmail.com', 'Jules.123', 'client', 'particulier', '19/05/2021', 0, 0, 0, 1, '6341', '00237', '19/04/2021'),
('NJAMEN', 'franky', ' ', '', 'bangangtÃ©', '695320529', 'njamenfranky93@gmail.com', 'stevialove', 'client', 'particulier', '19/05/2021', 0, 0, 0, 1, '6329', '00237', '19/04/2021'),
('SOPKIN', 'Rodrigue', ' ', '', 'douala', '683885216', '', '12345678', 'transporteur', 'particulier', '20/05/2021', 0, 0, 0, 1, '4440', '00237', '20/04/2021'),
('SOPKIN', 'Rodrigue', ' ', '', 'douala', '679139842', '', '12345678', 'transporteur', 'particulier', '20/05/2021', 0, 0, 0, 1, '2921', '00237', '20/04/2021'),
('KENFACK', 'GHISLAIN', ' ', '', 'DOUALA', '699330974', '', '12345678', 'transporteur', 'particulier', '21/05/2021', 0, 0, 0, 1, '5593', '00237', '21/04/2021'),
('Tattchi', 'Christian ', ' ', '', 'Douala', '697280498', 'christiantattchi99@gmail.com', 'micheline', 'client', 'particulier', '21/05/2021', 0, 0, 0, 1, '6255', '00237', '21/04/2021'),
('NGETNKANG ', 'CLINTON', 'CLINTON ENTERPRISE', '', 'Douala', '677234205', '', '1234abcd', 'transporteur', 'entreprise', '23/05/2021', 0, 0, 0, 1, '8940', '00237', '23/04/2021'),
('Kembou', 'Gabriel', ' ', '', 'Douala', '699936004', '', '11111111', 'transporteur', 'particulier', '26/05/2021', 1.41, 27, 38, 1, '9040', '00237', '26/04/2021'),
('BIADJEU', 'Yannick', ' ', '', 'Douala', '695956778', '', 'sabalasmedar', 'client', 'particulier', '28/05/2021', 0, 0, 0, 1, '7579', '00237', '28/04/2021'),
('Assiga', 'FÃ©lix', ' ', '', 'YaoundÃ©', '691652182', 'felixassiga@gmail.com', 'Nkeassiga1', 'client', 'particulier', '03/06/2021', 0, 0, 0, 1, '0642', '00237', '03/05/2021'),
('TOLALE', 'Yvan', ' ', '', 'Douala', '679261646', 'yvantolale@yahoo.fr', 'pascale7', 'client', 'particulier', '06/06/2021', 0, 0, 0, 0, '2336', '00237', '06/05/2021'),
('KOKATCHI', 'Meiway', ' ', '', 'Douala', '674500813', 'kokatchim@gmail.com', 'meiway002', 'transporteur', 'particulier', '06/06/2021', 1.1, 42, 46, 1, '7517', '00237', '06/05/2021'),
('Ã‰piphane', 'Savio', 'Stef SARL', '', 'Douala', '698705807', 'epiphanesavio91@gmail.com', 'imbecile91', 'client', 'entreprise', '08/06/2021', 0, 0, 0, 0, '6526', '00237', '08/05/2021'),
('Quincaillerie', 'Centrale', 'Sarl', '', 'Abong mbang', '696383440', 'hugesdjousse@gmail.com', 'centrale2021', 'client', 'entreprise', '09/06/2021', 0, 0, 0, 1, '3403', '00237', '09/05/2021'),
('aziztrans', 'aziztrans et logistique', ' ', '', 'douala', '693130067', 'amirabdeljiande@gmail.com', 'quennda1759', 'transporteur', 'entreprise', '09/06/2021', 0, 0, 0, 1, '8996', '00237', '09/05/2021'),
('OUMAR', 'SANDA', 'AF', '', 'DOUALA', '693987857', '', '693987857', 'transporteur', 'entreprise', '10/06/2021', 0, 0, 0, 1, '7874', '00237', '10/05/2021'),
('Abba', 'Moussa', 'Continental', '', 'Douala', '692352153', '', 'facile123', 'transporteur', 'entreprise', '10/06/2021', 0, 0, 0, 1, '3979', '00237', '10/05/2021'),
('NGOUMOU ONANA', 'JEAN MARIE', ' ', '', 'Douala', '651857392', 'ngoumouonana.jm99@gmail.com', 'I51857392g', 'client', 'particulier', '12/06/2021', 0, 0, 0, 1, '7818', '00237', '12/05/2021'),
('TN INTERNATIONAL TRADE & LOGIS', 'Gael', 'Gael TCHOUPE', '', 'Akwa, Rue Avenue Dr JAMOT', '696184244', 'gael.tchoupe@tn-itl.com', 'crespo09', 'client', 'entreprise', '18/06/2021', 0, 0, 0, 0, '5450', '00237', '18/05/2021'),
('Titi', 'Sam', ' ', '', '693979292', '693979292', '', 'telefret2021', 'client', 'particulier', '18/06/2021', 0, 0, 0, 0, '8175', '00237', '18/05/2021'),
('Booster', 'Chris', ' ', '', '1140  Station Road, Station Road', '0699173736', 'boosterstartup3@gmail.com', 'conficius', 'client', 'particulier', '19/06/2021', 0, 0, 0, 0, '6325', '00237', '19/05/2021'),
('DEUTOU', 'Derrick', ' ', '', 'Douala', '657281332', 'derrickdjomalom@telefret.com', 'Bonjour2028', 'transporteur', 'entreprise', '01/07/2021', 0, 0, 0, 0, '2048', '00237', '31/05/2021'),
('ESSOH', 'Pierre Marie', 'UNITED ENGINEERS SARL', '', 'Douala', '696336203', 'united237engineers@gmail.com', 'pitdinho', 'client', 'entreprise', '24/06/2021', 0, 0, 0, 0, '8387', '00237', '24/05/2021'),
('NBOUHOUM', 'ROSTAND ARNAUD', 'LA CYGOGNE LOGISTIQUE', '', 'DOUALA', '699927869', 'lacygogne@gmail.com', 'lacygogne', 'transporteur', 'entreprise', '26/06/2021', 0, 0, 0, 0, '0666', '00237', '26/05/2021'),
('TADZONG KENNE', 'ZIDANE', ' ', '', 'DOUALA', '691316506', 'tadzongkennezidane@gmail.com', 'Mbouda98', 'client', 'particulier', '27/06/2021', 0, 0, 0, 0, '7297', '00237', '27/05/2021'),
('AMADOU', 'Fessal', ' ', '', 'DOUALA', '693448161', '', 'amadoufessal', 'transporteur', 'particulier', '28/06/2021', 0, 0, 0, 0, '4562', '00237', '28/05/2021'),
('DJOUGOUE', 'ERIC', ' ALPHA GROUPE INTERNATIONAL', '', 'DOUALA', '677404464', 'djougoue.eric@yahoo.fr', 'amiel2020', 'client', 'entreprise', '01/07/2021', 0, 0, 0, 0, '4204', '00237', '01/06/2021'),
('DJON ', 'Lucien Emmanuel ', ' ', '', 'Limbe', '696287377', 'djonlucienemmanuel@yahoo.com', 'colette99', 'transporteur', 'particulier', '02/07/2021', 0, 0, 0, 1, '6994', '00237', '02/06/2021'),
('NKWENKEU NYA', 'FABRICE CEDRICK', 'FN LOGISTICS SARL', '', 'DOUALA', '696531739', 'fabrice.nya@fnlogistics-cm.com', 'Fnlogistics', 'client', 'entreprise', '10/07/2021', 0, 0, 0, 0, '8631', '00237', '10/06/2021'),
('MOUKON', 'Joel', ' ', '', 'Douala', '691221566', 'joelmoukon@gmail.com', '91221566', 'transporteur', 'particulier', '15/07/2021', 0, 0, 0, 1, '1622', '00237', '15/06/2021'),
('Pd', 'Pdgroupe', ' ', '', 'Douala', '699532516', '', 'groupe123', 'transporteur', 'particulier', '15/07/2021', 0, 0, 0, 1, '0146', '00237', '15/06/2021'),
('MAKA', 'Sylvain', ' ', '', 'Douala', '697359721', 'makasylvain22@gmail.com', 'Maryjane26', 'client', 'particulier', '16/07/2021', 0, 0, 0, 0, '6479', '00237', '16/06/2021'),
('Yataga Tchoffotiyo', 'Hurzulin', ' ', '', 'Yaounde', '674170555', 'jimbeam2019@web.de', 'Berlin94', 'transporteur', 'particulier', '22/07/2021', 0, 0, 0, 0, '2882', '00237', '22/06/2021'),
('Nfor', 'Alex', ' ', '', 'douala', '690964455', 'johnnde494@yahoo.fr', 'ethan2021', 'transporteur', 'particulier', '28/07/2021', 0, 0, 0, 1, '0246', '00237', '28/06/2021'),
('Abdoulaziz', 'Soubaiya ', ' ', '', 'Douala', '677934044', 'asoub131@yahoo.com', 'Maimouna131', 'transporteur', 'particulier', '22/08/2021', 0, 0, 0, 0, '3410', '00237', '22/07/2021'),
('Ntanwoe', 'Bonaparte', 'PSL INTER', '', 'douala', '698465224', 'Ntanwoebonaparte90@gmail.com', 'Nb01011990', 'transporteur', 'entreprise', '26/08/2021', 0, 0, 0, 1, '4875', '00237', '26/07/2021'),
('feze', 'guy', ' ', '', 'mballa eloudem bastos', '698814037', 'feze1@yahoo.fr', 'm@sque', 'client', 'particulier', '28/08/2021', 0, 0, 0, 1, '3619', '00237', '28/07/2021'),
('AGRO', 'FOOD HOT', 'AGRO FOOD HOT FARMER', '', 'Douala', '658047032', '', 'farmer2020', 'client', 'entreprise', '09/09/2021', 0, 0, 0, 0, '2031', '00237', '09/08/2021'),
('PELLO PELLO', 'Robert Surin ', 'PLS INTER', '', 'Douala', '699385090', 'plsinter2021@gmail.com', 'yesbob', 'transporteur', 'entreprise', '11/09/2021', 0, 0, 0, 0, '4607', '00237', '11/08/2021'),
('Ali', 'Mamoudah', ' ', '', 'Douala ', '694101290', 'ammdh@hotmail.fr', '12M053En', 'transporteur', 'particulier', '20/09/2021', 0, 0, 0, 0, '6860', '00237', '20/08/2021'),
('Meli ', 'Franck Steve', ' ', '', 'Cameroun', '699385783', 'franckstevemeli@yahoo.fr', 'telefret', 'client', 'particulier', '16/09/2021', 0, 0, 0, 0, '6743', '00237', '16/08/2021'),
('Nguessie', 'Paul', ' ', '', 'Douala', '650511589', 'paulnguessie89@gmail.com', 'Paulngues89', 'transporteur', 'particulier', '16/09/2021', 0, 0, 0, 0, '7463', '00237', '16/08/2021'),
('Maersk', 'Company', 'Maersk company', 'Cameroun', 'Cameroun', '', 'maersk@telefret.com', 'XM2ABwGkc37Vj,sZ', 'maersk', '', '', 0, 0, 0, 1, '', '', ''),
('Kenne', 'Honorine', 'Ets rigobert lion', '', 'YaoundÃ©', '694395277', 'honorinekenne@yahoo.com', 'merveille', 'transporteur', 'entreprise', '30/09/2021', 0, 0, 0, 0, '9467', '00237', '30/08/2021'),
('Andre', 'Simon', ' ', '', 'Douala', '690343431', 'test@gmail.com', '123456', 'transporteur', 'particulier', '01/12/2021', 0, 0, 0, 0, '2678', '00237', '31/10/2021'),
('Mvondo ', 'FranÃ§ois Xavier', 'AB Multi services Cameroun', '', 'Douala', '698423696', 'xaviermvondo@yahoo.fr', 'alexandra', 'client', 'entreprise', '01/12/2021', 0, 0, 0, 0, '5809', '00237', '01/11/2021'),
('gafi', 'gatoi', ' ', '', 'Logpom derriÃ¨re Njoya', '678987676', 'gafi.gatio@gmail.com', '123456', 'transporteur', 'particulier', '02/12/2021', 0, 0, 0, 0, '4001', '00237', '02/11/2021'),
('Neba ', 'Mokom', ' ', '', 'Douala', '6571105033', '', 'password', 'transporteur', 'entreprise', '05/12/2021', 0, 0, 0, 0, '8886', '00237', '05/11/2021'),
('TIOMELA', 'POLYDORE', 'SUPERMARITIME CAMEROON', '', 'DOUALA', '233425452', 'ptiomela@supermaritime.com', '221J@n6h07', 'client', 'entreprise', '02/01/2022', 0, 0, 0, 1, '0891', '00237', '02/12/2021'),
('ABOUNA ', 'YVES ', ' ', '', 'Douala ', '650334195', 'yvesabouna09@gmail.com', 'soppirebecca01', 'client', 'particulier', '10/01/2022', 0, 0, 0, 0, '6135', '00237', '10/12/2021'),
('kiki', 'judith', ' ', '', 'douala', '672300212', '', 'johannstecy', 'transporteur', 'particulier', '17/01/2022', 0, 0, 0, 0, '0544', '00237', '17/12/2021'),
('GUEDEM', 'ALIX', 'GL TRANSPORT', '', 'DOUALA', '691613197', 'eugenieguedem92@gmail.com', 'AL2021', 'client', '', '24/02/2022', 0, 0, 0, 0, '3532', '00237', '24/01/2022'),
('NTEUKAP NJOMOU', 'Franck Harold', ' ', '', 'Logbaba, Apartment', '06 95 16 43 68', 'nnfranck78@gmail.com', '123456', 'client', '', '17/02/2022', 0, 0, 0, 0, '2947', '00237', '17/01/2022'),
('PELLO PELLO', 'Robert Surin', 'PLS INTER', '', 'YASSA', '+237699385090', 'pellopellorobert@gmail.com', 'yesbob', 'client', '', '03/03/2022', 0, 0, 0, 1, '5262', '00237', '31/01/2022');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id_abonnement`);

--
-- Index pour la table `chargement`
--
ALTER TABLE `chargement`
  ADD PRIMARY KEY (`id_charg`);

--
-- Index pour la table `chargement_vehicules`
--
ALTER TABLE `chargement_vehicules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD PRIMARY KEY (`id_disp`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status_gps`
--
ALTER TABLE `status_gps`
  ADD PRIMARY KEY (`Id_status`);

--
-- Index pour la table `transporteur`
--
ALTER TABLE `transporteur`
  ADD PRIMARY KEY (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id_abonnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `chargement`
--
ALTER TABLE `chargement`
  MODIFY `id_charg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT pour la table `chargement_vehicules`
--
ALTER TABLE `chargement_vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  MODIFY `id_disp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT pour la table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `status_gps`
--
ALTER TABLE `status_gps`
  MODIFY `Id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
