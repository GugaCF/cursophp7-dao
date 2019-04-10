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

/*$usuario = new Usuario();

$usuario->login("root", "54321");

echo $usuario;*/

//$aluno = new Usuario("aluna", "@lun@");

/*$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");*/

/*$aluno->insert();

echo $aluno;*/

/*$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "fde555");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->delete();

echo $usuario;


 ?>