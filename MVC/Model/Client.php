<?php
require_once './Config/Database.php';

    class Client{

        static public function getClient(){

        $stmt = Db::connect()->prepare('SELECT * FROM client');

        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
}

static public function add($nom,$prenom,$age,$date,$email,$phone){

    $new_key = uniqid();
    $md_key = md5($new_key);

    $stmt = Db::connect()->prepare('INSERT INTO client 
    (id, nom, prenom, age, date, email, phone)
    VALUES (?,?,?,?,?,?,?)');
    
        $stmt->bindParam(1, $md_key);
        $stmt->bindParam(2, $nom);
        $stmt->bindParam(3, $prenom);
        $stmt->bindParam(4, $age);
        $stmt->bindParam(5, $date);
        $stmt->bindParam(6, $email);
        $stmt->bindParam(7, $phone);

        if( $stmt->execute() ){

            uniqid($md_key, time() + (85400 * 30));
            
            return 'ok';
        }else{
            return 'Error';
        }
            $stmt->close();
            $stmt = null;

        }
        
    }    


?>