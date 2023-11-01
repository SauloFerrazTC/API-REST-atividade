


<?php
require ("vendor/autoload.php");
use Controller\controller;

if ($_POST) {

    $post = new controller();

    $result = $post -> cadastro($_POST['conteudo'], 'postagens');
    echo $result;

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Postagem</title>
    
    

</head>
<body>

<div class="box">
    <form class = "card" method="post">
        <fieldset>
            <legend><b>Adicionar Postagem</b></legend>


            <input type="text" name="conteudo"><br><br>
           
            <input type="submit" name="SubmitPost" id="SubmitPost"><br><br>

        </fieldset>
    </form>
</div>

</body>
</html>

<?php 

?>