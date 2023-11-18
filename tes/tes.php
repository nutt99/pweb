<?php

class Database{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    
    function __construct($host, $user, $password, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $password;
        $this->dbname = $dbname;
    }

    public function setConnection(){
        $conf = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        return $conf ;
    }
    public function selectDb($table){
        $query = mysqli_query($this->setConnection(), "SELECT * FROM $table");
        while($arr = mysqli_fetch_array($query)){
            $data[] = $arr;
        }
        return $data;
    }
}