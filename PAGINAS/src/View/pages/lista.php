
<?php
require ("vendor/autoload.php");
use Controller\controller;

$getposts = new controller();
$posts = $getposts-> lista();
echo "LISTA DE POSTS";

echo $posts;
?>

