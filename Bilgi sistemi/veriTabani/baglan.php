<?

//Veri tabanı sunucusuna bağlan.

//$baglan = mysql_connect("localhost","root",""); //Bilgilerini Gir

$db = new PDO('mysql:host=localhost;dbname=ogrenciBilgi','root');


//$veriTabani = mysql_select_db("ogrenciBilgi",$baglan); //Veritabanını Seç.
//mysql_set_charset("utf8",$baglan); //Karakter kodunu ayarlar.


if(!$db)
{
    die("Veritabanına bağlanılmadı.");
}

?>