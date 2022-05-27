<?php
header('Access-Control-Allow-Origin:*'); // * OR https://www.reddit.com/
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: *"); // TODO: POST,GET,DELETE,PUT
header("Access-Control-Allow-Headers:*");


// header('Access-Control-Allow-Origin: *');
// header('Content-Type: appication/json');
require_once './Model/Appointment.php';



class AppointmentController{
    
    // public function getAllApp(){
    //             $appoint = new Appointment();
    //             $json =  json_encode($appoint->allApp());
    //             echo $json;
    //         }


            public function addApp(){
        
                $newClient = new Appointment();
                $date = json_decode(file_get_contents("php://input"));  
                $time = json_decode(file_get_contents("php://input")); 
                $id_client = json_decode(file_get_contents("php://input"));
                
            // var_dump($date); 
            // var_dump($time);
            $allclient = Appointment::checkApp($date->date,$time->time);
            var_dump($allclient["COUNT(*)"]);
            if($allclient["COUNT(*)"] === 0){
                $json= json_encode($newClient->add($date->date,$time->time,$id_client->id_client));
                echo $json;
            }
            else{
                echo json_encode(array("message"=>"Cette date et cette heure existe déja",));
            }


        
            }

            public function getAll($id){

                $Allapp = new Appointment();
                
                $json = json_encode($Allapp->allApp($id));
                echo $json;

            }

            public function deleteApp($id){
             
                $appoint = new Appointment();
                $json =  json_encode($appoint->delete($id));
                echo $json;
            }

            public function updateApp(){
                $id = json_decode(file_get_contents("php://input")); 
                $star = json_decode(file_get_contents("php://input")); 
                $ending = json_decode(file_get_contents("php://input")); 
                $appoint = new Appointment();
                $json =  json_encode($appoint->update($id->id,$star->star,$ending->ending));
                echo $json;
            }



    }



?>