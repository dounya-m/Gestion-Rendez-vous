<?php

class Db{

    //     private $host = 'localhost';
    //     private $db_name = 'cabinet_dentaire';
    //     private $username = 'root';
    //     private $password = '';
    //     private $conn;


    // static public function connect()
    // {
    //     try{

    //         $this->conn = new PDO('mysql:host=' . $this->host . '.dbname' . $this->db_name,
    //         $this->username);
    //         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     }catch(PDOException $e){
    //         echo 'Connection Error: ' . $e->getMessage();
    //     }

    //         return $this->conn;

    // }
    static public function connect(){
        
        $db = new PDO("mysql:host=localhost;dbname=cabinet_dentaire", "root", "");

        $db->exec("set names utf8");

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }

}







?>