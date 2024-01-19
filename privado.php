<?php
if (isset($_COOKIE['PHPSESSID'])){
    echo 'zona privada';
}
else{
    echo 'no tienes acceso';
}
