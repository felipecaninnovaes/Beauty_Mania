-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Nov 17, 2020 at 05:12 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nome_agenda` varchar(255) NOT NULL,
  `telefone_agenda` varchar(20) NOT NULL,
  `dia_agenda` date NOT NULL,
  `hora_agenda` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nome_agenda`, `telefone_agenda`, `dia_agenda`, `hora_agenda`) VALUES
(1, 'Eduardo', '', '2020-11-16', '17:14:00'),
(2, 'Eduardo', '', '2020-11-16', '17:14:00'),
(3, 'Murilo', '', '2020-11-18', '17:14:00'),
(4, 'Kauï¿½', '', '2020-11-24', '20:14:00'),
(5, 'Aline', '', '2020-11-26', '21:14:00'),
(6, 'Pedro', '', '2020-11-26', '20:15:00'),
(7, 'Pedro', '', '2020-12-04', '19:15:00'),
(8, 'Isabela', '', '2020-11-27', '20:20:00'),
(9, 'Diogo', '', '2020-12-01', '22:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `tel_cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `tel_cliente`) VALUES
(1, 'Eduardo Sousa Dias', '(11) 7503-4342'),
(2, 'Murilo Oliveira Costa', '(81) 3633-3657'),
(3, 'Kauê Pereira Souza', '(11) 4443-9803'),
(4, 'Aline Silva Alves', '(81) 5912-4689'),
(5, 'Isabela Cavalcanti Gomes', '(53) 2122-7725'),
(6, 'Pedro Costa Melo', ' (27) 5308-7857'),
(7, 'Anna Ribeiro Rodrigues', '(11) 9191-9698'),
(8, 'Diogo Cunha Fernandes', '(81) 3246-6522');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `qtd_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `qtd_produto`) VALUES
(1, 'Escova', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
