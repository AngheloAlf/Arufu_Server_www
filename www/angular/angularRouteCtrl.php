<?php
/**
 * User: Anghelo
 * Date: 25-11-2016
 * Time: 23:14
 */

function loadAndShowData($ruta, $subRuta, $general, $especifico){
    if(isset($ruta[1]) && $ruta[1] == $subRuta){
        require($subRuta.".php");
        if(isset($ruta[2])){
            echo $especifico($ruta[2]);
        }
        else{
            echo $general();
        }
        return true;
    }
    return false;
}

function parseAngularRoute($ruta){
    if($ruta[0] != "angular" || !$ruta[1]){
        redirect(getDirection());
        return true;
    }
    else{
        return loadAndShowData($ruta, "items", 'getAllItems', 'getItemByconditions');
    }
}

?>