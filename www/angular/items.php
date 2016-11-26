<?php
/**
 * User: Anghelo
 * Date: 25-11-2016
 * Time: 20:31
 */

function getAllItems(){
    $template = new item_template();
    return json_encode($template->getAllItems());
}

function getItemByConditions($conditions){
    $template = new item_template();
    return json_encode($template->getItemByConditions($conditions));
}

?>