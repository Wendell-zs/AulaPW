<?php

include "Cliente.php";

$novoCadastro = new Cliente('Cafu', 68, 176, 11992494097)
$novoCadastro->Cadastrar();


$dados = Cliente::ListarTodos();
var_dump($dados);