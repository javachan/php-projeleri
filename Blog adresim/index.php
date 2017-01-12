<?

if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/index.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    include "islemler/baglan.php";

    include "bilesenler/bas.php";

    include "bilesenler/ustmenu.php";

    include "kontroller/anasayfa/anasayfa.php";

    include "bilesenler/sagmenu.php";

    include "bilesenler/altmenu.php";
}




?>




