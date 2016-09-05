<?
session_start();
function girisYapmadiysaGiriseYonlendir(){
    if(!isset($_SESSION['username'])){
        if(!isset($_COOKIE["username"]))
        {
        header("Location: giris.php");
    }
}
}
function girisYaptiysaAnaSayfayaYonlendir()
{
    if (isset($_SESSION['username'])){
        if(isset($_COOKIE["username"])){
            header("Location: index.php");
        }
    }


}


?>