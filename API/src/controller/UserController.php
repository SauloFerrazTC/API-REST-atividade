<?php 

namespace Controllers;
require ("vendor/autoload.php");
use Models\UserModel;

Class UserController {

    private $userModel;
    public function __construct() {
        $this->userModel = new UserModel();
    }

  public function createPost($json) {   

       $data = json_decode($json,true);
       $objetivo = $data["objetivo"];
       $data = $data["data"];

       $result = $this->userModel->api('POST', $objetivo , $data);

        return json_encode($result);
    }

    public function getPosts($objetivo) {
        $result = $this->userModel->api('GET', $objetivo);

        return json_encode($result);
    }
  
}

?>