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


<ul class="pagination pagination-lg">
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
</ul>


<!-- Anasayfada sayfa değiştirilen yerdir. -->
<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Önceki Sayfa</a>
    </li>
    <li class="next">
        <a href="#">Sonraki Sayfa &rarr;</a>
    </li>
</ul>
