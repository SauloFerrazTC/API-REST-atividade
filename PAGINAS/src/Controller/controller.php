<?php 

namespace Controller;
require_once ("vendor/autoload.php");
use Connection\connection;

class controller {

    function cadastro ($data , $objetivo) {

        $api = new connection ();

        $url = "http://localhost:8000/cadastro";
        $data = [
            "data" => $data,
            "objetivo" => $objetivo
        ];
        $data = json_encode ($data);

        // aqui definimos o método desejado
        $method = "post";
        $response = $api -> Api ($url, $method, $data);
        return $response;
    }
    function lista () {

        $api = new connection ();

        $url = "http://localhost:8000/lista";
        $data = [
            
        ];
        $data = json_encode ($data);

        // aqui definimos o método desejado
        $method = "get";
        $response = $api -> Api ($url, $method, $data);
        return $response;
    }

    
}

?>