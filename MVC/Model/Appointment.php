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
                    
                    return 'ok';
                }else{
                    return 'Error';
                }
                    $stmt->close();
                    $stmt = null;
        
                }

                static public function delete($id){

                    $stmt = Db::connect()->prepare('DELETE FROM appointment WHERE id = ?');
                    
                        $stmt->bindParam(1, $id);
                    
                        if($stmt->execute()){
                            
                            return 'ok';
                        }else{
                            return 'Error';
                        }
                            $stmt->close();
                            $stmt = null;
                    
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
                                $stmt->close();
                                $stmt = null;
                        
                        }



    }