-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 Şub 2017, 18:14:30
-- Sunucu sürümü: 5.7.17-0ubuntu0.16.04.1
-- PHP Sürümü: 5.6.28-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `icerik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basliklar`
--

CREATE TABLE `basliklar` (
  `anaBaslik` text NOT NULL,
  `yanBaslik` text NOT NULL,
  `altBaslik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Baslık için oluşturulmuştur.';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gununSozu`
--

CREATE TABLE `gununSozu` (
  `gununSozu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Günün sözünün bulunduğu alandır.';

--
-- Tablo döküm verisi `gununSozu`
--

INSERT INTO `gununSozu` (`gununSozu`) VALUES
('Ağacı yetiştirmek zor; ama tohumu ekmek kolaydır. En kolayıyla başlamadığımız sürece en zorunu yapmamız imkansızdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategoriAdi` text NOT NULL,
  `icerikSayisi` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Burada oluşturulan kategorilerin isimleri yazacaktır.';

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategoriAdi`, `icerikSayisi`, `id`) VALUES
('Kişisel Gelişim', 0, 1),
('Güncel Olaylar', 0, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `baslik` text NOT NULL,
  `yazar` text NOT NULL,
  `tarih` text NOT NULL,
  `icerik` text NOT NULL,
  `gorsel` text NOT NULL,
  `kisa_icerik` text NOT NULL,
  `id` int(11) NOT NULL,
  `kategoriAdi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Burası sayfada bulunan içeriklerin yeri olacaktır.';

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`baslik`, `yazar`, `tarih`, `icerik`, `gorsel`, `kisa_icerik`, `id`, `kategoriAdi`) VALUES
('Hayırlı Olsun', 'Ahmet Ekti', '11-01-2017', 'Bazı karakterler HTML dilinde çeşitli anlamlara gelebilmektedir. Örneğin (<) karakteri bir HTML kodunun başladığını anlatır ve bunu düz metin kısmında kullanmak kodlamalarda soruna yol açabilir. Böyle durumlarda (&) ya da (#) ile başlayan ve (;) ile biten bazı özel kelimelerden yararlanarak özel karakterleri kullanmalıyız.\r\n\r\nKaynak koduna baktığımızda bunlar &lt; şeklinde görülmektedir. Fakat tarayıcının (<) işaretini oluşturduğunu görürüz.\r\n\r\nGözardı Edilemez Boşluklar\r\n\r\nNormalde HTML dilinde boşluk ( ) karakterleri bazı özel durumlar hariç sayılmaz. Yani 10 tane boşluk kullanmış da olsanız bu tarayıcı tarafından boşluk yokmuş gibi algılanır. Bu durumu da özel karakterlerle halledebiliriz. Böyle bir durumda boşluk bırakmak için kullanacağımız metin (&nbsp;)\'dir. Aşağıda iki farklı örnekte birinde 10 tane boşluk karakteri, diğerinde 10 tane &nbsp; kullanıldı.\r\n', 'http://placehold.it/900x300', 'ahmet ekti', 1, 'Güncel Olaylar'),
('asdasd', 'addsadsd', '16-01-2017', 'asdadasdasasdasdasdasda', 'http://placehold.it/900x300', 'aa', 2, 'Kişisel Gelişim'),
('Ahmet Ekti ve Ece Ekiz', 'Ece Ekiz', '14-01-2017', 'Bu listede  11 ocak sabah itibarıyla  kurslara kayıt olmuş, tercih yapmış kişiler vardır.\r\n2492 kişi kurslara kayıt oldu bunun 777 kadın, 1715 erkek idi. Tercih sayılarını, başvuruların şehirlere ve üniversitelere göre dağılımını  ab.org.tr/ab17/  adresinde bulabilirsiniz\r\n\r\nHer hangi bir nedenle, kursa katılamayacaksınız, lütfen\r\ni) sisteme girerek tercihlerinizi  şptal ediniz.\r\nii) kursların şüilk egitmenine mesaj atınız\r\niii) kayit@ab.org.tr y bu yönde bşr mesaj atınız.,Bu 3 işi de lutfen yapınız. aksi halde bir kontenjanın boşa harcanmasına neden olursunuz.\r\n\r\nBir sonraki  Akademik Bilişim ve Linux Yaz Kampında  sisteme yeniden kayıt olmayacaksınız. kayıt oldugunuz  e-posta  adresi sizin kullanıcı adınızdır aynı zamanda. e-postadan bir farki var, kucuk harf büyük harf kullanıcı kimliğinde fark eder.  Kayıt oldugunuz kullanıcı adını lütfen saklayınız. Parola hatırlatma servisi var ama kullanıcı hatırlatam servisi  yok. Pek çok kişi yeniden kayıt olmaya kalktı ve bu TCKimlikle başka kayıt var mesajı aldılar.\r\n', '', 'asdasddasasdadasda', 3, 'Kişisel Gelişim'),
('Ahmet Ekti ve Ece Ekiz', 'Ece Ekiz', '14-01-2017', 'Bu listede  11 ocak sabah itibarıyla  kurslara kayıt olmuş, tercih yapmış kişiler vardır.\r\n2492 kişi kurslara kayıt oldu bunun 777 kadın, 1715 erkek idi. Tercih sayılarını, başvuruların şehirlere ve üniversitelere göre dağılımını  ab.org.tr/ab17/  adresinde bulabilirsiniz\r\n\r\nHer hangi bir nedenle, kursa katılamayacaksınız, lütfen\r\ni) sisteme girerek tercihlerinizi  şptal ediniz.\r\nii) kursların şüilk egitmenine mesaj atınız\r\niii) kayit@ab.org.tr y bu yönde bşr mesaj atınız.,Bu 3 işi de lutfen yapınız. aksi halde bir kontenjanın boşa harcanmasına neden olursunuz.\r\n\r\nBir sonraki  Akademik Bilişim ve Linux Yaz Kampında  sisteme yeniden kayıt olmayacaksınız. kayıt oldugunuz  e-posta  adresi sizin kullanıcı adınızdır aynı zamanda. e-postadan bir farki var, kucuk harf büyük harf kullanıcı kimliğinde fark eder.  Kayıt oldugunuz kullanıcı adını lütfen saklayınız. Parola hatırlatma servisi var ama kullanıcı hatırlatam servisi  yok. Pek çok kişi yeniden kayıt olmaya kalktı ve bu TCKimlikle başka kayıt var mesajı aldılar.\r\n', '', 'asdasddasasdadasda', 4, 'Kişisel Gelişim'),
('Deneme', 'Burak Şenol', '01-06-2017', 'Bu listede  11 ocak sabah itibarıyla  kurslara kayıt olmuş, tercih yapmış kişiler vardır.\r\n2492 kişi kurslara kayıt oldu bunun 777 kadın, 1715 erkek idi. Tercih sayılarını, başvuruların şehirlere ve üniversitelere göre dağılımını  ab.org.tr/ab17/  adresinde bulabilirsiniz\r\n\r\nHer hangi bir nedenle, kursa katılamayacaksınız, lütfen\r\ni) sisteme girerek tercihlerinizi  şptal ediniz.\r\nii) kursların şüilk egitmenine mesaj atınız\r\niii) kayit@ab.org.tr y bu yönde bşr mesaj atınız.,Bu 3 işi de lutfen yapınız. aksi halde bir kontenjanın boşa harcanmasına neden olursunuz.\r\n\r\nBir sonraki  Akademik Bilişim ve Linux Yaz Kampında  sisteme yeniden kayıt olmayacaksınız. kayıt oldugunuz  e-posta  adresi sizin kullanıcı adınızdır aynı zamanda. e-postadan bir farki var, kucuk harf büyük harf kullanıcı kimliğinde fark eder.  Kayıt oldugunuz kullanıcı adını lütfen saklayınız. Parola hatırlatma servisi var ama kullanıcı hatırlatam servisi  yok. Pek çok kişi yeniden kayıt olmaya kalktı ve bu TCKimlikle başka kayıt var mesajı aldılar.\r\n', '', 'Deneme 2', 5, 'Güncel Olaylar'),
('Deneme', 'Burak Şenol', '01-06-2017', 'Bu listede  11 ocak sabah itibarıyla  kurslara kayıt olmuş, tercih yapmış kişiler vardır.\r\n2492 kişi kurslara kayıt oldu bunun 777 kadın, 1715 erkek idi. Tercih sayılarını, başvuruların şehirlere ve üniversitelere göre dağılımını  ab.org.tr/ab17/  adresinde bulabilirsiniz\r\n\r\nHer hangi bir nedenle, kursa katılamayacaksınız, lütfen\r\ni) sisteme girerek tercihlerinizi  şptal ediniz.\r\nii) kursların şüilk egitmenine mesaj atınız\r\niii) kayit@ab.org.tr y bu yönde bşr mesaj atınız.,Bu 3 işi de lutfen yapınız. aksi halde bir kontenjanın boşa harcanmasına neden olursunuz.\r\n\r\nBir sonraki  Akademik Bilişim ve Linux Yaz Kampında  sisteme yeniden kayıt olmayacaksınız. kayıt oldugunuz  e-posta  adresi sizin kullanıcı adınızdır aynı zamanda. e-postadan bir farki var, kucuk harf büyük harf kullanıcı kimliğinde fark eder.  Kayıt oldugunuz kullanıcı adını lütfen saklayınız. Parola hatırlatma servisi var ama kullanıcı hatırlatam servisi  yok. Pek çok kişi yeniden kayıt olmaya kalktı ve bu TCKimlikle başka kayıt var mesajı aldılar.\r\n', '', 'Deneme 2', 6, 'Güncel Olaylar'),
('deneme2', 'deneme2', 'deneme2', 'deneme2', '', 'deneme2', 7, 'Kişisel Gelişim'),
('Deneme 3', 'Deneme 3', 'Deneme 3', 'Deneme 3', '', 'Deneme 3', 8, 'Kişisel Gelişim'),
('deneme2', 'deneme2', 'deneme2', 'deneme2', '', 'deneme2', 9, 'Kişisel Gelişim'),
('Deneme 3', 'Deneme 3', 'Deneme 3', 'Deneme 3', '', 'Deneme 3', 10, 'Kişisel Gelişim'),
('Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 11, 'Deneme 4'),
('Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 'Deneme 4', 12, 'Deneme 4');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
