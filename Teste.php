<?php

/*
$novoCadastro = new Cliente('CBA-123', 2000, true, '2022-03-18 15:00:00', 700);
$novoCadastro->Cadastrar();
*/

include "Cliente.php";

$novoCadastro = new Cliente('Cafu', 68, 176, 11992494097)
$novoCadastro->Cadastrar();


$dados = Cliente::ListarTodos();
var_dump($dados);