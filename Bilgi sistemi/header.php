<?php
require_once "functions.php";
?>
<!doctype html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="stil.css"/>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

<div class="menu">
<div class="col-md-12" "col-sm-12">
    <nav class="navbar navbar-default" >
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?if(isset($_SESSION["username"]) == "index.php"){
                echo"index.php";
            }
                else {
                echo"giris.php";
                }

            ?>"><b> <?
                    if(isset($_SESSION["username"]) == "index.php"){
                        echo"PHP NOT SİSTEMİ";
                    }else{
                        echo "SİSTEME GİRİŞ YAP";
                    }

                   ?> </b>

            <a class="navbar-brand" href="duyurular.php"><b style="color: crimson">DUYURULAR </b></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?if(isset($_SESSION["username"])){?>
                <li><a href="index.php" target="_blank"><b>Hoşgeldin: <b>
                      <?
                            echo $_SESSION["username"];
                        }
                        elseif(isset($_COOKIE["username"]))
                        {
                            echo $_COOKIE["username"];
                        }
                        else
                    {?>
                        <li><a href="https://github.com/lyk2016php" target="_blank"><b>Open Source<b>
                    <?}?></b>
                </b></a></li>
            </ul>
        </div>
    </div>
</nav>
</div>
</div>
</body>
</html>



