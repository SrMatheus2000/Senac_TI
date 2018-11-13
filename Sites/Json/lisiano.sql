-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2018 às 00:35
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lisiano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `json`
--

CREATE TABLE `json` (
  `id` int(11) NOT NULL,
  `dado1` varchar(500) NOT NULL,
  `dado2` varchar(500) NOT NULL,
  `dado3` varchar(500) NOT NULL,
  `dado4` varchar(500) NOT NULL,
  `dado5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `json`
--

INSERT INTO `json` (`id`, `dado1`, `dado2`, `dado3`, `dado4`, `dado5`) VALUES
(1, '123', '321', '123', '321', '123'),
(2, '123', '321', '123', '321', '123'),
(3, '321', '123', '321', '123', '321'),
(4, 'shsh', 'sdfgsdfg', 'sgdfgsdfgsdf', 'sdgfsdfgsdfg', 'sdfgsdfgsdfg'),
(5, 'gfdssdfgsdf', 'gfsrtsdfs', 'dtrgfdssdf', 'gdfgsdfgsdfg', 'sdrtysdysdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `json`
--
ALTER TABLE `json`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `json`
--
ALTER TABLE `json`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
