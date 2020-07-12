-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2020, 16:24:46
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
  `yazi_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazilarim`
--

INSERT INTO `yazilarim` (`id`, `yazi_adi`, `yazi_link`, `yazi_aciklama`, `yazi_tarih`) VALUES
(6, 'Php', 'https://www.burakkasikci.com/wp-content/uploads/2015/05/phpdataobjects.jpg', 'PHP\'ye yeni başlayanlar için açıklayayım; isset bir değişkenin olup olmadığını kontrol etmek için kullanılan bir fonksiyondur. && ise and anlamına gelir. Yani burada ilk önce ara ve sirala sorgularının ikisininde aynı anda gelip gelmediğine bakılıyor, eğer geldiyse sorguların değerleri gösteriliyor.\r\n\r\n\r\nPost yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir.\r\n\r\n\r\nPost yönteminde sorgular gizli bir şekilde gönderilir, MIME ile şifrelenir, tarayıcının adres çubuğunda gözükmez, istemcinin tarayıcı geçmişine ve sunucunun URL loglarına kaydedilmez. Güvenlidir fakat hızlı değildir. Kullanıcı adı ve şifre gibi özel bilgilerin bu yöntemle gönderilmesi gerekir.sadc', '2020-06-28 13:10:30'),
(7, 'Linux', 'https://dosya.wmaraci.com/nedir/linux.png', 'Linux (telaffuz: Lin-uks); bilgisayar işletim sistemlerinin en temel parçası olan çekirdek yazılımlarından bir tanesidir. GNU Genel Kamu Lisansı versiyon 2 ile sunulan ve Linux Vakfı çatısı altında geliştirilen bir özgür yazılım projesidir. Linux ismi ilk geliştiricisi olan Linus Torvalds tarafından 1991 yılında verilmiştir.[1] Günümüzde süper bilgisayarlarda, akıllı cihazların ve internet altyapısında kullanılan cihazların işletim sistemlerinde yaygın olarak kullanılmaktadır.[2][3] Bunlardan en popüler olanı Google tarafından geliştirilen Android işletim sistemidir.\r\n\r\nAyrıca Linux ismi, bu çekirdek kullanılarak oluşturulan işletim sistemlerini genel anlamda tanımlamak için yaygın bir kısaltma olarak da kullanılmaktadır. Örneğin Linux çekirdeği ve GNU araçları bir araya getirilerek tam bir işletim sistemi olarak sunulduğunda GNU/Linux dağıtımı olarak adlandırılır, ancak konuşma dilinde kısaca Linux olarak ifade edilmektedir.[4][5]\r\n\r\nLinux kelimesinin bu iki farklı kullanımının yol açabileceği karışıklıktan kaçınmak için çekirdek yazılım hakkındaki teknik bilgiler Linux çekirdeği maddesinde, dağıtımlar hakkındaki bilgiler Linux dağıtımları maddesinde verilmiştir.Linux (telaffuz: Lin-uks); bilgisayar işletim sistemlerinin en temel parçası olan çekirdek yazılımlarından bir tanesidir. GNU Genel Kamu Lisansı versiyon 2 ile sunulan ve Linux Vakfı çatısı altında geliştirilen bir özgür yazılım projesidir. Linux ismi ilk geliştiricisi olan Linus Torvalds tarafından 1991 yılında verilmiştir.[1] Günümüzde süper bilgisayarlarda, akıllı cihazların ve internet altyapısında kullanılan cihazların işletim sistemlerinde yaygın olarak kullanılmaktadır.[2][3] Bunlardan en popüler olanı Google tarafından geliştirilen Android işletim sistemidir.\r\n\r\nAyrıca Linux ismi, bu çekirdek kullanılarak oluşturulan işletim sistemlerini genel anlamda tanımlamak için yaygın bir kısaltma olarak da kullanılmaktadır. Örneğin Linux çekirdeği ve GNU araçları bir araya getirilerek tam bir işletim sistemi olarak sunulduğunda GNU/Linux dağıtımı olarak adlandırılır, ancak konuşma dilinde kısaca Linux olarak ifade edilmektedir.[4][5]\r\n\r\nLinux kelimesinin bu iki farklı kullanımının yol açabileceği karışıklıktan kaçınmak için çekirdek yazılım hakkındaki teknik bilgiler Linux çekirdeği maddesinde, dağıtımlar hakkındaki bilgiler Linux dağıtımları maddesinde verilmiştir.', '2020-06-28 13:11:10'),
(8, 'Javascript', 'https://www.setxrm.com/wp-content/uploads/2019/11/Javascript-programming-language.jpg', 'JavaScript, yaygın olarak web tarayıcılarında kullanılmakta olan dinamik bir programlama dilidir. JavaScript ile yazılan istemci tarafı betikler sayesinde tarayıcının kullanıcıyla etkileşimde bulunması, tarayıcının kontrol edilmesi, asenkron bir şekilde sunucu ile iletişime geçilmesi ve web sayfası içeriğinin değiştirilmesi gibi işlevler sağlanır. JavaScript, Node.js gibi platformlar sayesinde sunucu tarafında da yaygın olarak kullanılmaktadır.\r\n\r\nJavaScript prototip-tabanlı, dinamik türlere ve birinci-sınıf fonksiyonlara sahip bir betik dilidir. Nesne yönelimli, imperatif ve fonksiyonel programlama prensiplerine sahiptir.\r\n\r\nJavaScript ve Java arasında; isimleri, yazım şekli ve standart kütüphanelerindeki benzerlikler dışında bir bağlantı yoktur ve iki dilin semantikleri çok farklıdır. JavaScript\'in yazım şekli C programlama dilinden türetilmiş, semantiği ve tasarımı ise Self ve Scheme programlama dillerinden esinlenmiştir.\r\n\r\nJavaScript, ECMAScript belirtimleri ile standartlaştırılmıştır.', '2020-06-28 13:12:04'),
(9, 'Python', 'https://sudo.ubuntu-tr.net/assets/post/pyhton-programlama-seri-ii/pyhton-programlama-seri-ii.jpeg', 'Python, nesne yönelimli, yorumlamalı, birimsel (modüler) ve etkileşimli yüksek seviyeli bir programlama dilidir.[4]\r\n\r\nGirintilere dayalı basit sözdizimi, dilin öğrenilmesini ve akılda kalmasını kolaylaştırır. Bu da ona söz diziminin ayrıntıları ile vakit yitirmeden programlama yapılmaya başlanabilen bir dil olma özelliği kazandırır.\r\n\r\nModüler yapısı, sınıf dizgesini (sistem) ve her türlü veri alanı girişini destekler. Hemen hemen her türlü platformda çalışabilir. (Unix, Linux, Mac, Windows, Amiga, Symbian). Python ile sistem programlama, kullanıcı arabirimi programlama, ağ programlama, web programlama, uygulama ve veritabanı yazılımı programlama gibi birçok alanda yazılım geliştirebilirsiniz. Büyük yazılımların hızlı bir şekilde prototiplerinin üretilmesi ve denenmesi gerektiği durumlarda da C ya da C++ gibi dillere tercih edilir.\r\n\r\nPython 1980\'lerin sonunda ABC programlama diline alternatif olarak tasarlanmıştı. Python 2.0, ilk kez 2000 yılında yayınlandı. 2008\'de yayınlanan Python 3.0, dilin önceki versiyonuyla tam uyumlu değildir ve Python 2.x\'te yazılan kodların Python 3.x\'te çalışması için değiştirilmesi gerekmektedir. Python 2 versiyonun resmi geliştirilme süreci, dilin son sürümü olan Python 2.7.x serisi versiyonların ardından 1 Ocak 2020 itibarıyla resmi olarak sona erdi.[5][6] Python 2.x geliştirilme desteğinin sona ermesinin ardından, Python dilinin 3.5.x ve sonraki sürümlerinin geliştirilmesi devam etmektedir.[7]', '2020-07-03 10:20:19'),
(10, 'Go', 'https://dosya.wmaraci.com/nedir/go-programlama-dili.png', 'Go (diğer adıyla golang), Google\'da 2007 yılından itibaren geliştirilmeye başlayan açık kaynak programlama dilidir.[4] Daha çok sistem programlama için tasarlanmış olup, derlenmiş ve statik tipli bir dildir. Kasım 2009\'da çıkmıştır. Go derleyicisi \"gc\", açık kaynak yazılım olarak, Linux, OS X, Windows, bazı BSD ve Unix versiyonları, ve ayrıca 2015\'ten itibaren akıllı telefonlar için geliştirilmiştir.', '2020-07-03 10:34:38');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
