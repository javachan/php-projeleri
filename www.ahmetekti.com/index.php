<?php

include "islemler/baglan.php";

$as = $db->query('SELECT * FROM portfoy');
foreach($as as $row)
{

}

$projeler = $db->query('SELECT * FROM projelerim');




?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ahmet Ekti - Kişisel Blog Adresi</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> -->
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Ahmet Ekti</a>  <!-- Yukarıdaki url alanı için geçerlidir. -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Projelerim</a>  <!-- Yukarıdaki url alanı için geçerlidir. -->
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Hakkımda</a>  <!-- Yukarıdaki url alanı için geçerlidir. -->
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">İletisim</a> <!-- Yukarıdaki url alanı için geçerlidir. -->
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolioModal7"  class="portfolio-link" data-toggle="modal">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">

                            <?
                            echo $row["baslik"]."<br>";
                            ?>

                        </span>
                        <hr class="star-light">
                        <span class="skills">

                            <?
                            echo $row["etiketler"]."<br>";
                            ?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Projelerim</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/arduino.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/python.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/php.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/c.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="https://github.com/AhmetEkti/" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/github.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/c%23.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hakkımda</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>                            <?
                        echo $row["hakkimda"]."<br>";
                        ?> </p>
                </div>
                <div class="col-lg-4">
                    <p>                            <?
                        echo $row["hakkimda2"]."<br>";
                        ?></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-safari"></i> Detaylı Oku
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>İletişim</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>İsim</label>
                                <input type="text" class="form-control" placeholder="İsim" id="name" required data-validation-required-message="Lütfen adınızı giriniz.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Adresi</label>
                                <input type="email" class="form-control" placeholder="Email Adresi" id="email" required data-validation-required-message="Lütfen email adresinizi giriniz.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefon Numarası</label>
                                <input type="tel" class="form-control" placeholder="Telefon Numarası" id="phone" required data-validation-required-message="Lütfen telefon numaranızı giriniz.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mesaj</label>
                                <textarea rows="5" class="form-control" placeholder="Mesaj" id="message" required data-validation-required-message="Lütfen mesajınızı giriniz."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Ulaşım Adresi</h3>
                        <p>Muğla Sıtkı Koçman Üniversitesi
                            <br>Teknoloji Fakültesi</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Sosyal Platform</h3>
                        <ul class="list-inline item-details">
                            <li>Github:
                                <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                </strong>
                            </li>
                            <li>Linkedin:
                                <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                </strong>
                            </li>
                            <li>Turkcell:
                                <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Open Source</h3>
                        <p>Burada gezdiğiniz web sayfası açık kaynak olarak üretilmiştir. İstediğiniz taktirde sayfanın kodlarına burada ulaşabilirsiniz:  <a href="http://github.com">Github/AhmetEkti</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       Bu web sayfasını kopyalayabilir veya kodlarını paylaşabilirsiniz.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">

                            </div>
                            <h2>Arduino Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/arduino.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">


                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Sayfa Açıklaması</div>
                            <div class="panel-body">
                                <p>Bu programlama dili üzerinde oluşturduğum projelere  <a href="https://github.com/AhmetEkti/Arduino-Projeleri" target="_blank">buradaki</a> bağlantı adresinden ulaşabilirsiniz. 2016 yılından itibaren arduino programlama ile ilgilenmekteyim. Umuyorum ki yaptığım projeler açık kaynak olarak arkamda bir iz bırakacaktır ve başkalarının işlerini kolaylaştıracaktır.</p>
                            </div>

                            <!-- Table -->
                            <table class="table">
                                <tr>

                                    <td style="font-weight: bold">ProjeID</td>
                                    <td style="font-weight: bold">Proje İsmi</td>
                                    <td style="font-weight: bold">Proje Oluşturma Tarihi</td>
                                    <td style="font-weight: bold">Proje Hakkında</td>

                                </tr>
                                <?
                                foreach($projeler as $projelerim)
                                {
                                    if ($projelerim["projeKatalogu"] == "Arduino")
                                    {
                                        echo "<tr>";
                                        echo "<td>".$projelerim["projeID"]."</td>";
                                        echo "<td>".$projelerim["projeAdi"]."</td>";
                                        echo "<td>".$projelerim["proje_olusturmaTarihi"]."</td>";
                                        echo "<td><a href=".$projelerim["projeHakkinda"]." target=\"_blank\">Devamını gör</a></td>";
                                        echo "</tr>";

                                    }
                                }
                                $projeler = $db->query('SELECT * FROM projelerim'); //Yeniden çağırmamızın nedeni tekrardan projeler değişkenini doldursun.

                                ?>
                            </table>
                            </div>

                    </div>
                    <ul class="list-inline item-details">
                        <li>Github:
                            <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                            </strong>
                        </li>
                        <li>Linkedin:
                            <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                            </strong>
                        </li>
                        <li>Turkcell:
                            <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                            </strong>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Python Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/python.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Sayfa Açıklaması</div>
                                <div class="panel-body">
                                    <p>Bu programlama dili üzerinde oluşturduğum projelere <a href="https://github.com/AhmetEkti/Python-Examples" target="_blank" >buradaki </a> bağlantı adresinden ulaşabilirsiniz. 2016 yılından itibaren Python programlama diliyle ilgilenmekteyim. Umuyorum ki yaptığım projeler açık kaynak olarak arkamda bir iz bırakacaktır ve başkalarının işlerini kolaylaştıracaktır.</p>
                                </div>

                                <!-- Table -->
                                <table class="table">
                                    <tr>

                                        <td style="font-weight: bold">ProjeID</td>
                                        <td style="font-weight: bold">Proje İsmi</td>
                                        <td style="font-weight: bold">Proje Oluşturma Tarihi</td>
                                        <td style="font-weight: bold">Proje Hakkında</td>

                                    </tr>
                                    <?
                                    foreach($projeler as $projelerim)
                                    {
                                        if ($projelerim["projeKatalogu"] == "Python")
                                        {
                                            echo "<tr>";
                                            echo "<td>".$projelerim["projeID"]."</td>";
                                            echo "<td>".$projelerim["projeAdi"]."</td>";
                                            echo "<td>".$projelerim["proje_olusturmaTarihi"]."</td>";
                                            echo "<td><a href=".$projelerim["projeHakkinda"]." target=\"_blank\">Devamını gör</a></td>";
                                            echo "</tr>";

                                        }
                                    }
                                    $projeler = $db->query('SELECT * FROM projelerim'); //Yeniden çağırmamızın nedeni tekrardan projeler değişkenini doldursun.
                                    ?>
                                </table>
                            </div>
                        </div>
                        <ul class="list-inline item-details">
                            <li>Github:
                                <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                </strong>
                            </li>
                            <li>Linkedin:
                                <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                </strong>
                            </li>
                            <li>Turkcell:
                                <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Php Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/php.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Sayfa Açıklaması</div>
                                <div class="panel-body">
                                    <p>Bu programlama dili üzerinde oluşturduğum projelere <a href="https://github.com/AhmetEkti/php-projeleri" target="_blank" >buradaki </a> bağlantı adresinden ulaşabilirsiniz. 2015 yılından itibaren PHP programlama diliyle ilgilenmekteyim. Umuyorum ki yaptığım projeler açık kaynak olarak arkamda bir iz bırakacaktır ve başkalarının işlerini kolaylaştıracaktır.</p>
                                </div>
                                <!-- Table -->
                                <table class="table">
                                    <tr>

                                        <td style="font-weight: bold">ProjeID</td>
                                        <td style="font-weight: bold">Proje İsmi</td>
                                        <td style="font-weight: bold">Proje Oluşturma Tarihi</td>
                                        <td style="font-weight: bold">Proje Hakkında</td>

                                    </tr>
                                    <?
                                    foreach($projeler as $projelerim)
                                    {
                                        if ($projelerim["projeKatalogu"] == "PHP")
                                        {
                                            echo "<tr>";
                                            echo "<td>".$projelerim["projeID"]."</td>";
                                            echo "<td>".$projelerim["projeAdi"]."</td>";
                                            echo "<td>".$projelerim["proje_olusturmaTarihi"]."</td>";
                                            echo "<td><a href=".$projelerim["projeHakkinda"]." target=\"_blank\">Devamını gör</a></td>";
                                            echo "</tr>";

                                        }
                                    }
                                    $projeler = $db->query('SELECT * FROM projelerim'); //Yeniden çağırmamızın nedeni tekrardan projeler değişkenini doldursun.
                                    ?>
                                </table>
                            </div>
                            <ul class="list-inline item-details">
                                <li>Github:
                                    <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                    </strong>
                                </li>
                                <li>Linkedin:
                                    <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                    </strong>
                                </li>
                                <li>Turkcell:
                                    <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>C Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/c.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Sayfa Açıklaması</div>
                                <div class="panel-body">
                                    <p>Bu programlama dili üzerinde oluşturduğum projelere <a href="https://github.com/AhmetEkti/C-Projelerim/" target="_blank" >buradaki </a> bağlantı adresinden ulaşabilirsiniz. 2015 yılından itibaren C programlama diliyle ilgilenmekteyim. Umuyorum ki yaptığım projeler açık kaynak olarak arkamda bir iz bırakacaktır ve başkalarının işlerini kolaylaştıracaktır.</p>
                                </div>

                                <!-- Table -->
                                <table class="table">
                                    <tr>

                                        <td style="font-weight: bold">ProjeID</td>
                                        <td style="font-weight: bold">Proje İsmi</td>
                                        <td style="font-weight: bold">Proje Oluşturma Tarihi</td>
                                        <td style="font-weight: bold">Proje Hakkında</td>

                                    </tr>
                                    <?
                                    foreach($projeler as $projelerim)
                                    {
                                        if ($projelerim["projeKatalogu"] == "C")
                                        {
                                            echo "<tr>";
                                            echo "<td>".$projelerim["projeID"]."</td>";
                                            echo "<td>".$projelerim["projeAdi"]."</td>";
                                            echo "<td>".$projelerim["proje_olusturmaTarihi"]."</td>";
                                            echo "<td><a href=".$projelerim["projeHakkinda"]." target=\"_blank\">Devamını gör</a></td>";
                                            echo "</tr>";

                                        }
                                    }
                                    $projeler = $db->query('SELECT * FROM projelerim'); //Yeniden çağırmamızın nedeni tekrardan projeler değişkenini doldursun.
                                    ?>
                                </table>
                            </div>
                        </div>
                        <ul class="list-inline item-details">
                            <li>Github:
                                <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                </strong>
                            </li>
                            <li>Linkedin:
                                <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                </strong>
                            </li>
                            <li>Turkcell:
                                <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Github Üzerindeki Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/github.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">>
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        </div>
                        <ul class="list-inline item-details">
                            <li>Github:
                                <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                </strong>
                            </li>
                            <li>Linkedin:
                                <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                </strong>
                            </li>
                            <li>Turkcell:
                                <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>C# Projelerim</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/c%23.png" class="img-responsive img-centered" alt="" style="height: 240px;width: 340px;">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-heading">Sayfa Açıklaması</div>
                                <div class="panel-body">
                                    <p>Bu programlama dili üzerinde oluşturduğum projelere <a href="https://github.com/AhmetEkti/CSharp-projeleri" target="_blank" >buradaki</a> bağlantı adresinden ulaşabilirsiniz. 2013 yılından itibaren C# programlama ile ilgilenmekteyim. Umuyorum ki yaptığım projeler açık kaynak olarak arkamda bir iz bırakacaktır ve başkalarının işlerini kolaylaştıracaktır.</p>
                                </div>

                                <!-- Table -->
                                <table class="table">
                                    <tr>

                                        <td style="font-weight: bold">ProjeID</td>
                                        <td style="font-weight: bold">Proje İsmi</td>
                                        <td style="font-weight: bold">Proje Oluşturma Tarihi</td>
                                        <td style="font-weight: bold">Proje Hakkında</td>

                                    </tr>
                                    <?
                                    foreach($projeler as $projelerim)
                                    {
                                        if ($projelerim["projeKatalogu"] == "C#")
                                        {
                                            echo "<tr>";
                                            echo "<td>".$projelerim["projeID"]."</td>";
                                            echo "<td>".$projelerim["projeAdi"]."</td>";
                                            echo "<td>".$projelerim["proje_olusturmaTarihi"]."</td>";
                                            echo "<td><a href=".$projelerim["projeHakkinda"]." target=\"_blank\">Devamını gör</a></td>";
                                            echo "</tr>";

                                        }
                                    }
                                    $projeler = $db->query('SELECT * FROM projelerim'); //Yeniden çağırmamızın nedeni tekrardan projeler değişkenini doldursun.
                                    ?>
                                </table>
                            </div>
                        </div>
                        <ul class="list-inline item-details">
                            <li>Github:
                                <strong><a href="http://github.com/AhmetEkti" target="_blank">Geliştirdiğim Projeler</a>
                                </strong>
                            </li>
                            <li>Linkedin:
                                <strong><a href="https://www.linkedin.com/in/ahmetekti" target="_blank">Hakkımda Detaylı Bilgi</a>
                                </strong>
                            </li>
                            <li>Turkcell:
                                <strong><a href="https://gelecegiyazanlar.turkcell.com.tr/kisi/ektiahmet" target="_blank">Turkcell Hesabım</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <hr class="star-primary">
                            <img src="img/portfolio/yapimAsamasi.png" class="img-responsive img-centered" alt="" style="height: 340px;width: 700px;">
                            <hr class="star-primary">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
