<?php

require_once './Config/Database.php';

    class Appointment {

            static public function getAppointment(){

                $stmt = Db::connect()->prepare('SELECT * FROM appointment');
        
                $stmt->execute();
                return $stmt->fetchAll();
                $stmt->close();
                $stmt = null;
        
        }
        static public function add($star,$ending){

            $today = DATE('now');
        
            $stmt = Db::connect()->prepare('INSERT INTO appointment 
            (date, star, ending)
            VALUES (?,?,?)');
            
                $stmt->bindParam(1, $today);
                $stmt->bindParam(2, $star);
                $stmt->bindParam(3, $ending);
        
                if($stmt->execute()){
        
                    // uniqid($md_key, time() + (85400 * 30));
                    
                    return 'ok';
                }else{
                    return 'Error';
                }
                    $stmt->close();
                    $stmt = null;
        
                }



    }