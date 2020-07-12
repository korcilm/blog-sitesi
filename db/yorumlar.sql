-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2020, 16:24:54
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_adi` varchar(50) DEFAULT NULL,
  `yorum_mail` varchar(100) DEFAULT NULL,
  `yorum` varchar(5000) DEFAULT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `yazi_id` int(11) DEFAULT NULL,
  `onay` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_adi`, `yorum_mail`, `yorum`, `yorum_tarih`, `yazi_id`, `onay`) VALUES
(31, 'hasan', 'hasn@gmail.com', 'iyi yazıydı tebrikler', '2020-06-28 13:14:24', 8, 1),
(32, 'ada', 'adaa@gmail.com', 'güzel yazı eline sağlık kardeşim', '2020-06-28 13:14:25', 7, 1),
(33, 'yusuf', 'yusuf@gmail.com', 'tebrikler', '2020-06-28 13:14:25', 6, 1),
(34, 'kemal', 'kml@mail.com', 'güzel dilmiş', '2020-07-01 15:08:53', 8, 1),
(35, 'yasinnn', 'yasi@hotmail.com', 'bu dil çok güzel', '2020-07-01 15:08:54', 8, 1),
(36, 'yusuf', 'yusuf@mail.com', 'ali ye katılıyorum', '2020-07-01 15:08:55', 8, 1),
(37, 'Ferhat', 'ft@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-07-02 20:22:46', 8, 1),
(38, 'Ertugrul', 'eto@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '2020-07-02 20:38:01', 6, 1),
(39, 'aylin', 'aylin@mail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut', '2020-07-03 10:32:25', 9, 1),
(40, 'mert', 'mert@mail.com', 'go iyi bir dil mi', '2020-07-10 18:43:56', 10, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`),
  ADD KEY `yazi_id` (`yazi_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD CONSTRAINT `yorumlar_ibfk_1` FOREIGN KEY (`yazi_id`) REFERENCES `yazilarim` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
