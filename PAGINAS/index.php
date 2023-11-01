<?php

$URL = $_SERVER["REQUEST_URI"];
switch($URL){

    case "/":

    include "src/View/pages/telaInicial.php";
    break;

    case "/cadastro":

    include "src/View/pages/telaCadastro.php";
    break;

    case "/lista":
    include "src/View/pages/lista.php";
    break;

    default:
    echo 'ROTA NÃO EXISTE';
    break;
}
?>