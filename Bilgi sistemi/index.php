<?php
/*

Öğrencilerin bilgilerinin toplu halde bulunduğu, öğrenci numarası ile talepte bulunulduğu zaman öğrencinin detayının görüntülendiği bir mini sistem

*/
require "functions.php";
girisYapmadiysaGiriseYonlendir();
// öncelikle öğrenci bilgilerinin bulunduğu ve PHP tarafından okunabilecek bir kaynağa ihtiyacımız var
// bu kaynağı students.php içinde bir dizi olarak oluşturduk, işlem yapacağımız sayfaya çekiyoruz

// öğrenci numarasının girilebileceği formu göster
// eğer sayfaya bir öğrenci numarası ile talep geldiyse, bu numarayı formun içinde göster

// öğrenciler dizisini döngüye sokarak öğrencileri listele
// öğrenci listesindeki elemanlara tıklayarak sayfaya bunun detayını istediğine dair talep gönder
// listeye basılan öğrencinin numarası ile sayfaya talep olarak gelen öğrenci numarası birbirine eşitse, listenin bu elemanını "aktif" olarak seç, rengi kendini belli etsin

// Formumuz GET ile çalıştığından, talepler adres çubuğunun sonuna ?student_id={TALEP_EDILEN_OGRENCININ_NUMARASI} şeklinde iletildiğinden, linkleri de böyle verebiliyoruz
// Listedeki her öğrencinin numarası, yine liste içinde bulunuyor

// sayfaya gelirken öğrenci numarası girilmiş mi diye bak
// girildiyse, girilen bu numara öğrenci listesinde var mı diye bak
// bu numara öğrenci listesinde yoksa, böyle bir öğrenci yok diyerek çalışmayı durdur
// detayı bulunan öğrencinin bilgilerini ekrana bas
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Öğrenci Bilgi Sistemi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="stil.css"/>

</head>

<body style="margin-top:2px;">
	<div class="container">
		<div class="menu">
			<?php require_once "header.php"?>
		</div>

		<?php require_once "sorgu.php"?>

		<?php require_once "footer.php"?>

	</div>
</body>
</html>