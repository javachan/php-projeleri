<?php

$kategoriAdi = $_GET["id"];
$kategoriYazilari = $db->query("SELECT * FROM yazilar where kategoriAdi='$kategoriAdi'");

?>