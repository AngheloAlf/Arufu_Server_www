<?php

/**
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 10:32
 */
include("dbConnect.php");

class Accounts extends dbConnect{
    private $table = "accounts";

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

    public function getAccount($accountName){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getRealm());
        $sql = "SELECT * FROM {$this->table} WHERE account='".$accountName."'";
        $result = $dbconn->query($sql);
        $returnValue = null;
        if(!is_bool($result)){
            $returnValue = $result->fetch_all(MYSQLI_NUM);
        }
        else{
            $returnValue = $result;
        }
        $dbconn->close();
        return $returnValue;
    }

    public function createAccount($accountName, $pass, $pass2, $email, $pseudo, $question, $response){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getRealm());
        //TODO: poner verificaciones, regex por ejemplo
        if($pass != $pass2){
            return false;
        }
        $sql = "INSERT INTO {$this->table} (account, pass, email, pseudo, question, response) VALUES('{$accountName}', '{$pass}', '{$email}', '{$pseudo}', '{$question}', '{$response}')";
        $returnValue = $dbconn->query($sql);
        $dbconn->close();
        return $returnValue;
    }

    public function getAccountSum(){
        $dbconn = new mysqli($this->getHost(), $this->getUser(), $this->getPass(), $this->getRealm());
        $sql = "SELECT guid FROM {$this->table}";
        $returnValue = mysqli_num_rows($dbconn->query($sql));
        $dbconn->close();
        return $returnValue;
    }
}
?>