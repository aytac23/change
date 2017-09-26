-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Septembre 2017 à 22:50
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- creation base de données
-- connexion base de données
mysql -u root -p

CREATE DATABASE IF NOT EXISTS `change` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `change`;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `flz`
--

-- --------------------------------------------------------

--
-- Structure de la table `balance`
--

CREATE TABLE `balance` (
  `enr` int(11) NOT NULL,
  `cust_r` int(11) NOT NULL,
  `devise` varchar(3) NOT NULL,
  `amount` decimal(11,3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cust_r`
--

CREATE TABLE `cust_r` (
  `id_cli` int(11) NOT NULL,
  `mdp` varchar(12) NOT NULL,
  `name` varchar(35) NOT NULL,
  `pname` varchar(35) NOT NULL,
  `dtb` date NOT NULL,
  `mail` varchar(35) NOT NULL,
  `adres` varchar(60) NOT NULL,
  `cp` int(11) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cust_r`
--

INSERT INTO `cust_r` (`id_cli`, `mdp`, `name`, `pname`, `dtb`, `mail`, `adres`, `cp`, `city`, `country`, `type`, `actif`) VALUES
(1, 'test', 'gun', 'tac', '1984-02-18', 'test@yahoo.com', '11 rue de la poste', 93330, 'paris', 'France', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `deal`
--

CREATE TABLE `deal` (
  `deal_num` int(11) NOT NULL,
  `cust_b` int(11) NOT NULL,
  `book_n` int(11) NOT NULL,
  `cust_s` int(11) NOT NULL,
  `sale_n` int(11) NOT NULL,
  `deal_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `kyc`
--

CREATE TABLE `kyc` (
  `ind` int(11) NOT NULL,
  `cust_r` int(11) NOT NULL,
  `idtype` int(11) NOT NULL,
  `passport` int(11) NOT NULL,
  `idc` varchar(35) NOT NULL,
  `iban` varchar(27) NOT NULL,
  `cb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sale`
--

CREATE TABLE `sale` (
  `numsale` int(11) NOT NULL,
  `cust_r` int(11) NOT NULL,
  `date_s` date NOT NULL,
  `sens_s` varchar(1) NOT NULL DEFAULT 'S',
  `amout_s` decimal(11,3) NOT NULL,
  `dev_s` varchar(3) NOT NULL,
  `actif_s` int(11) NOT NULL,
  `taux_s` decimal(5,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`enr`);

--
-- Index pour la table `cust_r`
--
ALTER TABLE `cust_r`
  ADD PRIMARY KEY (`id_cli`);

--
-- Index pour la table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`deal_num`);

--
-- Index pour la table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`ind`);

--
-- Index pour la table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`numsale`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `balance`
--
ALTER TABLE `balance`
  MODIFY `enr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cust_r`
--
ALTER TABLE `cust_r`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `deal`
--
ALTER TABLE `deal`
  MODIFY `deal_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `ind` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sale`
--
ALTER TABLE `sale`
  MODIFY `numsale` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
