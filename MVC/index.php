<?php

    // var_dump($_GET);

    if(isset($_GET['url'])){
        
        $url = $_GET['url'];
        $url = explode('/',($_GET['url']));
        
        // echo (print_r($url));

        if(file_exists('Controller/' . ucfirst($url[0]) . '.php' )){
            require_once ('Controller/' . ucfirst($url[0]) . '.php');

            $curentController = ucfirst($url[0]);
            $curentController = new $curentController();
            unset($url[0]);

            if(method_exists($curentController, $url[1])){

                $curentmethode = $url[1];
                unset($url[1]);

                $params = $url ? array_values($url) : [];

                call_user_func_array([$curentController, $curentmethode], $params);


            }


        }else{
            echo 'Not Found';
        }

    } 
    

    // if($url == ''){
    //     echo "Page d'acceuille";
    // }elseif($url[0]== 'article' AND !empty($url[1])){
    //     echo "ARTICLE " . $url[1];
    // }else{
    //     echo "Erro 404";
    // }


?>