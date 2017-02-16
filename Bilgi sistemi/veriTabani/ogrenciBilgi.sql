-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 30 Ağu 2016, 19:36:53
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrenciBilgi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL COMMENT 'Sabit anahtar',
  `kullanici_adi` varchar(12) NOT NULL,
  `kullanici_sifresi` varchar(12) NOT NULL,
  `kullanici_yetkisi` varchar(20) NOT NULL COMMENT 'Yetkileri vardır'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Burası admin panelidir.';

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kullanici_adi`, `kullanici_sifresi`, `kullanici_yetkisi`) VALUES
(6, 'Ahmet', 'ekti', 'Yonetici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `duyuru_id` int(11) NOT NULL,
  `duyuru_baslik` varchar(200) CHARACTER SET utf8 NOT NULL,
  `duyuru_icerik` text CHARACTER SET utf8 NOT NULL,
  `duyuru_yazar` varchar(70) CHARACTER SET utf8 NOT NULL,
  `duyuru_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Burası duyurular kısmının bulunduğu alandır.';

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`duyuru_id`, `duyuru_baslik`, `duyuru_icerik`, `duyuru_yazar`, `duyuru_tarih`) VALUES
(1, 'Yükseköğretim Denetleme Kurulu Başkanlığında Görev Değişimi Gerçekleşti', 'Yükseköğretim Denetleme Kurulu Başkanlığına vekaleten atanan Prof. Dr. Giyasettin Baydaş görevine başladı.\r\nBilindiği üzere sağlık nedeniyle Yükseköğretim Denetleme Kurulu Başkanlığından ayrılan Prof. Dr. Ömer Anayurt''un yerine Prof. Dr. Giyasettin Baydaş vekaleten atanmıştı.\r\nProf. Dr. Ömer Anayurt''un Yükseköğretim Denetleme Kurulu üyeliği devam etmektedir.', 'Ahmet Ekti', '2016-08-23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciBilgileri`
--

CREATE TABLE `ogrenciBilgileri` (
  `ogrenci_id` int(11) NOT NULL,
  `ogrenci_adi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_soyadi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `ogrenci_dogumYili` date NOT NULL,
  `ogrenci_kayitYili` date NOT NULL,
  `ogrenci_mezunYili` date NOT NULL,
  `ogrenci_donemi` int(11) NOT NULL,
  `ogrenci_bolumu` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Burada öğrenci hakkındaki bilgiler bulunmaktadır.';

--
-- Tablo döküm verisi `ogrenciBilgileri`
--

INSERT INTO `ogrenciBilgileri` (`ogrenci_id`, `ogrenci_adi`, `ogrenci_soyadi`, `ogrenci_dogumYili`, `ogrenci_kayitYili`, `ogrenci_mezunYili`, `ogrenci_donemi`, `ogrenci_bolumu`) VALUES
(1, 'Ahmet', 'Ekti', '1996-07-13', '2015-09-05', '0000-00-00', 3, 'BSM'),
(3, 'Ece', 'Ekiz', '1996-11-25', '2015-09-05', '2019-06-05', 8, 'Diyetisyen');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`duyuru_id`);

--
-- Tablo için indeksler `ogrenciBilgileri`
--
ALTER TABLE `ogrenciBilgileri`
  ADD PRIMARY KEY (`ogrenci_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Sabit anahtar', AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `duyuru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenciBilgileri`
--
ALTER TABLE `ogrenciBilgileri`
  MODIFY `ogrenci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
