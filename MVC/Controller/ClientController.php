<?php
header('Access-Control-Allow-Origin:*'); // * OR https://www.reddit.com/

header('Content-Type: application/json ; charset=utf-8');
//  header('Content-Type: multipart/form-data'); // ** FormData, for image uploading
header("Access-Control-Allow-Methods: *"); // TODO: POST,GET,DELETE,PUT
header("Access-Control-Max-Age: 600");
header("Access-Control-Allow-Headers:*");

require_once "./Model/Client.php";

class clientController{

    public function getAllClient()
    {
        $client = new Client();
        $json= json_encode($client->getClient());
        echo $json;
    }

    public function addClient(){
        
        $newClient = new Client();
        // $id=json_decode(file_get_contents("php://input")); 
        $nom = json_decode(file_get_contents("php://input"));  
        $prenom = json_decode(file_get_contents("php://input")); 
        $age = json_decode(file_get_contents("php://input")); 
        $email = json_decode(file_get_contents("php://input"));
        $phone = json_decode(file_get_contents("php://input"));

        $json= json_encode($newClient->add($nom->nom,$prenom->prenom,$age->age,$email->email,$phone->phone));
        echo $json;


    }


    public function deleteClient($id){
        $client = new Client();
        $json= json_encode($client->delete($id));
        echo $json;
    }

    // public function updateClient($id){
    //     $client = new Client();
    //     $json= json_encode($client->update($id));
    //     echo $json;
    // }

    public function getClient(){
        $id= $_POST['id'];
        $client = new Client();
        $json= json_encode($client->get($id));
        echo $json;
    }

    

}





?>

