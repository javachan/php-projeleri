<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 10.10.2017
 * Time: 15:48
 */

include "../veriTabani/baglan.php";

$adSoyad = $_GET['adSoyad'];
$email = $_GET['eMail']."@gmail.com";
$telNo = "";

$ekleSorgu = $veritabani->prepare("INSERT INTO MSKU SET
adSoyad = ?,
email = ?,
telNo = ?");
$kaydet = $ekleSorgu->execute(array(
    $adSoyad,$email,$telNo
));
if ( $kaydet ){
    $son_id = $veritabani->lastInsertId();
    echo "Oldu";
}