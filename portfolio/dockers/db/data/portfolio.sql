-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 nov 2025 om 10:26
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `files`
--

INSERT INTO `files` (`id`, `description`, `filename`) VALUES
(1, 'In de database', 'What is the name of the operation.odt'),
(2, 'Nieuw bestand', 'What is the name of the operation.odt'),
(3, '', 'modern-russian-jet-fighter-aircraft-vector-draw-RMK4GK.jpg'),
(4, '', 'modern-russian-jet-fighter-aircraft-vector-draw-RMK4GK.jpg'),
(5, '', 'modern-russian-jet-fighter-aircraft-vector-draw-RMK4GK.jpg'),
(6, '', 'modern-russian-jet-fighter-aircraft-vector-draw-RMK4GK.jpg'),
(7, '', 'modern-russian-jet-fighter-aircraft-vector-draw-RMK4GK.jpg'),
(8, '', 'big-button.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `languages`
--

INSERT INTO `languages` (`id`, `type`, `language`, `color`) VALUES
(1, 'programming', 'HTML', 'red'),
(2, 'programming', 'CSS', 'green'),
(3, 'programming', 'Python', '#5cb85c'),
(4, 'programming', 'Javascript', '#5bc0de'),
(5, 'programming', 'Java', '#f0ad4e'),
(7, 'other', 'Nederlands', '#ffffff'),
(8, 'programming', 'Engels', '#0000ff'),
(9, 'other', 'Rekenen', '#00ff00'),
(10, 'other', 'drents', '#49a759');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `link`) VALUES
(8, 'cv', 'cv.png', 'link.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
