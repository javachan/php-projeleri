<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 9.10.2017
 * Time: 12:58
 */

?>

<form method="get" action="../EpostaListem/fonksiyonlar/veriTabani_sil.php">

    <div class="kullaniciSil col-lg-4">

        <h3> <span class="label label-default">-</span> Eposta Sil <span class="label label-default">-</span></h3>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Eposta adresini giriniz" aria-describedby="basic-addon2" name="emailSil">
            <span class="input-group-addon" id="basic-addon2" >@gmail.com </span>
        </div>

        <button type="submit" class="epostaButon btn btn-danger">Sil</button>

    </div>

</form>