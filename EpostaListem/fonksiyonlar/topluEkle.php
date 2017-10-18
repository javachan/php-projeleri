<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 10.10.2017
 * Time: 14:46
 */

try{ //Depo verinin kayıtlı olduğu veritabanıdır.
    $depoVeri = new PDO("mysql:host=localhost;dbname=buyukTablo","root","root"); //Veritabanının isminin değiştirilmesi lazım.

}catch (Exception $e)
{
    print $e->getMessage();
}

try{ //Verileri kaydedeceğimiz veritabanının bulunduğu kısımdır.
    $veritabani = new PDO("mysql:host=localhost;dbname=epostaListesi","root","root");

}catch (Exception $e)
{
    print $e->getMessage();
}

$sorgu1 = $depoVeri->query("SELECT * FROM tablo3", PDO::FETCH_ASSOC); //Eklenecek tablonun isminin değiştirilmesi lazım.
$karsilastirma = 0;

if ( $sorgu1->rowCount() ){

    foreach( $sorgu1 as $veri )
    {
        $sorgu2 = $veritabani->query("SELECT * FROM MSKU", PDO::FETCH_ASSOC);
        foreach ($sorgu2 as $veri2)
        {
            echo $veri2['email'];

            if($veri['email'] == $veri2['email'])
            {
                $karsilastirma = 1; //Aynı değer mevcuttur!
                echo "Aynı veri vardır.!";
            }
        }

        if($karsilastirma == 0)
        {
            $sorgu3 = $veritabani ->prepare("INSERT INTO MSKU SET
            adSoyad = ?,
            email = ?");//isteğe bağlı telNo eklenebilir.

            $kaydet = $sorgu3->execute(array(
                $veri['adSoyad'],
                $veri['email']));

            if ( $kaydet )
            {
                $son_id = $veritabani->lastInsertId();
                print "Basariyla kaydedildi!";
            }
        }
        else
        {
            echo "Karsilastirma vardır!";
            $karsilastirma = 0;
        }
    }
}