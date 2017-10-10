<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 9.10.2017
 * Time: 12:58
 */

?>

<div class="epostaKaydet col-lg-4" >

    <h3> <span class="label label-default">+</span> Eposta Kaydet <span class="label label-default">+</span></h3>

    <form  method="get" name="epostaKaydet" action="fonksiyonlar/veriTabani_ekle.php">

        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">#</span>
        <input type="text" class="form-control" placeholder="Ad Soyad" aria-describedby="basic-addon1" name="adSoyad">
    </div>

    <br>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Eposta adresini giriniz" aria-describedby="basic-addon2" name="eMail">
        <span class="input-group-addon" id="basic-addon2">@gmail.com</span>
    </div>

    <button type="submit"  style="text-align: center" class="epostaButon btn btn-success">Kaydet</button>

    </form>
</div>

