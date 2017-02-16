-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 09 Oca 2017, 07:49:58
-- Sunucu sürümü: 5.7.16-0ubuntu0.16.04.1
-- PHP Sürümü: 5.6.28-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Tablo için tablo yapısı `portfoy`
--

CREATE TABLE `portfoy` (
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `etiketler` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda2` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `portfoy`
--

INSERT INTO `portfoy` (`baslik`, `etiketler`, `hakkimda`, `hakkimda2`) VALUES
('BSM ÖĞRENCİSİ \r\n', 'Web Geliştirici - Grafik Tasarım - Masaüstü Yazılımı \r\n', 'Bilişim Sistemleri Mühendisliği 2.Sınıf öğrencisiyim ve Fakültemizde kurulan Bilim ve Teknoloji Topluluğunun eş başkanıyım. Bir mühendis adayı olarak her zaman kendimi geliştirmek için çalışıyorum ve bu yol üzerinde mesafe kat ediyorum.', 'Bilgisayar alanı üzerinde çok fazla programla diliyle çalıştım fakat şuan için PHP, C Programlama, Python ve C# üzerinde projelerimi geliştiriyorum. En büyük hedefim ise: Teknolojinin bir anka kuşu gibi tekrar doğması fakat bu sefer bizim elimizde hayat bulmasıdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projelerim`
--

CREATE TABLE `projelerim` (
  `projeID` int(11) NOT NULL,
  `projeKatalogu` text COLLATE utf8_turkish_ci NOT NULL,
  `projeAdi` text COLLATE utf8_turkish_ci NOT NULL,
  `proje_olusturmaTarihi` text COLLATE utf8_turkish_ci NOT NULL,
  `projeHakkinda` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='Burada oluşturduğum projelerin bilgilerini tutacağım.';

--
-- Tablo döküm verisi `projelerim`
--

INSERT INTO `projelerim` (`projeID`, `projeKatalogu`, `projeAdi`, `proje_olusturmaTarihi`, `projeHakkinda`) VALUES
(1, 'Arduino', 'Çizgi İzleyen Robot', '05-02-2016', 'https://github.com/AhmetEkti/Arduino-Projeleri/tree/master/Cizgi%20%C4%B0zleyen%20Robot'),
(2, 'Arduino', 'Vakit Ölçer', '09-09-2016', 'https://github.com/AhmetEkti/Arduino-Projeleri/tree/master/zamanlayici-v0.1'),
(3, 'PHP', 'Öğrenci Bilgi Sistemi', '20-08-2016', 'https://github.com/AhmetEkti/php-projeleri/tree/master/Bilgi%20sistemi'),
(4, 'C#', 'AGAR.İO ', '28-12-2016', 'https://github.com/AhmetEkti/CSharp-projeleri/tree/master/Ahmet%20Ekti%20-%20AGAR.%C4%B0O'),
(5, 'C', 'Banka Otomasyonu', '20-11-2015', 'https://github.com/AhmetEkti/C-Projelerim/tree/master/Banka%20Otomasyonu'),
(6, 'C', 'Oyun Haritası', '22-10-2016', 'https://github.com/AhmetEkti/C-Projelerim/tree/master/Oyun%20Haritas%C4%B1'),
(7, 'C', 'Kuyruk ve Yığın', '22-11-2016', 'https://github.com/AhmetEkti/C-Projelerim/tree/master/VeriYap%C4%B1lar%C4%B12'),
(8, 'Python', 'Kütüphane Otomasyonu', '21-05-2016', 'https://github.com/AhmetEkti/Visual-Design');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `projelerim`
--
ALTER TABLE `projelerim`
  ADD PRIMARY KEY (`projeID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `projelerim`
--
ALTER TABLE `projelerim`
  MODIFY `projeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
