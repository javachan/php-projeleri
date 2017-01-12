<?php

if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/oku.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    include "islemler/baglan.php";

    include "bilesenler/bas.php";

    include "bilesenler/ustmenu.php";

    include "kontroller/okuma/anasayfa.php";

    include "bilesenler/sagmenu.php";

    include "bilesenler/altmenu.php";
}


?>
