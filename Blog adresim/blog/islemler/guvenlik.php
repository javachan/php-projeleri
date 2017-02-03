<?php


$gelen_id=$_GET['yazi'];

if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/oku.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    if (ctype_digit ($gelen_id)) //Anasayfaya giriş yapmamasının nedenidir.
    {
        foreach ($yazilar as $yazi)
        {
            //gelen id değerine uygun bir karşılık varsa suzgeç başarıyla çalışmıştır.
            if($gelen_id == $yazi["id"])
            {
                $okunacakYazi = $db->query("SELECT * FROM yazilar where id='$gelen_id'");
                $okunacakYazi = $okunacakYazi ->fetch(PDO::FETCH_ASSOC);

                $suzgecYazi = "temiz"; //O sayı var mı diye kontrol etsin yoksa;
            }
        }

        if($suzgecYazi != "temiz")
        {
            //Ana sayfaya aktarsın.
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
            exit();
        }
    }
    else //Süçgeçten geçemezse ana sayfaya yönlendirilsin.
    {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
        exit();
    }

}
$yazilar = $db->query('SELECT * FROM yazilar'); //İnternet sitesinin içeriği çekilir.

$kategoriAdi = $_GET["id"]; //Seçilen kategoride sayfa getirmek için gereklidir.


if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/kategoriler.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    foreach ($kategoriler as $yazi)
    {
        if($kategoriAdi == $yazi["kategoriAdi"])
        {
            $sayfaNo = $_GET["sayfaNo"];
            $makaleSayisi =0;
            $makaleDizisi = array();

            if($sayfaNo == NULL)
            {
                $sayfaNo = "1";
            }

            if (ctype_digit($sayfaNo)) //Anasayfaya giriş yapmamasının nedenidir.
            {
                $kategoriYazilari = $db->query("SELECT * FROM yazilar where kategoriAdi='$kategoriAdi' ORDER BY id DESC ");

                foreach ($kategoriYazilari as $kategoriYazisi)
                {
                    $makaleSayisi++;
                    echo $kategoriYazisi["id"];
                    array_push($makaleDizisi,$kategoriYazisi["id"]);
                }

                if($sayfaNo <= $makaleSayisi/5+1)
                {
                    $suzgecKategori= "temiz"; //O sayı var mı diye kontrol etsin yoksa;
                }

                if($suzgecKategori != "temiz")
                {
                    //Ana sayfaya aktarsın.
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
                    exit();
                }
            }
            else
            {
                //Ana sayfaya aktarsın.
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
                exit();
            }

            $suzgecKategori = "temiz"; //Kategori Kontrolünü yapıyoruz eğer gelen veri temizse geçebilir.
        }
    }
    if($suzgecKategori != "temiz") ////Süçgeçten geçemezse ana sayfaya yönlendirilsin.
    {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
        exit();
    }
}

$kategoriler = $db->query('SELECT * FROM kategoriler'); //İşlem yapıldıktan sonra çağırmak gerekiyor.



$enson_yazi = $db->query("SELECT MAX(id) FROM yazilar"); //En son yazılan yazının numarasını bulur.
$enson_yazi = $enson_yazi ->fetch(PDO::FETCH_ASSOC);

foreach ($enson_yazi as $ensonYazi) //En son yazının id değerini öğrenmek için yapıyoruz.
{
}

$sayfaNo = $_GET["sayfaNo"];
$yazilar = $db->query('SELECT * FROM yazilar'); //İnternet sitesinin içeriği çekilir.



if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/index.php") //URL: kategoriler üzerindeysek işlem yapsın.
{

    if($sayfaNo != NULL)
    {

        if (ctype_digit ($sayfaNo)) //Anasayfaya giriş yapmamasının nedenidir.
        {
            foreach ($yazilar as $yazi)
            {

                if($sayfaNo <= $ensonYazi/5+1) //Basılan sayfa numarası id değeri olan en büyük yazının 5e bölümünden 1 fazlasından küçük olmalıdır.
                {
                    $yazilar = $db->prepare("SELECT * FROM yazilar WHERE id > ? and id <= ? ORDER BY id DESC ");

                    $yazilar->execute(array( $ensonYazi - ($_GET["sayfaNo"]*5), $ensonYazi - $_GET["sayfaNo"]*5+5 ));
                    $suzgecSayfa = "temiz";
                }
                else
                {
                    //Ana sayfaya aktarsın.
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
                    exit();
                }
            }
            if($suzgecSayfa  != "temiz")
            {
                //Ana sayfaya aktarsın.
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
                exit();
            }
        }
        else
        {
            //Ana sayfaya aktarsın.
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/internetSitem/blog\">";
            exit();
        }
    }
    else
    {
        $yazilar = $db->prepare("SELECT * FROM yazilar WHERE id > ? and id <= ? ORDER BY id DESC");

        $yazilar->execute(array( $ensonYazi-5, $ensonYazi));

    }
}

?>