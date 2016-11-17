<?php

/**
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 16:45
 */
class Personajes extends dbConnect {
    private $table = "personnages";

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
    public function setTable($table)
    {
        $this->table = $table;
    }

    public function getCantidadPersonajes(){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getGame());
        $sql = "SELECT guid FROM {$this->table}";
        $returnValue = mysqli_num_rows($dbconn->query($sql));
        $dbconn->close();
        return $returnValue;
    }

    public function getPersonajesOrdenadosNivel(){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getGame());
        $sql = "SELECT * FROM {$this->table} ORDER BY xp DESC";
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