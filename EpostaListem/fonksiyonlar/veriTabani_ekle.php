<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 10.10.2017
 * Time: 15:48
 */

include "../veriTabani/baglan.php";

$adSoyad = $_GET['adSoyad'];
$email = $_GET['eMail'];
$telNo = $_GET['telNo'];


if($email != "null")
{
    $ekleSorgu = $veritabani->prepare("INSERT INTO MSKU SET
    adSoyad = ?,
    email = ?,
    telNo = ?");
    $kaydet = $ekleSorgu->execute(array(
        $adSoyad,$email,$telNo
    ));
    if ( $kaydet ){
        $son_id = $veritabani->lastInsertId();
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/EpostaListem/eposta_islemleri.php?kaydedildiMi=true\">";
    }
}
else
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/EpostaListem/eposta_islemleri.php?kaydedildiMi=false\">";
}


