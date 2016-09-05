<?

if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
}
elseif(isset($_SESSION["username"]))
{
    setcookie("username",$_SESSION["username"],time()+3600);
}
else
{
    header("location: giris.php");
}

require_once "veriTabani/baglan.php";
$ogrenciler = $db -> query("SELECT * FROM ogrenciBilgileri");



?>


<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form class="form-inline sorgu" style="text-align: center">
    <div class="form-group">
        <label for="inpStudentId">Öğrenci Numarası: </label>
        <input type="text" class="form-control" name="student_id" id="inpStudentId" value="<? if(isset($_GET['student_id'])) echo $_GET["student_id"] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Öğrenci Bilgilerini Getir</button>
</form>

<div class="col-md-6">
    <h1>Öğrenci Listesi</h1>
    <div class="list-group">
        <?php foreach ($ogrenciler as $ogrenci):?>
            <a href="?student_id=<?=$ogrenci["ogrenci_id"]?>" class="list-group-item <? if($ogrenci["ogrenci_id"]==$_GET["student_id"]) echo "active" ?>">
                <?=$ogrenci["ogrenci_adi"]." ".$ogrenci["ogrenci_soyadi"]?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="col-md-6">
    <?php
    if(isset($_GET['student_id'])):
        $ogrenci_id = $_GET['student_id'];

        $ogrenciAyrinti = $db -> prepare("SELECT * FROM ogrenciBilgileri WHERE ogrenci_id=?");
        $ogrenciAyrinti -> execute(array($ogrenci_id));
        $veriler = $ogrenciAyrinti -> fetchAll(PDO::FETCH_ASSOC);

        foreach ($veriler as $ogrenci2){

        }

        // eğer bu numara tanımlandıysa, ama bu numaraya sahip bir öğrenci, yani bu numarayı index olarak kullanan bir dizi elemanı yoksa hata ver
        if( ! isset( $ogrenci[ $_GET['student_id'] ] ) ): ?>
            <div class="alert alert-danger" role="alert"><strong><?=$_GET['student_id']?></strong> numarasına sahip bir öğrenci yok.</div>
        <?php else:
            ?>
            <h1>Öğrenci Bilgileri</h1>
            <h2><?=$ogrenci2["ogrenci_adi"]." ".$ogrenci2["ogrenci_soyadi"]?></h2>
            <table class="table table-striped">
                <tr>
                    <th>Öğrenci No</th>
                    <td><?=$ogrenci2["ogrenci_id"]?></td>
                </tr>
                <tr>
                    <th>Öğrenci Adı</th>
                    <td><?=$ogrenci2["ogrenci_adi"]." ".$ogrenci2["ogrenci_soyadi"]?></td>
                </tr>
                <tr>
                    <th>Doğum Yılı</th>
                    <td><?=$ogrenci2["ogrenci_dogumYili"]?></td>
                </tr>
                <tr>
                    <th>Giriş Yılı</th>
                    <td><?=$ogrenci2["ogrenci_kayitYili"]?></td>
                </tr>
                <tr>
                    <th>Çıkış Yılı</th>
                        <td><?if($ogrenci2["ogrenci_mezunYili"] == "0000-00-00") echo "Mezun Değil"; else echo $ogrenci["ogrenci_mezunYili"];?></td>
                </tr>
                <tr>
                    <th>Dönem</th>
                        <td><?=$ogrenci2["ogrenci_donemi"]?></td>
                  </tr>
                <tr>
                    <th>Bölüm</th>
                    <td><?=$ogrenci2["ogrenci_bolumu"]?></td>
                </tr>

            </table>
        <?php endif; endif; ?>
</div>
</body>
</html>