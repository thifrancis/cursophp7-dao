<?php 

require_once("config.php");

//CARREGA SÓ UM USUARIO 
//$root = new Usuario ();
//$root->loadById(3);
//echo $root;

//CARREGA UMA LISTA DE USUARIO
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS
//$search = Usuario::search("f");
//echo json_encode($search);


//CARREGA UM USUARIO USANDO O LOGIN E A SENHA
$usuario = new Usuario();
$usuario->login("thiago","123");

echo $usuario;


?>