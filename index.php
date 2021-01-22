<?php  

require_once("config.php");
/*
$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);


*/

//$root = new Usuario();
//Carrega apenas um usuario;
//$root->loadById(7);
//echo $root;

//Carrega uma lista ordenada por login

//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando login

//$busca = Usuario::search("Ang");

//echo json_encode($busca);


//Carrega usuario usando logine senha 

//$usuario = new Usuario();
//$usuario->login("Juliana12","5783");

//echo $usuario;

$aluno = new Usuario("Lucas","65465654");


$aluno->insert();

echo $aluno;
?>