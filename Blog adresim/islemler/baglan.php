<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=icerik", "root", "123");
    $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

} catch ( PDOException $e )
{
    print $e->getMessage();
}
?>