<?php

require_once './Config/Database.php';

    class Appointment {

        //     static public function getAppointment(){

        //         $stmt = Db::connect()->prepare('SELECT * FROM appointment');
        
        //         $stmt->execute();
        //         return $stmt->fetchAll();
        //         $stmt->close();
        //         $stmt = null;
        
        // }

        static public function allApp(){

            $stmt = Db::connect()->prepare("SELECT a.*, b.nom, b.prenom FROM appointment AS a, client AS b");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        static public function add($date,$time,$id_client){
        
            $stmt = Db::connect()->prepare('INSERT INTO appointment 
            (date, time , id_client)
            VALUES (?,?,?)');
            
                $stmt->bindParam(1, $date);
                $stmt->bindParam(2, $time);
                $stmt->bindParam(3, $id_client);
        
                if($stmt->execute()){
                    
                    return 'ok';
                }else{
                    return 'Error';
                }
                    // $stmt->close();
                    // $stmt = null;
        
                }

                static public function delete($id){

                    $stmt = Db::connect()->prepare('DELETE FROM appointment WHERE id = ?');
                    
                        $stmt->bindParam(1, $id);
                    
                        if($stmt->execute()){
                            
                            return 'ok';
                        }else{
                            return 'Error';
                        }
                            // $stmt->close();
                            // $stmt = null;
                    
                    }

                    static public function update($id,$star,$ending){

                        $stmt = Db::connect()->prepare('UPDATE appointment SET star = ?, ending = ? WHERE id = ?');
                        
                            $stmt->bindParam(1, $star);
                            $stmt->bindParam(2, $ending);
                            $stmt->bindParam(3, $id);
                        
                            if($stmt->execute()){
                                
                                return 'ok';
                            }else{
                                return 'Error';
                            }
                                // $stmt->close();
                                // $stmt = null;
                        
                        }



    }