<?php
include "Cliente.php";

$dados = Cliente::ListarTodos();
$json = json_encode($dados);
header ("Content-Type: application/json; charset=UTF-8");

echo $json;