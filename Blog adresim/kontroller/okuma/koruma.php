<?php

if($gelen_id < 1)
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else if($gelen_id != $okunacakYazi['id'])
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else if(is_numeric($gelen_id) != TRUE)
{
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.ahmetekti.com/blog\">";
}
else
{

}
?>