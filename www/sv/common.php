<?php
/**
 * Created by PhpStorm.
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 16:37
 */

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

?>