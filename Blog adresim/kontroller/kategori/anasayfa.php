<?php


if($sayfaNo == NULL)
{
    $sayfaNo = "1";
}

for($basla = $sayfaNo*5-5;$basla<$sayfaNo*5;$basla++)
{
    if($makaleDizisi[$basla] != NULL)
    {
        $gosterilecekMakale = $db->query("SELECT * FROM yazilar where id='$makaleDizisi[$basla]'");
        $gosterilecekMakale = $gosterilecekMakale ->fetch(PDO::FETCH_ASSOC);

        echo "<form method=\"get\" action='oku.php'>";
        echo "<h2>";
        echo "<a href='oku.php?yazi=".$gosterilecekMakale['id']."'>".$gosterilecekMakale['baslik']."</a>";
        echo "</h2>";
        echo "<p class=\"lead\">";
        echo "Yazar: <a href='https://www.linkedin.com/in/ahmetekti' target='_blank'>".$gosterilecekMakale["yazar"]."</a>";
        echo "</p>";
        echo "<p><span class=\"glyphicon glyphicon-time\"></span> Yazının Tarih: ".$gosterilecekMakale["tarih"]."</p>";
        echo "<hr>";
        echo "<img class=\"img-responsive\" src='".$gosterilecekMakale["gorsel"]."' alt=\"\">";

        if($gosterilecekMakale["gorsel"] != NULL) //Görüntü kirliliği olmaması için böyle yapıyoruz.
        {
            echo "<hr>";
        }

        echo "<p>".$gosterilecekMakale["kisa_icerik"]."</p>";
        echo "<input type=\"hidden\" name = 'yazi' value='".$gosterilecekMakale['id']."'>";
        echo "<a href='oku.php?yazi=".$gosterilecekMakale['id']."' class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Devamını oku</a>";
        echo "<hr>";
        echo "</form>";
    }
}

?>
<!-- Anasayfada sayfa değiştirilen yerdir. -->

<div class="container">
    <div class="col-md-8" style="text-align: center;">
        <ul class="pagination pagination-lg">
            <?
            $sayfa_sayisi = 0;
            $icerik_sayisi = 0;
            $kategoriYazilari = $db->query("SELECT * FROM yazilar where kategoriAdi='$kategoriAdi'");

            foreach ($kategoriYazilari as $kategoriYazisi)
            {
                $icerik_sayisi++;

                if($icerik_sayisi % 5 == 1)
                {
                    $sayfa_sayisi++;
                    echo "<li><a href='kategoriler.php?id=".$kategoriAdi."&sayfaNo=".$sayfa_sayisi."'>".$sayfa_sayisi."</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>
<br>
