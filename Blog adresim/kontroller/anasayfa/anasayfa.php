<?php


//Atılan içerikler.
foreach($yazilar as $yazi)
{
    echo "<form method=\"get\" action='oku.php'>";
    echo "<h2>";
    echo "<a href='oku.php?yazi=".$yazi['id']."'>".$yazi['baslik']."</a>";
    echo "</h2>";
    echo "<p class=\"lead\">";
    echo "Yazar: <a href='https://www.linkedin.com/in/ahmetekti' target='_blank'>".$yazi["yazar"]."</a>";
    echo "</p>";
    echo "<p><span class=\"glyphicon glyphicon-time\"></span> Yazının Tarih: ".$yazi["tarih"]."</p>";
    echo "<hr>";
    echo "<img class=\"img-responsive\" src='".$yazi["gorsel"]."' alt=\"\">";
    echo "<hr>";
    echo "<p>".$yazi["kisa_icerik"]."</p>";
    echo "<input type=\"hidden\" name = 'yazi' value='".$yazi['id']."'>";
    echo "<a href='oku.php?yazi=".$yazi['id']."' class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Devamını oku</a>";
    echo "<hr>";
    echo "</form>";
}
?>
<!-- Anasayfada sayfa değiştirilen yerdir. -->

<div class="container">
    <div class="col-md-8" style="text-align: center;">
        <ul class="pagination pagination-lg">
            <?
            $sayfa_sayisi = 0;
            $yazilar = $db->query('SELECT * FROM yazilar'); //İnternet sitesinin içeriği çekilir.
            foreach ($yazilar as $yazi)
            {
                if($yazi["id"] % 5 == 1)
                {
                    $sayfa_sayisi++;
                    echo "<li><a href='index.php?sayfaNo=".$sayfa_sayisi."'>".$sayfa_sayisi."</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>
<br>
