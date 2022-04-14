<?php

    class RendezVousController{

        public function getAllRendezVous(){
                    
                $rendezVous = new RendezVous();
                $json =  json_encode($rendezVous->getAll());
                echo $json;

        }

    }



?>