<?php
/**
 * User: Anghelo
 * Date: 17-11-2016
 * Time: 10:12
 */

class dbConnect{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "";
    private $db_game = "ancestra_game";
    private $db_realm = "ancestra_realm";

    public function __construct(){

    }

    public function getHost(){
        return $this->host;
    }
    public function getUser(){
        return $this->user;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getGame(){
        return $this->db_game;
    }
    public function getRealm(){
        return $this->db_realm;
    }

    public function setHost($newHost){
        $this->host = $newHost;
    }
    public function setUser($newUser){
        $this->user = $newUser;
    }
    public function setPass($newPass){
        $this->pass = $newPass;
    }
    public function setGame($newDb){
        $this->db_game = $newDb;
    }
    public function setRealm($newDb){
        $this->db_realm = $newDb;
    }

}

?>