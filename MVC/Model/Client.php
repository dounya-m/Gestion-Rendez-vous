<?php
require_once './Config/Database.php';

    class Client{

        static public function getClient(){

        $stmt = Db::connect()->prepare('SELECT * FROM client');

        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt = null;
}

static public function add($nom,$prenom,$age,$email,$phone){

    // $new_key = uniqid();
    $md_key = substr(md5(mt_rand()), 0, 5);

    $stmt = Db::connect()->prepare('INSERT INTO client 
    (id, nom, prenom, age, email, phone)
    VALUES (:id, :nom, :prenom, :age,:email, :phone)');
    
        $stmt->bindParam(':id', $md_key); 
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);

        if($stmt->execute()){
            return  $md_key ;
        }else{
            return 'Error';
        }
            // $stmt->close();
            // $stmt = null;

        }

        static public function get($id){
            // $id= $_POST['id'];
            $stmt = Db::connect()->prepare('SELECT * FROM client WHERE id = ?');
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return $stmt->fetchAll();
            // $stmt->close();
            // $stmt = null;
        }


        static public function delete($id){

            $stmt = Db::connect()->prepare('DELETE FROM client WHERE id=:id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            // $stmt->close();
            // $stmt = null;
        }

        static public function update($id,$nom,$prenom,$age,$date,$email,$phone){

            $stmt = Db::connect()->prepare('UPDATE client SET nom=:nom, prenom=:prenom, age=:age, date=:date, email=:email, phone=:phone WHERE id=:id');
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
            // $stmt->close();
            // $stmt = null;
        }


            // $to      = $email;
            // $subject = 'le sujet';
            // $message = 'Bonjour !';
            // $headers = 'From: webmaster@example.com' . "\r\n" .
            // 'Reply-To: webmaster@example.com' . "\r\n" .
            // 'X-Mailer: PHP/' . phpversion();

            // mail($to, $subject, $message, $headers);
    }
?>