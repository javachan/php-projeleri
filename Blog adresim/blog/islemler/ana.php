<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 12.01.2017
 * Time: 06:16
 */
$basliklar = $db->query('SELECT * FROM basliklar'); //İnternet sitesinin başlıklarının çekildiği alandır.
$yazilar = $db->query('SELECT * FROM yazilar'); //İnternet sitesinin içeriği çekilir.
$gununSozu = $db->query('SELECT * FROM gununSozu'); //İnternet sitesinin günün sözü çekilir.
$kategoriler = $db->query('SELECT * FROM kategoriler'); //İnternet sitesinin kategorisi çekilir.

/*
foreach($basliklar as $baslik)
{
//Daha kullanılmıyor.
}
*/
?>