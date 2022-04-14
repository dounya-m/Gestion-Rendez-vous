<?php

require_once './Config/Database.php';

class RedezVous{

    static public function getAll(){

        $stmt = Db::connect()->prepare('SELECT * FROM rendez_vous');

        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;

    }

}








?>