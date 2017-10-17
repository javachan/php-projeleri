<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 9.10.2017
 * Time: 11:11
 */
include "veriTabani/baglan.php"; //Veritabanına bağlanılıyor.
include "sablon/header.php";
include "sablon/body.php";
include "eposta_islemleri/epostaKaydet.php";
include "eposta_islemleri/epostaAra.php";
include "eposta_islemleri/epostaSil.php";

//------------------------------------------------------------------------------------------------------------------------
//Eposta kaydedilme ekranıdır.

$veriKaydedildiMi_cikti = 2; //1 yada 0 haricinde bir rakam olabilir.

if( isset($_GET["kaydedildiMi"]) == true)
{
    $kaydedildiMi = $_GET["kaydedildiMi"];

    if($kaydedildiMi == "true")
    {
        $veriKaydedildiMi_cikti = 1;
    }
    else if($kaydedildiMi == "false")
    {
        $veriKaydedildiMi_cikti = 0;
    }
}

?>

</div>

<? if($veriKaydedildiMi_cikti == 1){
    echo "<div class=\"alert alert-success container\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> BAŞARIYLA KAYDEDİLDİ! </p>
</div>";
}else if($veriKaydedildiMi_cikti == 0)
{
    echo "<div class=\"alert alert-danger container\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> MAİL ADRESİ SİSTEMDE KAYITLIDIR! </p>
</div>";
}

//------------------------------------------------------------------------------------------------------------------------
//Kullanıcı arama ekranıdır.

if( isset($_GET["adSoyad"]) == true)
{
    echo "
    <div class=\"panel panel-info container\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\" style=\"text-align: center; font-size: large\">Kullanıcı Bilgileri</div>

    <!-- Table -->
    <table class=\"table\">
    <tr>
    <td style='text-align: center;color:red';>AD SOYAD</td>
    <td style='text-align: center;color:red';>EMAİL</td>
    <td style='text-align: center;color:red';>TELEFON</td>
    </tr>"
    ;

    $adSoyad = $_GET["adSoyad"];

    $adSoyad_listele = $veritabani->query("SELECT * FROM MSKU", PDO::FETCH_ASSOC);

    foreach ($adSoyad_listele as $adSoyad_varMi)
    {
        //echo $adSoyad_varMi['adSoyad'];

        $adSoyad_buldum = stristr($adSoyad_varMi['adSoyad'] , $adSoyad, false); //stristr büyük küçük harfe dikkat etmez.

        $epostaListele = $veritabani->query("SELECT * FROM MSKU WHERE adSoyad='$adSoyad_buldum'" , PDO::FETCH_ASSOC);

        foreach ($epostaListele as $eposta_varMi)
        {
            echo "<tr>";
            $eposta_var = $eposta_varMi['email'];
            $telefon_var = $eposta_varMi['telNo'];
            echo "<td style='text-align: center'>$adSoyad_buldum</td>";
            echo " <td style='text-align: center'>$eposta_var</td>";
            echo " <td style='text-align: center'>$telefon_var</td>";
            echo "</tr>";
        }
    }
}
echo "</table></div>";

//------------------------------------------------------------------------------------------------------------------------
//Eposta silme ekranıdır.

$epostaSilindi_miCikti = 2; //1 yada 0 haricinde bir rakam olabilir.

if( isset($_GET["emailSil"]) == true)
{
    $epostaSilindi_mi = $_GET["emailSil"];

    if($epostaSilindi_mi == "true")
    {
        $epostaSilindi_miCikti = 1;
    }
    else if($epostaSilindi_mi == "false")
    {
        $epostaSilindi_miCikti = 0;
    }
}

    if($epostaSilindi_miCikti == 1){
    echo "<div class=\"alert alert-success container\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> BAŞARIYLA SİLİNDİ! </p>
</div>";
}else if($epostaSilindi_miCikti == 0)
{
    echo "<div class=\"alert alert-danger container\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> MAİL ADRESİ SİSTEMDE KAYITLI DEĞİLDİR! </p>
</div>";
}


