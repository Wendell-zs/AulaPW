<?php
include "Cliente.php";

/*
$novoCadastro = new Carro('CBA-123', 2000, true, '2022-03-18 15:00:00', 700);
$novoCadastro->Cadastrar();
*/

$dados = Cliente::ListarTodos();
var_dump($dados);