<?

if($_SERVER['SCRIPT_NAME'] == "/kategoriler.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    include "islemler/baglan.php";

    include "bilesenler/bas.php";

    include "bilesenler/ustmenu.php";

    include "kontroller/kategori/anasayfa.php";

    include "bilesenler/sagmenu.php";

    include "bilesenler/altmenu.php";
}
?>




