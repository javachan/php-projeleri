<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://assets.destekweb.net/jquery/v3.1.1/jquery-3.1.1.min.js"></script>
    <!-- Jquery Number Format -->
    <script src="https://assets.destekweb.net/plugins/jquery-number/jquery.number.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Ece EKİZ - Diyet Hesaplama Tablosu</title>

</head>
<body>

<div class="container-fluid">
    <div class="row m-b-5" >


            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info" placeholder="" disabled>
            </div>

            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info" STYLE="text-align: center;font-weight: bolder;" placeholder="KAT SAYISI" disabled>
            </div>

            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info" STYLE="text-align: center;font-weight: bolder;"  placeholder="CHO" disabled>
            </div>

            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info"  STYLE="text-align: center;font-weight: bolder;"  placeholder="PROTEIN" disabled>
            </div>

            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info" STYLE="text-align: center;font-weight: bolder;"   placeholder="YAG" disabled>
            </div>

            <div class="col-xs-2">
                <input name="disabled" type="text" class="form-control alert-info"  STYLE="text-align: center;font-weight: bolder;"  placeholder="KOLESTEROL" disabled>
            </div>
    </div>
            <?php //1.SUTUN (TABLOLARIN İSİMLERİ YAZİYOR.!
                foreach ($besinDegerleri as $besinDegeri):?>
                    <!-- //Kategori adları yazar. Ör: SUT, ET, EYG, SEBZE, MEYVE, YAG -->
                    <div class="row">
                    <div class="col-xs-2">
                          <input id="<?= $besinDegeri["kategoriAdi"]?>" STYLE="font-weight: bolder;"   type="text" class="form-control alert-info"  placeholder="<?= $besinDegeri["kategoriAdi"]?> " disabled>
                          </div>

                    <div class="col-xs-2">
                        <div class="input-group">
                            <input id="katsayi-<?= $besinDegeri['id'] ?>" STYLE="text-align: center;font-weight: bolder;"  type="text"  data-id="<?= $besinDegeri['id']?>" class="form-control hesapla" placeholder="Kat sayısı">
                        </div><!-- /input-group -->
                    </div><!-- /.col-xs-6 -->

                <?php
                    foreach ($basliklar as $baslik):?>

                        <div class="col-xs-2">
                            <input id="<?= $baslik["isim"]."-".$besinDegeri['id']?>" type="text" class="form-control <?= $baslik['isim']?>-sonuc" STYLE="text-align: center;font-weight: bolder;"  placeholder="0 gr" disabled>
                            <input type="hidden" class="katsayi-<?= $besinDegeri['id']?> " data-besin="<?= $baslik['isim']?>" value="<?= $besinDegeri[$baslik['isim']]?>">
                                </div>

                    <?php endforeach;?>
                    </div>
                <?php endforeach ?>

    <br>
    <div class="row m-b-5" >
        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-warning"  STYLE="font-weight: bolder;"  placeholder="TOPLAM" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control  alert-warning"  STYLE="text-align: center;font-weight: bolder;"  placeholder="-" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" id="CHO-toplam" class="form-control alert-warning"   STYLE="text-align: center;font-weight: bolder;"  placeholder="0 gr" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-warning" id="PROTEIN-toplam"   STYLE="text-align: center;font-weight: bolder;"  placeholder="0 gr" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-warning" id ="YAG-toplam"  STYLE="text-align: center;font-weight: bolder;"   placeholder="0 gr" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-warning" id ="KOLESTEROL-toplam"  STYLE="text-align: center;font-weight: bolder;"  placeholder="0 mg" disabled>
        </div>
    </div>

    <div class="row m-b-5" >
        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-danger"  STYLE="font-weight: bolder;"  placeholder="KCAL" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control  alert-danger"  STYLE="text-align: center;font-weight: bolder;"  placeholder="-" disabled>
        </div>

            <div class="col-xs-2 ">
                <input name="disabled" type="text" class="form-control CHO-kalori-degerleri alert-danger" data-katsayi="4" id ="CHO-kcal"   STYLE="text-align: center;font-weight: bolder;"  placeholder="0 Kcal" disabled>
            </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control PROTEIN-kalori-degerleri alert-danger" data-katsayi="4" id ="PROTEIN-kcal"  STYLE="text-align: center;font-weight: bolder;"  placeholder="0 Kcal" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control YAG-kalori-degerleri alert-danger"  data-katsayi="9"  id ="YAG-kcal"  STYLE="text-align: center;font-weight: bolder;"   placeholder="0 Kcal" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control kalori-toplam alert-danger"  id ="KOLESTEROL-kcal"  STYLE="text-align: center;font-weight: bolder;"  placeholder="0 Kcal" disabled>
        </div>
    </div>

    <div class="row m-b-5" >
        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control alert-success"   STYLE="font-weight: bolder;" placeholder="YÜZDE" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control  alert-success"  STYLE="text-align: center;font-weight: bolder;"  placeholder="-" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control CHO-yuzde alert-success"   STYLE="text-align: center;font-weight: bolder;"  placeholder="%0" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control PROTEIN-yuzde alert-success"  STYLE="text-align: center;font-weight: bolder;" placeholder="%0" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled"  type="text" class="form-control YAG-yuzde alert-success" STYLE="text-align: center;font-weight: bolder;"  placeholder="%0" disabled>
        </div>

        <div class="col-xs-2">
            <input name="disabled" type="text" class="form-control "  STYLE="text-align: center" placeholder="-" disabled>
        </div>
    </div>

</div>
<script type="application/javascript">
    $('.hesapla').on('focusout',function () {

        var id=$(this).attr('data-id');
        var katsayi = $('#katsayi-'+id).val();

        $('.katsayi-'+id).each(function () {
            var besin = $(this).attr('data-besin');
            var besin_katsayi = $(this).val();
            var sonuc = besin_katsayi * katsayi;
            $('#'+besin+'-'+id).val(sonuc);
            topla(besin);
        })
    });

    function topla(besin){
        var toplam = 0;

        $('.'+besin+'-sonuc').each(function () {
            toplam = toplam + ($(this).val() *1);
            $('#'+besin+'-toplam').val(toplam + "gr"); //İD -> # CLASS -> .
        });

        $('#KOLESTEROL-toplam').val(toplam + "mg"); //İD -> # CLASS -> .
        kaloriHesapla(besin,toplam,toplamKcal);
    }

    var toplamKcal = 0;
    var choKcal = 0;
    var proteinKcal = 0;
    var yagKcal = 0;

    function kaloriHesapla(besin,toplam)
    {
        var kcal = 0;
        $('.'+besin+'-kalori-degerleri').each(function () {
             kcal =  toplam * $(this).attr('data-katsayi');

            $('.'+besin+'-kalori-degerleri').val(kcal); //İD -> # CLASS -> .

            choKcal = $('.CHO-kalori-degerleri').val();
            proteinKcal = $('.PROTEIN-kalori-degerleri').val();
            yagKcal = $('.YAG-kalori-degerleri').val();

            toplamKcal = choKcal*1 + proteinKcal*1 + yagKcal*1;

            $('.kalori-toplam').val($.number(toplamKcal,2)); //İD -> # CLASS -> .
            yuzdeHesapla(toplamKcal);
        });
    }

    function yuzdeHesapla(toplamKcal) {

        var choYuzde = (choKcal * 100) / toplamKcal;
        var proteinYuzde = (proteinKcal * 100) / toplamKcal;
        var yagYuzde = (yagKcal * 100) / toplamKcal;

        $('.CHO-yuzde').val("%" +$.number(choYuzde,2));
        $('.PROTEIN-yuzde').val("%" + $.number(proteinYuzde,2));
        $('.YAG-yuzde').val("%" +$.number(yagYuzde,2));
    }

</script>
</body>
</html>

