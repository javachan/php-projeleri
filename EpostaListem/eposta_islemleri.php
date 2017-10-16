
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

//Kullanıcı arama ekranıdır.
if( isset($_GET["adSoyad"]) == true)
{
    ?>

    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="text-align: center; font-size: large">Kullanıcı Bilgileri</div>

    <!-- Table -->
    <table class="table">
    <tr>
    <td>Ad Soyad</td>
    <td>Email</td>
    </tr>

    <?

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
            echo "<td>$adSoyad_buldum</td>";
            echo "<td>$eposta_var</td>";
            echo "</tr>";
            ?>
<?
        }

    }
}
echo "    </table>
            </div>";

