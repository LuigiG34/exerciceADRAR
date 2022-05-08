-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 04 mai 2022 à 18:57
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `auteur_id`, `title`, `content`, `image_url`, `date_time`) VALUES
(2, 7, 'Poseidon', 'Poseidon was god of the sea, earthquakes, storms, and horses and is considered one of the most bad-tempered, moody and greedy Olympian gods.', '../assets/image/93846.jpg', '2022-05-04 14:14:14'),
(3, 7, 'Zeus', 'Zeus is the god of the sky in ancient Greek mythology. As the chief Greek deity, Zeus is considered the ruler, protector, and father of all gods and humans. Zeus is often depicted as an older man with a beard and is represented by symbols such as the lightning bolt and the eagle.', '../assets/image/62089.jpg', '2022-05-04 14:16:55'),
(4, 7, 'Hermes', 'Il est le messager des dieux, principalement de Zeus, au même titre qu\'Iris, donneur de la chance, inventeur des poids et des mesures, gardien des routes et carrefours, dieu des voyageurs, des commerçants, des voleurs et des orateurs.', '../assets/image/17042.jpg', '2022-05-04 15:05:56'),
(5, 7, 'Athena', 'Elle était considérée comme la patronne et protectrice de plusieurs villes de Grèce, notamment celle d’Athènes. Elle est généralement montrée dans l\'art portant un casque et tenant une lance. Ses principaux symboles incluent la chouette, l\'olivier, le serpent et le Gorgonéion.', '../assets/image/17909.jpg', '2022-05-04 15:07:24'),
(6, 7, 'Ares', 'Ares est un projet de famille de lanceurs civils américains de la NASA développé dans les années 2000 dans le cadre du programme Constellation et abandonné en 2010.\r\nLe nom de cette famille de lanceurs fait clairement référence à Arès, le dieu grec de la guerre appelé Mars par les Romains.\r\nQuant au numéro du lanceur super lourd, celui-ci est un clin d\'œil à Saturn V ayant envoyé les astronautes du programme Apollo sur la Lune.', '../assets/image/29334.jpg', '2022-05-04 15:09:01'),
(7, 7, 'Hades', 'Frère de Zeus, de Poséidon et d\'Héra, Hadès est le dieu des morts, le maître des enfers. De nombreux êtres et démons, tels Cerbère et Charon, l\'assistent dans cette tâche. Il enlève Perséphone pour l\'épouser.', '../assets/image/2599.jpg', '2022-05-04 15:11:35'),
(8, 7, 'Hestia', 'Divinité et symbole du foyer et du feu sacré, Hestia était la première fille de Cronos et Rhéa et elle fut avalée par son père dès sa naissance comme ses frères et ses soeurs. Elle fait partie des douze Olympiens mais par la suite elle est souvent remplacée par Dionysos.', '../assets/image/62054.jpg', '2022-05-04 15:12:45');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `user_status`, `email`) VALUES
(7, 'admin', '$2y$10$Xe.XU2ezCUtjdt7i22GKHOOsAhHeBgJHyD0ecncn.jIxSBiQhjeu.', 'admin', 'admin@admin.fr'),
(8, 'standard', '$2y$10$e6SmIIght/bfzBtNw03cg.GkZYMtoMHEi.liwTL2M8wI16olvdHGa', 'standard', 'standard@mail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
