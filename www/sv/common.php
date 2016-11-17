<?php
/**
 * Created by PhpStorm.
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 16:37
 */

function getServerStatus($ip, $puerto){
    return @fsockopen($ip, $puerto, $errno, $errstr, 1) >= 1;
}

?>