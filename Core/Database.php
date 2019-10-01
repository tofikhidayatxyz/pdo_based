<?php

namespace Core;
use PDO;
class Database {

    protected $db;

    public function __construct() {
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $host  = '127.0.0.1';
        $port  = '3306';
        $dbname = 'pdo';
        $password = 'mazenda9999';
        $user = 'root';

        $this->db =  new  PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port, $user, $password, $option);
    }

    public function query($query) {
       $db = $this->db->prepare($query);
       $db->execute();
       $array = array();
       while($row = $db->fetch(PDO::FETCH_OBJ)) {
          $array[] = $row;
       }
       return $array;
    }
}