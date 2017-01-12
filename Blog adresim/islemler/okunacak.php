<?php

$gelen_id=$_GET['yazi'];

$okunacakYazi = $db->query("SELECT * FROM yazilar where id='$gelen_id'");

$okunacakYazi = $okunacakYazi ->fetch(PDO::FETCH_ASSOC);

?>