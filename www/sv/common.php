<?php
/**
 * Created by PhpStorm.
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 16:37
 */

function redirect($direccion){
    echo '<meta http-equiv="refresh" content="0; url='.$direccion.'" />';
}

function getHost(){
    return "http://localhost/test/www/";
}

function getDirecction(){
    return "/test/www/";
}

function getRutaActual(){
    return explode("/", $_SERVER['REQUEST_URI'])[count(explode("/", getDirecction())) - 1];
}

function getServerStatus($ip, $puerto){
    return @fsockopen($ip, $puerto, $errno, $errstr, 1) >= 1;
}

function getClase($idClase){
    switch($idClase){
        case 1:
            return "Feca";
        case 2:
            return "Osamodas";
        case 3:
            return "Anutrof";
        case 4:
            return "Sram";
        case 5:
            return "Xelor";
        case 6:
            return "Zurcarák";
        case 7:
            return "Aniripsa";
        case 8:
            return "Yopuka";
        case 9:
            return "Ocra";
        case 10:
            return "Sadida";
        case 11:
            return "Sacrógrito";
        case 12:
            return "Pandawa";
        default:
            return "NULL";
    }
}

?>