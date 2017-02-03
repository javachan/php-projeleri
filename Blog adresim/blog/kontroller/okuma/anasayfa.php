<?
echo "<form method=\"post\" action='oku.php'>";
echo "<h2>";
echo $okunacakYazi['baslik'];
echo "</h2>";
echo "<p class=\"lead\">";
echo "Yazar: <a href='https://www.linkedin.com/in/ahmetekti' target='_blank'>".$okunacakYazi["yazar"]."</a>";
echo "</p>";
echo "<p><span class=\"glyphicon glyphicon-time\"></span> Yazının Tarih: ".$okunacakYazi["tarih"]."</p>";
echo "<hr>";
echo "<img class=\"img-responsive\" src='".$okunacakYazi["gorsel"]."' alt=\"\">";
echo "<hr>";
echo "<p>".$okunacakYazi["icerik"]."</p>";
echo "<hr>";
echo "</form>";
?>

<!-- Pager -->
<ul class="pager">
    <li class="previous">
       <?

        foreach ($yazilar as $yazi)
        {
            if($gelen_id-1  == $yazi["id"]) //Bir önceki id ye bakar veritabanında var mı diye ?
            {
                echo " <a href=\"oku.php?yazi="; //Eğer varsa butonu oraya koyar.
                echo $okunacakYazi['id']-1;
                echo "\">&larr; Önceki Sayfa</a>";
                echo "    </li>";
            }
        }
        $yazilar = $db->query('SELECT * FROM yazilar');  //Veritabanından tekrar veri çekilir.

        ?>
    <li class="next">
        <?
        foreach ($yazilar as $yazi)
        {
            if($gelen_id+1  == $yazi["id"])  //Bir sonraki id ye bakar veritabanında var mı diye ?
            {
                echo " <a href=\"oku.php?yazi="; //Eğer varsa butonu oraya koyar.
                echo $okunacakYazi['id']+1;
                echo "\">Sonraki Sayfa &rarr; </a>";
                echo "    </li>";
            }
        }
        $yazilar = $db->query('SELECT * FROM yazilar'); //Veritabanından tekrar veri çekilir.
        ?>
    </li>
</ul>

