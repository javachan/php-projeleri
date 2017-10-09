<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 5.10.2017
 * Time: 15:45
 */


try{
    $veritabani = new PDO("mysql:host=localhost;dbname=test","root","root");

}catch (Exception $e)
{
    print $e->getMessage();
}
