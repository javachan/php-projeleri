<?php
require_once "functions.php";
require_once "veriTabani/baglan.php";

girisYaptiysaAnaSayfayaYonlendir();
$error = null;

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Burası posttan aldığımız verileri kontrol amaçlı ekrana yansıtıyor.
    //    echo $username.$password;

    $giris = $db -> prepare("SELECT * FROM admin");
    $giris -> execute();
    $veriler = $giris -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($veriler as $listele){
        $kullanici_adi = $listele["kullanici_adi"];
        $kullanici_sifresi = $listele["kullanici_sifresi"];
    }
    //Veri tabanından aldığımız bilgileri burada yansıtıyoruz. Kontrol amaçlı.
    //echo "<br>".$kullanici_adi.$kullanici_sifresi;


    if($username == $kullanici_adi and $password == $kullanici_sifresi)
    {
        $_SESSION["username"] = $_POST["username"];
        /////// BURASI ÇEREZLERE POSTLARDAN ALINAN VERİLERİ ATIYOR.!
        setcookie("username",$_POST["username"],time()+3600);
        setcookie("password",$_POST["password"],time()+3600);

        header("location: index.php");
    }
    else{
        $error =  "Kullanıcı adı veya şifre yanlıştır!";
    }
}
?>

    <!doctype html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="stil.css"/>
    </head>
    <body>
    <div class="container">
        <? require_once "header.php" ?>
        <form method="post" action="">
        <div class="girisYap">

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 " style="margin:50px 0px 50px 300px">
                        <div class="panel panel-login">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <? if(!is_null($error)): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                            <span class="sr-only">Error:</span>
                                            <?=$error?>
                                        </div>
                                        <? endif; ?>

                                        <a href="#" class="active" id="login-form-link"><b><h3 style="font-family: 'DejaVu Sans Mono'">Giriş yap</h3></b></a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" role="form" style="display: block;">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı adı" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Sifre">
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Giriş yap">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? require_once  "footer.php"?>
            </form>
        </div>
    </div>

    </body>
    </html>
