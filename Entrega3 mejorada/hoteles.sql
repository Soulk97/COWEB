-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 01-04-2019 a les 18:28:33
-- Versió del servidor: 10.1.34-MariaDB
-- Versió de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `hoteles`
--
CREATE DATABASE IF NOT EXISTS `hoteles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hoteles`;

-- --------------------------------------------------------

--
-- Estructura de la taula `hoteles`
--

CREATE TABLE `hoteles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `pais` varchar(80) DEFAULT NULL,
  `zona` varchar(80) DEFAULT NULL,
  `piscina` int(11) DEFAULT '0',
  `img` varchar(2083) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcament de dades per a la taula `hoteles`
--

INSERT INTO `hoteles` (`id`, `nombre`, `ciudad`, `pais`, `zona`, `piscina`, `img`) VALUES
(10001, 'Hotel Roc Doblemar', 'La Manga', 'España', 'Playa', 1, 'https://www.roc-hotels.com/uploads/galeriahoteles/DSC-4746x.jpg'),
(10002, 'Hotel Nelva', 'Múrcia', 'España', 'Interior', 1, 'https://t-ec.bstatic.com/images/hotel/max1024x768/800/8006648.jpg'),
(10003, 'Hotel Park Puigcerdà & Spa', 'Cerdanya', 'España', 'Montaña', 1, 'http://www.hotelparkpuigcerda.com/slideshow/hotel_estiu/set001.jpg'),
(10004, 'Hotel Cabana', 'Benidorm', 'España', 'Playa', 1, 'https://s-ec.bstatic.com/images/hotel/max1280x900/101/101430248.jpg'),
(10005, 'Nestor Hotel', 'Ayia Napa', 'Chipre', 'Playa', 1, 'https://q-ec.bstatic.com/images/hotel/max1024x768/147/147997361.jpg'),
(10006, 'Hotel Perrakis', 'Andros Island', 'Grécia', 'Playa', 1, 'https://hotelperrakis.com/wp-content/uploads/slider-back-hotel.jpg'),
(10007, 'Hotel Cezar', 'Banja Luka', 'Bosnia y Herzegovina', 'Interior', 0, 'https://t-ec.bstatic.com/images/hotel/max1280x900/185/185533772.jpg'),
(10008, 'Hotel Angelica', 'Limenas', 'Grécia', 'Playa', 0, 'https://q-ec.bstatic.com/images/hotel/max1024x768/797/79726354.jpg'),
(10009, 'Hotel Alanda', 'Marbella', 'España', 'Playa', 1, 'https://www.alandahotelmarbella.com/wp-content/blogs.dir/1672/files/1-home/Pool-1-Final.jpg.pagespeed.ce.8nUFSglAN6.jpg'),
(10010, 'Marconfort Griego Hotel', 'Torremolinos', 'España', 'Playa', 1, 'https://www.marconfort.com/sites/default/files/styles/poster_image/public/images/marconfort-griego-hotel.jpg?itok=5yV8MoHH'),
(10011, 'Hotel H10 Tindaya', 'Fuerteventura', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/15/96/15968_v6.jpeg'),
(10012, 'H10 Lanzarote Princess', 'Playa Blanca', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/72/04/7204_v16.jpeg'),
(10013, 'Eurostars León', 'León', 'España', 'Interior', 0, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/80/90/80900_v15.jpeg'),
(10014, 'Hotel NH Amistad', 'Múrcia', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/40/71/40716_v6.jpeg'),
(10015, 'Fuerte Conil-Costa Luz', 'Conil de la Frontera', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/81/78/81787_v5.jpeg'),
(10016, 'Urban Sea Atocha', 'Madrid', 'España', 'Interior', 0, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/12/73/1273691_v3.jpeg'),
(10017, 'Hotel Playafels', 'Casteldefels', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/11/06/110638_v3.jpeg'),
(10018, 'Meliá Sevilla', 'Sevilla', 'España', 'Playa', 1, 'https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_450,q_auto:eco,w_450/itemimages/80/88/80884_v10.jpeg');

-- --------------------------------------------------------

--
-- Estructura de la taula `reservas`
--

CREATE TABLE `reservas` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_hotel` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
