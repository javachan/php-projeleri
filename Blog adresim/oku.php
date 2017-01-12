<?php

include "islemler/baglan.php";

$gelen_id=$_GET['yazi'];
$basliklar = $db->query('SELECT * FROM basliklar');
$gununSozu = $db->query('SELECT * FROM gununSozu');
$kategoriler = $db->query('SELECT * FROM kategoriler');

foreach($basliklar as $baslik)
{

}


$yazilar = $db->query("SELECT * FROM yazilar where id='$gelen_id'");

$yazilar = $yazilar ->fetch(PDO::FETCH_ASSOC);


if($gelen_id < 1)
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else if($gelen_id != $yazilar['id'])
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else if(is_numeric($gelen_id) != TRUE)
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else
{

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ahmet Ekti - Bilgi Aşktır.</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="styl    esheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Navigation -->

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                <a href="index.php">Ahmet Ekti </a> <small><p style="font-style: italic">Bilgi Aşktır.</p></small>
            </h1>

            <!-- First Blog Post -->
            <?
                echo "<form method=\"post\" action='oku.php'>";
                echo "<h2>";
                echo $yazilar['baslik'];
                echo "</h2>";
                echo "<p class=\"lead\">";
                echo "Yazar: <a href='https://www.linkedin.com/in/ahmetekti' target='_blank'>".$yazilar["yazar"]."</a>";
                echo "</p>";
                echo "<p><span class=\"glyphicon glyphicon-time\"></span> Yazının Tarih: ".$yazi["tarih"]."</p>";
                echo "<hr>";
                echo "<img class=\"img-responsive\" src='".$yazilar["gorsel"]."' alt=\"\">";
                echo "<hr>";
                echo "<p>".$yazilar["icerik"]."</p>";
                echo "<hr>";
                echo "</form>";
            ?>



            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="oku.php?yazi=<?=$yazilar['id']-1?>">&larr; Önceki Sayfa</a>
                </li>
                <li class="next">
                    <a href="oku.php?yazi=<?=$yazilar['id']+1?>">Sonraki Sayfa &rarr;</a>

                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <div class="saat">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <object width="200" height="200" data="http://www.webkodu.com/saat-takvim/wk-27.swf" type="application/x-shockwave-flash">
                    <param value="http://www.webkodu.com/saat-takvim/wk-27.swf" name="movie">
                    <param value="Transparent" name="WMode">
                </object>
            </div>

            <!-- Blog Categories Well -->
            <div class="well bg-success">
                <h4 style="text-align: center">Blog Kategorilerim</h4>
                <div class="row">
                    <div class="kategoriler">
                        <ul class="list-unstyled ">
                            <?
                            foreach ($kategoriler as $kategori)
                            {
                                echo "<hr>";
                                echo"<li class='show' style='text-align: center;'><a style='color: slateblue' href=\"#\">".$kategori["kategoriAdi"].' - ('.$kategori["icerikSayisi"].' adet yazı)'."</a></li>";
                            }
                            ?>
                        </ul>
                    </div>

                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Günün Sözü</h4>
                <p>Ağacı yetiştirmek zor; ama tohumu ekmek kolaydır. En kolayıyla başlamadığımız sürece en zorunu yapmamız imkansızdır.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Bu internet sitesinin kodlarına <a href="http://www.github.com/ahmetekti" target="_blank">github</a> hesabımdan erişebilirsiniz.</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
