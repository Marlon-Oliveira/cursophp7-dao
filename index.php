<?php


require_once("config.php");

//carrega um usuário

//$marlon = new Usuario();
//$marlon->loadById(3);

//echo $marlon;


//carrega uma lista de usuários


//$lista = Usuario::getList();




//echo json_encode($lista);


//Carrega uma lista de usuário bsucando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//Carrega um usuário usando o login e a senha 

//$usuario = new Usuario();
//$usuario->login("marlon", "1234567890");

//echo $usuario;


/*
//Criando um novo usuário 
$aluno = new Usuario("aluno", "@alun0");



$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);


$usuario->update("professor", "!@#$%0000");

echo $usuario;

?>