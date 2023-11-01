<?php 

    
    header ("Content-Type: application/json");
    require ("vendor/autoload.php");

    use Controllers\UserController;
    

    $method = $_SERVER ["REQUEST_METHOD"];
    $url = $_SERVER ["REQUEST_URI"];

    
    if ($method == "POST") {

        
        switch ($url) {

            case "/cadastro" : 
 

                $cadastro = new UserController();
                $result = $cadastro->createPost(file_get_contents("php://input"));
                echo $result;


        }
    }
    if ($method == "GET"){

        switch ($url) {

            case "/lista" : 
 
                $lista = new UserController();
                $result = $lista->getPosts('postagens');
                echo $result;


        }
    } if($method!='POST' && $method!= 'GET') {   
        $response = [
            "status" => 405,
            "message" => "Metodo $method nao permitido"
        ];
        header ("HTTP/1.0 405 Method Not Allowed");
        echo (json_encode ($response));
    }
?>