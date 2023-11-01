<?php 


namespace Connections;
require ("vendor/autoload.php");
use PDO;


class connection{

    function getConnection () {
        $host = 'localhost'; 
        $port = '5433';      
        $dbname = 'postgres'; 
        $user = 'postgres';         
        $password = 'password';       
        

        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

        
        
        return $pdo;
        
    }
    
}

?>