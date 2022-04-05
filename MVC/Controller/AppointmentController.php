<?php
header('Access-Control-Allow-Origin:*'); // * OR https://www.reddit.com/
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: *"); // TODO: POST,GET,DELETE,PUT
header("Access-Control-Allow-Headers:*");


// header('Access-Control-Allow-Origin: *');
// header('Content-Type: appication/json');
require_once './Model/Appointment.php';



class AppointmentController{
    
    public function getAllApp(){
                $appoint = new Appointment();
                $json =  json_encode($appoint->getAppointment());
                echo $json;
            }


            public function addApp(){
        
                $newClient = new Appointment();
                // $id=json_decode(file_get_contents("php://input")); 
                // $date = json_decode(file_get_contents("php://input"));  
                $star = json_decode(file_get_contents("php://input")); 
                $ending = json_decode(file_get_contents("php://input")); 
        
                $json= json_encode($newClient->add($star->star,$ending->ending));
                echo $json;
        
        
            }



    }



?>