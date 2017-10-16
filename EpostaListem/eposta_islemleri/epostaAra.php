<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 9.10.2017
 * Time: 12:58
 */
//Kullanıcı arama ekranıdır.
?>

<form method="get" action="../EpostaListem/eposta_islemleri.php">

    <div class="kullaniciAra col-lg-4">

        <h3> <span class="label label-default">?</span> Kullanıcı Ara <span class="label label-default">?</span></h3>

        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">#</span>
            <input type="text" class="form-control" placeholder="Ad Soyad" aria-describedby="basic-addon1" name="adSoyad">
        </div>

        <button type="submit" class="epostaButon btn btn-info">Ara</button>

    </div>

</form>
