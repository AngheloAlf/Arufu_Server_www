<?php

/**
 * User: Anghelo
 * Date: 05-12-2016
 * Time: 11:30
 */
include("dbConnect.php");

class rss extends dbConnect{
    private $table = "rss";

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

    public function getNews(){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getRealm());
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC LIMIT 0, 6";
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