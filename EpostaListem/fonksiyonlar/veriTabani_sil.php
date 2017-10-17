<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 16.10.2017
 * Time: 18:31
 */

include "../veriTabani/baglan.php";

$email = $_GET['emailSil']."@gmail.com";

$sorguListele = $veritabani->query("SELECT * FROM MSKU", PDO::FETCH_ASSOC);

$kullaniciSil = $veritabani->prepare("DELETE FROM MSKU WHERE email = :email");
$eposta_varMi = false;

foreach ($sorguListele as $veri)
{
    if($email == $veri['email'])
    {
        $eposta_varMi = true;
        $silindiMi = $kullaniciSil->execute(array(
            'email' => $email
        ));
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/epostaListem/eposta_islemleri.php?emailSil=true\">";
    }
}

if($eposta_varMi == false)
{
    $silindiMi = $kullaniciSil->execute(array(
        'email' => $email
    ));
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/epostaListem/eposta_islemleri.php?emailSil=false\">";
}

