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
$kategoriYazilari = $db->query("SELECT * FROM yazilar where kategoriAdi='$kategoriAdi'");

if($_SERVER['SCRIPT_NAME'] == "/internetSitem/blog/kategoriler.php") //URL: kategoriler üzerindeysek işlem yapsın.
{
    foreach ($kategoriler as $yazi)
    {
        if($kategoriAdi == $yazi["kategoriAdi"])
        {
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



?>