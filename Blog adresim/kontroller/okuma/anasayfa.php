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
        <a href="oku.php?yazi=<?=$okunacakYazi['id']-1?>">&larr; Önceki Sayfa</a>
    </li>
    <li class="next">
        <a href="oku.php?yazi=<?=$okunacakYazi['id']+1?>">Sonraki Sayfa &rarr;</a>

    </li>
</ul>

