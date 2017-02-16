    <?php
    require_once "header.php";
    require_once "veriTabani/baglan.php";
    $duyurular = $db -> query("SELECT * FROM duyurular");


    ?>
<!doctype html>
<html lang="tr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css"/>
    <title>Duyurular</title>
</head>
<body class="container">
<div class="menu">

<div class="col-md-6">
    <div class="list-group">
    <? foreach ($duyurular as $duyuru): ?>
    <a href="?id=<?=$duyuru["duyuru_id"]?>" class="list-group-item <? if($duyuru["duyuru_id"]==$_GET["id"]) echo "active"; ?>">
        <h4 class="list-group-item-heading"><?="<b><h4>".$duyuru["duyuru_baslik"]."</h4></b>"?></h4>
        <p class="list-group-item-text"><?=$duyuru["duyuru_tarih"] ?></p>
    <? endforeach;?>
    </a>
</div>
</div>

<div class="col-md-6">
    <?php
    if(isset($_GET["id"])):
    if(! isset($duyuru[$_GET["id"]])):?>
        <div class="alert alert-danger" role="alert"><strong><?=$_GET['id']?></strong> numarasına sahip bir öğrenci yok.</div>
        <?
    else:
    $bildiri = $duyuru[$_GET['id']];
    ?>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;height: 10px"><?="<h3 style='text-align: center'>".$duyuru["duyuru_baslik"]."</h3>"?></h3>
        </div>
        <div class="panel-footer" style="height: 250px;"><?=$duyuru["duyuru_icerik"]?></div>
    </div>
</div>

<?
endif;
endif;?>


</div>
<?php require_once "footer.php"?>

</body>
</html>

