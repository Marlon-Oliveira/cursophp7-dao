<?php


require_once("config.php");

$data = new Data();

$usuarios = $data->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios);

?>