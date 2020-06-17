-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2020, 12:30:18
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
-- Tablo için tablo yapısı `yazilarim`
--

CREATE TABLE `yazilarim` (
  `id` int(11) NOT NULL,
  `yazi_adi` varchar(255) NOT NULL,
  `yazi_link` varchar(255) NOT NULL,
  `yazi_aciklama` text NOT NULL,
  `yazi_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilarim`
--

INSERT INTO `yazilarim` (`id`, `yazi_adi`, `yazi_link`, `yazi_aciklama`, `yazi_tarih`) VALUES
(1, 'Php', 'https://www.burakkasikci.com/wp-content/uploads/2015/05/phpdataobjects.jpg', 'PHP\'ye yeni başlayanlar için açıklayayım; isset bir değişkenin olup olmadığını kontrol etmek için kullanılan bir fonksiyondur. && ise and anlamına gelir. Yani burada ilk önce ara ve sirala sorgularının ikisininde aynı anda gelip gelmediğine bakılıyor, eğer geldiyse sorguların değerleri gösteriliyor.\r\n\r\n\r\nPost yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir.\r\n\r\n\r\nPost yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir.sadc', '2020-02-05'),
(2, 'php', 'https://www.burakkasikci.com/wp-content/uploads/2015/05/phpdataobjects.jpg', 'PHP\'ye yeni başlayanlar için açıklayayım; isset bir değişkenin olup olmadığını kontrol etmek için kullanılan bir fonksiyondur. && ise and anlamına gelir. Yani burada ilk önce ara ve sirala sorgularının ikisininde aynı anda gelip gelmediğine bakılıyor, eğer geldiyse sorguların değerleri gösteriliyor. Post yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir. Post yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir.', '2020-08-12'),
(4, 'Linux', 'https://dosya.wmaraci.com/nedir/linux.png', 'Linux (telaffuz: Lin-uks); bilgisayar işletim sistemlerinin en temel parçası olan çekirdek yazılımlarından bir tanesidir. GNU Genel Kamu Lisansı versiyon 2 ile sunulan ve Linux Vakfı çatısı altında geliştirilen bir özgür yazılım projesidir. Linux ismi ilk geliştiricisi olan Linus Torvalds tarafından 1991 yılında verilmiştir.[1] Günümüzde süper bilgisayarlarda, akıllı cihazların ve internet altyapısında kullanılan cihazların işletim sistemlerinde yaygın olarak kullanılmaktadır.[2][3] Bunlardan en popüler olanı Google tarafından geliştirilen Android işletim sistemidir.\r\n\r\nAyrıca Linux ismi, bu çekirdek kullanılarak oluşturulan işletim sistemlerini genel anlamda tanımlamak için yaygın bir kısaltma olarak da kullanılmaktadır. Örneğin Linux çekirdeği ve GNU araçları bir araya getirilerek tam bir işletim sistemi olarak sunulduğunda GNU/Linux dağıtımı olarak adlandırılır, ancak konuşma dilinde kısaca Linux olarak ifade edilmektedir.[4][5]\r\n\r\nLinux kelimesinin bu iki farklı kullanımının yol açabileceği karışıklıktan kaçınmak için çekirdek yazılım hakkındaki teknik bilgiler Linux çekirdeği maddesinde, dağıtımlar hakkındaki bilgiler Linux dağıtımları maddesinde verilmiştir.Linux (telaffuz: Lin-uks); bilgisayar işletim sistemlerinin en temel parçası olan çekirdek yazılımlarından bir tanesidir. GNU Genel Kamu Lisansı versiyon 2 ile sunulan ve Linux Vakfı çatısı altında geliştirilen bir özgür yazılım projesidir. Linux ismi ilk geliştiricisi olan Linus Torvalds tarafından 1991 yılında verilmiştir.[1] Günümüzde süper bilgisayarlarda, akıllı cihazların ve internet altyapısında kullanılan cihazların işletim sistemlerinde yaygın olarak kullanılmaktadır.[2][3] Bunlardan en popüler olanı Google tarafından geliştirilen Android işletim sistemidir.\r\n\r\nAyrıca Linux ismi, bu çekirdek kullanılarak oluşturulan işletim sistemlerini genel anlamda tanımlamak için yaygın bir kısaltma olarak da kullanılmaktadır. Örneğin Linux çekirdeği ve GNU araçları bir araya getirilerek tam bir işletim sistemi olarak sunulduğunda GNU/Linux dağıtımı olarak adlandırılır, ancak konuşma dilinde kısaca Linux olarak ifade edilmektedir.[4][5]\r\n\r\nLinux kelimesinin bu iki farklı kullanımının yol açabileceği karışıklıktan kaçınmak için çekirdek yazılım hakkındaki teknik bilgiler Linux çekirdeği maddesinde, dağıtımlar hakkındaki bilgiler Linux dağıtımları maddesinde verilmiştir.', '2020-05-19');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yazilarim`
--
ALTER TABLE `yazilarim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yazilarim`
--
ALTER TABLE `yazilarim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
