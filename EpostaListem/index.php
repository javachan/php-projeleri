<?include "sablon/header.php"; //Header eklendi.?>

    <?
        include "sablon/body.php"; //Gövdedeki menüyü ekledik.
    ?>
</html>

<?php

/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 5.10.2017
 * Time: 15:59
 */
include "veriTabani/baglan.php";

$sorguListele = $veritabani->query("SELECT * FROM MSKU", PDO::FETCH_ASSOC);

$toplamKayitli = 0;
foreach ($sorguListele as $veri)
{
  $toplamKayitli++;
}

echo "<div class=\"toplamEposta\"> <div class=\"alert alert-warning\" role=\"alert\">
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center;color: darkblue;font-style: italic\"> TOPLAM KAYITLI EPOSTA ADRESİ: ".$toplamKayitli." ADETTİR.</p>
</div></div>";