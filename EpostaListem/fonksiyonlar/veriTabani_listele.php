<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 12.10.2017
 * Time: 02:03
 */

include "../veriTabani/baglan.php";

$adSoyad = $_GET['adSoyad'];
$email = $_GET['eMail']."@gmail.com";
$telNo = $_GET['telNo'];

$sorguListele = $veritabani->query("SELECT * FROM MSKU", PDO::FETCH_ASSOC);

$hata = 0;

foreach ($sorguListele as $veri)
{
    if($email == $veri['email'])
    {
        $hata = 1;
    }
}

//sonsuz sayfa yüklenmesi.
echo $hata;

if($hata == 0)
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/epostaListem/fonksiyonlar/veriTabani_ekle.php?adSoyad=".$adSoyad."
    &eMail=".$email."&telNo=".$telNo.""."\">";
}
else
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/epostaListem/fonksiyonlar/veriTabani_ekle.php?adSoyad=null&eMail=null&telNo=null\">";
}
