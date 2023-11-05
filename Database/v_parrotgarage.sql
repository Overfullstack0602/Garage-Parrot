-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 05 nov. 2023 à 12:09
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `v.parrotgarage`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `priceinclusives` varchar(255) NOT NULL,
  `body` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `bodystyle` varchar(100) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `safety` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `releasedate` date NOT NULL,
  `seats` int(10) NOT NULL,
  `modelyear` text NOT NULL,
  `finaldrive` varchar(50) NOT NULL,
  `modelgrade` varchar(50) NOT NULL,
  `specregion` varchar(50) NOT NULL,
  `insurance` int(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `mainimage` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `company` varchar(100) NOT NULL,
  `staffID` varchar(11) NOT NULL,
  `Interior1` varchar(255) NOT NULL,
  `Interior2` varchar(255) NOT NULL,
  `Interior3` varchar(255) NOT NULL,
  `Interior4` varchar(255) NOT NULL,
  `Exterior1` varchar(255) NOT NULL,
  `Exterior2` varchar(255) NOT NULL,
  `Exterior3` varchar(255) NOT NULL,
  `Exterior4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `carname`, `price`, `location`, `priceinclusives`, `body`, `fuel`, `engine`, `bodystyle`, `performance`, `safety`, `technology`, `releasedate`, `seats`, `modelyear`, `finaldrive`, `modelgrade`, `specregion`, `insurance`, `note`, `mainimage`, `status`, `company`, `staffID`, `Interior1`, `Interior2`, `Interior3`, `Interior4`, `Exterior1`, `Exterior2`, `Exterior3`, `Exterior4`) VALUES
(1, 'Toyota Camry', 30000, 'Toulouse', '', 'Berline', 'Essence', '2.5L 4 cylindres', 'Sedan', '203 chevaux', 'Système de freinage avancé, assistance au maintien de voie', 'Écran tactile de 8 pouces, système d\'infodivertissement', '0000-00-00', 5, '2022', 'Automatique', 'Premium', 'Europe', 5, 'Voiture top pour une petite famille', 'camry1.jpg', 'On Market', 'Toyota', '4', 'camry7.jpg', 'camry6.jpg', 'camry5.jpg', 'camry4.jpg', 'camry3.jpg', 'camry2.jpg', 'camry1.jpg', 'camry8.jpg'),
(2, 'Volkswagen Golf', 25000, 'Toulouse', 'oui', 'Compacte', 'Diesel', '2.0L 4 cylindres', 'Hatchback', '150 chevaux', ' Système de surveillance d\'angle mort, régulateur de vitesse adaptatif', 'Écran tactile de 10 pouces, système audio haut de gamme', '0000-00-00', 0, '2023', 'Manuel', 'Premium', 'Europe', 4, 'Voiture familiale', 'golf81.jpg', 'On Market', 'Wolkswagen', '8', 'golf87.jpg', 'golf87.jpg', 'golf86.jpg', 'golf85.jpg', 'golf81.jpg', 'golf82.jpg', 'golf83.jpg', 'golf84.jpg'),
(3, 'Volkswagen Tiguan', 35000, 'Toulouse', 'oui', 'SUV', 'Essence', '2.0L Turbo 4 cylindres', 'Crossover', ' 184 chevaux', 'Système d\'assistance au conducteur, système de freinage d\'urgence', ' Navigation GPS, toit ouvrant panoramique', '0000-00-00', 5, '2022', 'Automatique', 'Premium', 'Europe', 6, 'Voiture parfaite pour une grande famille', 'tiguan1.jpg', 'On Market', 'Wolkswagen', '4', 'tiguan4.jpg', 'tiguan4.3jpg', 'tiguan4.jpg', 'tiguan3.jpg', 'tiguan1.jpg', 'tiguan2.jpg', 'tiguan1.jpg', 'tiguan5.jpg'),
(4, 'Tesla Model 3', 45000, 'Toulouse', 'oui', 'Berline', ' Électrique', 'Électrique', 'Sedan', '346 chevaux (Standard Range Plus)', 'Pilote automatique complet, système de détection des obstacles', 'Écran tactile de 15 pouces, Autopilote amélioré', '0000-00-00', 5, '2022', 'Sport', 'Premium', 'Europe', 8, 'Meilleur voiture electrique dans le marché', 'tesla31.jpg', 'On Market', 'Tesla', '11', 'tesla31', 'tesla32', 'tesla33', 'tesla34', 'tesla31', 'tesla32', 'tesla33', 'tesla34'),
(5, ' Mercedes-Benz C-Class', 40000, 'Toulouse', 'oui', 'Berline', ' Essence', ' 2.0L Turbo 4 cylindres', 'Sedan\r\n', '255 chevaux', 'Assistance au freinage d\'urgence, caméra de recul', 'Système d\'infodivertissement MBUX, écran tactile de 10.25 pouces', '0000-00-00', 5, '2022', 'Automatique', 'Premium', 'Europe', 5, 'Voiture impeccable pour vous !', 'mercedes1.jpg', 'On Market', 'Mercedes', '11', 'mercedes6.jpg', 'mercedes5.jpg', 'mercedes4.jpg', 'mercedes3.jpg', 'mercedes2.jpg', 'mercedes1.jpg', 'mercedes2.jpg', 'mercedes1.jpg'),
(6, 'Mercedes-Benz GLC', 50000, 'Toulouse', 'oui', 'SUV', 'Diesel', ' 2.0L Turbo 4 cylindres', 'Crossover', '242 chevaux', 'Système de surveillance d\'angle mort, régulateur de vitesse actif', 'Navigation GPS, système audio Burmester\r\n\r\n\r\n\r\n\r\n', '0000-00-00', 6, '2023', 'Automatique', 'suv', 'Europe', 6, 'Voiture spacieuse et familliale', 'glc2.jpg', 'On Market', 'Mercedes', '11', 'glc5.jpg', 'glc6.jpg', 'glc7.jpg', 'glc8.jpg', 'glc2.jpg', 'glc.jpg', 'glc1.jpg', 'glc3.jpg'),
(13, 'Toyota Corolla', 20000, 'Nice', 'Oui', 'Berline', ' Essence', 'Incididunt praesenti', 'Classique', ' 0-100 km/h en 9 secondes', ' Système de freinage ABS', 'Écran tactile de 8 pouces', '2022-03-15', 5, '2022\r\n', 'Automatique', 'Premium', 'Europe', 3, 'Voiture familiale fiable', 'corolla5.jpg', 'On Market', 'Toyota', '8', 'corolla1.jpg', 'corolla2.jpg', 'corolla3.jpg', 'corolla4.jpg', 'corolla5.jpg', 'corolla6.jpg', 'corolla7.jpg', 'corolla8.jpg'),
(14, 'Toyota RAV4 Hybrid', 32000, 'Nice', 'Oui\r\n', 'SUV', 'Hybride', '2.5L 4 cylindres hybride', 'Moderne et robuste', 'Consommation de carburant faible, 0-100 km/h en 8.1 secondes', 'Système de précollision avec détection des piétons', ' Système multimédia avec écran tactile de 8 pouces', '2022-04-25', 5, '2022', 'Automatique', 'Premium', 'Europe', 4, 'SUV économe en carburant, idéal pour les familles', 'toyotahybrid1.jpg', 'On Market', 'Toyota', '11', 'toyotahybrid8.jpg', 'toyotahybrid7.jpg', 'toyotahybrid6.jpg', 'toyotahybrid5.jpg', 'toyotahybrid4.jpg', 'toyotahybrid3.jpg', 'toyotahybrid2.jpg', 'toyotahybrid1.jpg'),
(15, 'Mercedes-Benz C-Class', 45000, 'Nice', 'Oui', 'Berline de luxe', 'Essence\r\n', ' 2.0L 4 cylindres turbo', 'Élégant et sophistiqué', '0-100 km/h en 6.1 secondes', 'Système de détection des angles morts ', 'Système multimédia avec commande vocale et écran tactile de 10.3 pouces ', '2022-05-05', 5, '2022', 'Automatique', 'AMG Line', ' Europe', 2, 'Luxe et performances incomparables', 'benz5.jpg', 'On Market', 'Mercedes', '11', 'benz1.jpg', 'benz2.jpg', 'benz3.jpg', 'benz4.jpg', 'benz5.jpg', 'benz6.jpg', 'benz7.jpg', 'benz8.jpg'),
(16, 'Volkswagen Golf GTI', 24500, 'Nice', 'Oui', 'Compacte', 'Essence', '2.0L 4 cylindres turbo', 'Sportif', '0-100 km/h en 6.4 secondes', 'Système d\'assistance au freinage', ' Écran tactile de 10 pouces avec Apple CarPlay et Android Auto', '2022-05-10', 5, '2022', 'Automatique', 'Sport', 'Europe', 4, 'Fusion de sportivité et de praticité', 'golf1.jpg', 'On Market', 'Wolkswagen', '8', 'golf8.jpg', 'golf7.jpg', 'golf6.jpg', 'golf5.jpg', 'golf4.jpg', 'golf3.jpg', 'golf2.jpg', 'golf1.jpg'),
(17, ' Tesla Model 3', 48000, 'Nice', 'Oui', 'Berline électrique', 'Électrique', 'Moteur électrique à haute efficacité', 'Futuriste et épuré', '0-100 km/h en 5.3 secondes', 'Système de pilotage automatique avancé', 'Système d\'infodivertissement avec écran tactile de 15 pouces', '2022-05-15', 5, '2022', 'Automatique', ' Long Range', 'Europe', 5, 'Voiture électrique haut de gamme avec une autonomie exceptionnelle', 'tesla2.jpg', 'On Market', 'Tesla', '4', 'tesla8.jpg', 'tesla7.jpg', 'tesla6.jpg', 'tesla5.jpg', 'tesla4.jpg', 'tesla3.jpg', 'tesla2.jpg', 'tesla1.jpg'),
(18, 'Mercedes-Benz GLC', 52000, 'Nice', 'Oui\r\n', 'Exercitation totam n', 'Diesel', '2.2L 4 cylindres turbo-diesel', ' Élégant et spacieux', 'Consommation de carburant efficace, 0-100 km/h en 7.6 secondes', 'Système de freinage d\'urgence', 'Système d\'infodivertissement avec écran tactile de 12.3 pouces', '2022-04-18', 5, '2022\r\n', 'Automatique', '4MATIC', ' Europe', 3, 'SUV de luxe polyvalent avec un intérieur somptueux', 'glc1.jpeg', 'sold', 'Mercedes', '8', 'glc8.jpeg', 'glc7.jpeg', 'glc6.jpeg', 'glc5.jpeg', 'glc4.jpeg', 'glc3.jpeg', 'glc2.jpeg', 'glc1.jpeg'),
(25, 'Tesla Model 3', 49900, 'Nice', 'oui', 'Berline', 'Electrique', 'Électrique', 'Berline', '0-100 km/h en 5,6 secondes', 'Système de pilotage automatique avancé, huit airbags, système de freinage régénératif', 'Écran tactile de 15 pouces avec navigation, système audio haut de gamme', '0000-00-00', 5, '2022', 'Traction arrière', 'Performance', 'Europe', 2, 'top', 'tes8.jpg', 'On Market', 'Tesla', '4', 'tes8.jpg', 'tes4.jpg', 'tes3.jpg', 'tes1.jpg', 'tes2.jpg', 'tes5.jpg', 'tes6.jpg', 'tes7.jpg'),
(26, 'test', 10000, 'Toulouse', 'oui', 'Berline', 'Diesel', '16V DOHC', 'berline', 'top', 'oui', 'test', '2010-07-16', 5, '2010', 'test', 'test', 'test', 2, 'test', 'benz5.jpg', 'On Market', 'Mercedes', '4', 'benz5.jpg', 'benz4.jpg', 'benz2.jpg', 'benz5.jpg', 'benz5.jpg', 'benz3.jpg', 'benz1.jpg', 'benz7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `agentID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `payment` int(11) NOT NULL,
  `insurance` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `carID`, `agentID`, `firstname`, `secondname`, `image`, `email`, `phone`, `nationality`, `language`, `gender`, `dob`, `payment`, `insurance`, `username`, `password`, `role`) VALUES
(13, 0, 0, 'jojo', 'Lamamra', 'younes.jpeg', 'lamamrayounes2015@gmail.com', '', 'Francaise', '', '', '1997-07-16', 0, 0, 'jojo', 'jojo123', ''),
(14, 0, 0, 'Younes', 'Lamamra', '', 'haidarlamamra3@gmail.com', '', 'Francaise', '', '', '1997-07-16', 0, 0, 'younes', '$2y$10$3MBvaJf0ZF50GH9t22wSB.mHiQkohq2cVy9xcxTbTCv', ''),
(15, 0, 0, 'test', 'user', '', 'test@user.com', '', 'Francaise', '', '', '1997-07-16', 0, 0, 'test', '$2y$10$yQr.inzld5iSs6Z0PrX/i.M1sjU8hT5ypJ74S6Zwzf5', '');

-- --------------------------------------------------------

--
-- Structure de la table `horaires_garage`
--

CREATE TABLE `horaires_garage` (
  `id` int(11) NOT NULL,
  `jour_semaine` int(11) DEFAULT NULL,
  `heure_ouverture` time DEFAULT NULL,
  `heure_fermeture` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires_garage`
--

INSERT INTO `horaires_garage` (`id`, `jour_semaine`, `heure_ouverture`, `heure_fermeture`) VALUES
(1, 1, '15:00:00', '18:00:00'),
(2, 2, '08:00:00', '16:00:00'),
(3, 3, '08:00:00', '16:00:00'),
(4, 4, '08:00:00', '16:00:00'),
(5, 5, '08:00:00', '16:00:00'),
(6, 6, '08:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `senderID`, `receiverID`, `message`) VALUES
(25, 7, 8, 'bonjour'),
(26, 8, 7, 'Bonjour monsieur, de quoi puis je vous aider ?'),
(27, 8, 7, 'salut'),
(28, 7, 8, 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `repairing`
--

CREATE TABLE `repairing` (
  `id` int(11) NOT NULL,
  `repairType` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `staffID` int(11) NOT NULL,
  `mainImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `repairing`
--

INSERT INTO `repairing` (`id`, `repairType`, `date`, `price`, `status`, `staffID`, `mainImage`) VALUES
(2, 'Vidange', '2032-05-16', 200.00, 'Finish', 4, 'vidange.jpg'),
(3, 'Gaz d\'echappement', '2023-05-16', 200.00, 'Finish', 11, 'gaz.jpg'),
(4, 'changement des freins.', '2023-06-15', 200.00, 'Finish', 8, 'frein.jpg'),
(5, 'changement des freins.', '2023-05-06', 150.00, 'Depending', 8, 'frein.jpg'),
(6, 'changement des freins.', '2023-05-16', 150.00, 'Finish', 8, 'frein.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `carID` int(11) NOT NULL,
  `reviewerName` varchar(50) NOT NULL,
  `reviewerImage` varchar(255) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `carID`, `reviewerName`, `reviewerImage`, `nationality`, `review`, `status`) VALUES
(7, 13, 'Jean Dupont ', 'user (16).png', 'France', 'Service professionnel et satisfaisant.', 'Pending'),
(8, 16, 'Marie Lefevre', 'user (1).jpg', 'France', 'Expérience dachat exceptionnelle! ', 'Published'),
(9, 16, 'Pierre Martin', 'user (7).png', 'France', 'Service client de première classe. :)', 'Published'),
(11, 24, 'David Dubois', 'user (9).png', 'France', 'Variété de voitures impressionnante.', 'Published'),
(15, 15, 'Émilie Girard', 'user (1).png', 'France', 'Service après-vente excellent.', 'Published'),
(0, 2, 'Jean Dupont', '', 'Francaise', 'Service au top', 'pending');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nationality` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `language` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` int(10) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `coverpic` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `response` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `secondname`, `username`, `nationality`, `phone`, `gender`, `language`, `dob`, `email`, `experience`, `profilepic`, `coverpic`, `facebook`, `twitter`, `instagram`, `linkedin`, `password`, `role`, `response`, `status`, `description`) VALUES
(4, 'Younes', 'Lamamra', 'younes', 'France', '2540086746', 'male', 'Francais', '1997-07-16', 'younes@gmail.com', 12, 'younes.jpeg', 'younes.jpeg', 'https://www.facebook.com/login/', 'https://twitter.com/i/flow/login', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'Admin15!!', 'admin', 15, 'verified', 'Younes, mécanicien chevronné, 12 ans d\'expérience. Expertise variée, précis et efficace. Diagnostiqueur hors pair. Fiabilité et compétence assurées. Un atout pour toute équipe auto.'),
(8, 'Vincent', 'Parrot', 'Vparrot', 'France', '0623693819', 'Male', 'Francais', '1986-03-20', 'info@parrot.com', 12, 'Vparrot.jpg', 'Vparrot.jpg', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'garagevparrot.11', 'Admin15!!', 'admin', 10, 'verified', 'Parrot, expert en réparation automobile avec 15 ans d\'expérience, offre des services de qualité. Sa passion et son professionnalisme en font un partenaire de confiance pour l\'entretien de votre véhicule. Sa réputation est basée sur la satisfaction de sa clientèle fidèle.'),
(11, 'Jonas', 'Lamamra', 'Jonas', 'France', '0623693819', 'Male', 'Francais', '2023-02-06', 'jonas@gmail.com', 2011, 'jonas (23).png', 'mbz.png', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'admin', 'staff', 8, 'verified', 'Jonas est un mécanicien expérimenté avec 8 ans de pratique. Sa solide expérience lui confère une expertise pointue dans la réparation et l\'entretien automobile. Il se distingue par sa rigueur, son efficacité et son souci du détail. Grâce à son talent pour diagnostiquer rapidement les problèmes mécaniques, il offre des solutions précises à ses clients. Jonas est reconnu pour sa fiabilité et son professionnalisme, ce qui en fait un atout inestimable pour toute équipe ou atelier automobile.');

-- --------------------------------------------------------

--
-- Structure de la table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(2, 'lamamrayounes2015@gmail.com', '0000-00-00'),
(3, 'info@magic-outils.fr', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaires_garage`
--
ALTER TABLE `horaires_garage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repairing`
--
ALTER TABLE `repairing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffID` (`staffID`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `horaires_garage`
--
ALTER TABLE `horaires_garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `repairing`
--
ALTER TABLE `repairing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `repairing`
--
ALTER TABLE `repairing`
  ADD CONSTRAINT `repairing_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
