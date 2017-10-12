
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
    echo "<div class=\"alert alert-success\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> BAŞARIYLA KAYDEDİLDİ! </p>
</div>";
}else if($veriKaydedildiMi_cikti == 0)
{
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Hata:</span>
    <p style=\"text-align: center\"> MAİL ADRESİ SİSTEMDE KAYITLIDIR! </p>
</div>";
}




