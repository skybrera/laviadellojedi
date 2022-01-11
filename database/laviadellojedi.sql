-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 11, 2022 alle 14:52
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laviadellojedi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titolo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `films`
--

INSERT INTO `films` (`id`, `titolo`, `anno`, `created_at`, `updated_at`) VALUES
(1, 'Il risveglio della forza', '0000-00-00', '2022-01-09 19:46:05', '2022-01-09 19:46:05'),
(2, 'L\'impero colpisce ancora', '0000-00-00', '2022-01-09 19:46:05', '2022-01-09 19:46:05'),
(3, 'Il ritorno dello Jedi', '0000-00-00', '2022-01-09 19:46:05', '2022-01-09 19:46:05'),
(4, 'Una nuova speranza', '0000-00-00', '2022-01-09 19:46:05', '2022-01-09 19:46:05'),
(5, 'La minaccia fantasma', '1999-05-19', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(6, 'L\'attacco dei cloni', '2002-05-16', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(7, 'La vendetta dei Sith', '2005-05-19', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(8, 'Una nuova speranza', '1977-05-25', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(9, 'L\'Impero colpisce ancora', '1980-05-21', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(10, 'Il ritorno dello Jedi', '1983-05-25', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(11, 'Il risveglio della forza', '2015-12-18', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(12, 'Gli ultimi Jedi', '2017-12-15', '2022-01-11 13:20:04', '2022-01-11 13:20:04'),
(13, 'L\'ascesa di Skywalker', '2019-12-18', '2022-01-11 13:20:04', '2022-01-11 13:20:04');

-- --------------------------------------------------------

--
-- Struttura della tabella `jedi`
--

CREATE TABLE `jedi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `jedi`
--

INSERT INTO `jedi` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Anakin Skywalker', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(2, 'Padme Amidala', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(3, 'Luke Skywalker', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(4, 'Han Solo', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(5, 'Yoda', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(6, 'Darth Vader', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(7, 'Generale Tarkin', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(8, 'Boba Fett', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(9, 'Rey', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(10, 'Finn', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(11, 'Poe Dameron', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(12, 'BB-8', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(13, 'D3BO', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(14, 'C1P8', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(15, 'Darth Sidious o Scheeve Palpatine', '2022-01-09 19:43:36', '2022-01-09 19:43:36'),
(16, 'Obi-Wan Kenobi', '2022-01-09 19:48:25', '2022-01-09 19:48:25'),
(17, 'Yoda', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(18, 'Luke Skywalker', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(19, 'Anakin Skywalker', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(20, 'Boba Fett', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(21, 'D-3BO', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(22, 'Darth Fener', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(23, 'Finn', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(24, 'Han Solo', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(25, 'Imperatore Palpatine', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(26, 'Jabba The Hutt', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(27, 'Jango Fett', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(28, 'Lando Calrissian', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(29, 'Obi Wan Kenobi', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(30, 'Darth Sidious', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(31, 'Principessa Leila Organa', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(32, 'Qui-Gon Jinn', '2022-01-11 13:20:02', '2022-01-11 13:20:02'),
(33, 'Rey', '2022-01-11 13:20:02', '2022-01-11 13:20:02');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_12_19_184220_create_jedi_table', 1),
(3, '2021_12_29_102755_create_films_table', 1),
(4, '2021_12_29_184230_create_quotes_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jedi_id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `quotes`
--

INSERT INTO `quotes` (`id`, `jedi_id`, `film_id`, `quote`, `created_at`, `updated_at`) VALUES
(1, 16, 4, 'Questi non sono i droidi che state cercando', '2022-01-09 19:52:36', '2022-01-09 19:52:36'),
(2, 4, 2, 'Volevi esserci quando facevo uno sbaglio? Be\', forse ci siamo, tesoro.', '2022-01-09 19:52:36', '2022-01-09 19:52:36'),
(3, 13, 4, 'Ho capito la sfumatura Signore', '2022-01-09 19:52:36', '2022-01-09 19:52:36'),
(4, 3, 2, 'Mi sta accadendo qualcosa, non sono il jedi che dovrei essere. Voglio di più… e so che non dovrei.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(5, 4, 6, 'come mio Padre prima di me!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(6, 4, 6, 'Jabba governava con la paura, io intendo farlo con il rispetto!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(7, 5, 5, 'C1P8 Stai bene, non sei rotto?', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(8, 6, 5, 'La forza è con te, giovane Skywalker, ma tu non sei ancora un Jedi!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(9, 6, 5, 'Io sono tuo Padre', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(10, 6, 5, 'Ho sentito un\'interferenza nella forza', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(11, 6, 4, 'Trovo insopportabile la tua mancanza di fede.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(12, 6, 4, 'La Forza è potente in quest\'uomo.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(13, 7, 7, 'Ora ascoltami, se fai quello che ti dico, ti tiro fuori da quì!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(14, 7, 7, 'mi serve un pilota', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(15, 8, 4, 'Fantastica la ragazza, eh? Non so se ucciderla o innamorarmi di lei!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(16, 8, 4, 'Una cosa è sicura, diverremo tutti magrissimi!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(17, 8, 4, 'Entra dentro, montagna pelosa! Non mi importa se poi puzzi!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(18, 8, 4, 'Cosa? Come? Non hai mai sentito nominare il Millenium Falcon?', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(19, 8, 6, 'D-3BO, dì a quella schifosa massa putrescente e verminosa che noi non ci arrenderemo mai!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(20, 9, 5, 'Benvenuto, giovane Skywalker. Ti stavo aspettando.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(21, 10, 6, 'Ah ah ah ah', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(22, 11, 2, 'Sono solo un semplice uomo che cerca di costruirsi la sua strada nell\'universo!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(23, 12, 5, 'Disattiveranno quello scudo in tempo, o questo sarà l\'attacco più breve di tutti i tempi.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(24, 2, 5, 'Bene, ci provero\'!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(25, 2, 5, 'Una volta tu eri mio Padre: Anakin Skywalker', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(26, 2, 5, 'Avete fallito, Altezza. Sono uno Jedi, come mio padre prima di me!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(27, 13, 5, 'Usa la Forza, Luke!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(28, 13, 5, 'La forza sara\' sempre con te!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(29, 13, 5, 'Luke, fidati di te!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(30, 13, 4, 'Chi è più pazzo, il pazzo o il pazzo che lo segue?', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(31, 13, 4, 'Usa la Forza Luke. Segui l\'istinto Luke.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(32, 14, 2, 'Ti vedo destinato a diventare il più grande dei Jedi, Anakin, anche più potente del maestro Yoda.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(33, 14, 2, 'La Forza è potente in te. Un potente Sith tu diventerai! D\'ora in poi sarai chiamato con il nome di Darth Fener.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(34, 15, 4, 'Aiutami, Obi-Wan Kenobi: sei la mia unica speranza!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(35, 16, 2, 'E\' lui il prescelto, lui… lui porterà equilibrio. Addestralo!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(36, 16, 2, 'La capacità di parlare non fa di te un essere intelligente, ora vedi di filare.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(37, 17, 7, 'Ho bisogno di qualcuno che mi mostri il mio posto in tutto questo.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(38, 1, 2, 'Su tutto l\'ombra del lato oscuro è calata. Cominciata la Guerra dei Cloni è!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(39, 1, 5, 'Provare no! Fare o non fare. Non c\'è provare!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(40, 1, 5, 'Ecco perche\' hai fallito!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(41, 1, 5, 'Grande guerriero? Guerra non fa nessuno grande.', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(42, 1, 5, 'Lo imparerai! Quando sei calmo, in pace! Passivo… un Jedi usa la Forza per saggezza e difesa, mai per attaccare!', '2022-01-11 13:23:54', '2022-01-11 13:23:54'),
(43, 1, 2, 'Tuo apprendista Skywalker sarà.', '2022-01-11 13:23:54', '2022-01-11 13:23:54');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `jedi`
--
ALTER TABLE `jedi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotes_jedi_id_foreign` (`jedi_id`),
  ADD KEY `quotes_film_id_foreign` (`film_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `jedi`
--
ALTER TABLE `jedi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quotes_jedi_id_foreign` FOREIGN KEY (`jedi_id`) REFERENCES `jedi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
