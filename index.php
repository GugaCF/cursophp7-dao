<?php  

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);*/

/*$root = new Usuario();

$root->loadById(3);

echo $root;*/

/*$lista = Usuario::getlist();

echo json_encode($lista);*/

/*$search = Usuario::Search("jo");

echo json_encode($search);*/

$usuario = new Usuario();

$usuario->login("root", "54321");

echo $usuario;

 ?>