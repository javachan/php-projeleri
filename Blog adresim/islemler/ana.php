<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 12.01.2017
 * Time: 06:16
 */
$basliklar = $db->query('SELECT * FROM basliklar');
foreach($basliklar as $baslik)
{

}
$yazilar = $db->query('SELECT * FROM yazilar');
$gununSozu = $db->query('SELECT * FROM gununSozu');
$kategoriler = $db->query('SELECT * FROM kategoriler');

?>