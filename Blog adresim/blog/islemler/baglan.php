<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=icerik", "root", "123");
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

    include "ana.php";

    include "guvenlik.php";

} catch ( PDOException $e )
{
    print $e->getMessage();
}
?>