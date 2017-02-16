<?
foreach ($kategoriler as $kategori)
{
    echo "<hr>";
    echo"<li class='show' style='text-align: center;'><a style='color: slateblue' href=\"#\">".$kategori["kategoriAdi"].' - ('.$kategori["icerikSayisi"].' adet yazı)'."</a></li>";
}
?>