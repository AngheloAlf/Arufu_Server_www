<?php

/**
 * Created by PhpStorm.
 * User: Anghelo
 * Date: 25-11-2016
 * Time: 20:26
 */

class item_template extends dbConnect{
    private $table = "item_template";

    public function __construct(){

    }

    /**
     * @return string
     */
    public function getTable(){
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table){
        $this->table = $table;
    }

    public function getAllItems(){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getGame());
        $sql = "SELECT * FROM {$this->table}";
        $result = $dbconn->query($sql);
        $returnValue = null;
        if(!is_bool($result)){
            $returnValue = $result->fetch_all(MYSQLI_ASSOC);
        }
        else{
            $returnValue = $result;
        }
        $dbconn->close();
        return $returnValue;
    }

    public function getItemByconditions($conditions){
        //TODO: poner verificaciones
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getGame());
        $conditions = str_replace("%20", " ", $conditions);
        $sql = "SELECT * FROM {$this->table} WHERE {$conditions}";
        $result = $dbconn->query($sql);
        $returnValue = null;
        if(!is_bool($result)){
            $returnValue = $result->fetch_all(MYSQLI_ASSOC);
        }
        else{
            $returnValue = $result;
        }
        $dbconn->close();
        return $returnValue;
    }
}

?>