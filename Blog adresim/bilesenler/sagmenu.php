<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 12.01.2017
 * Time: 06:01
 */

?>

</div>
<!-- Sağ menü buradan başlamaktadır. -->
<div class="col-md-4">
    <div class="saat">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- Burada saat mevcuttur. -->
        <object width="200" height="200" data="http://www.webkodu.com/saat-takvim/wk-27.swf" type="application/x-shockwave-flash">
            <param value="http://www.webkodu.com/saat-takvim/wk-27.swf" name="movie">
            <param value="Transparent" name="WMode">
        </object>
    </div>

    <!-- Kategorilerin olduğu kısımdır.  -->
    <form method="get" action="kategoriler.php">
        <div class="well bg-success">
            <h4 style="text-align: center">Blog Kategorilerim</h4>
            <div class="row">
                <div class="kategoriler">
                    <ul class="list-unstyled ">
                        <?
                        include "kontroller/anasayfa/kategori.php";
                        ?>
                    </ul>
                </div>
            </div>
            <!-- kategoriler bitmiştir. -->
        </div>
    </form>
    <!-- Günün sözü başlamıştır. -->
    <div class="well">
        <h4>Günün Sözü</h4>
        <p>

            <? include "kontroller/anasayfa/gununSozu.php"?>

        </p>
    </div>
</div>

<!-- Günün sözü bitmiştir.-->
<hr>
