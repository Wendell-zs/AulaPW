<?php
include "Conexao.php";
class Cliente{
    private int $ID;
    private string $Cliente;
    private int $Peso;
    private int $Altura;
    private string $Telefone;

    public function __construct($Cliente, $Peso, $Altura, $Telefone){
        $this->Cliente = $Cliente;
        $this->Peso = $Peso;
        $this->Altura = $Altura;
        $this->Telefone = $Telefone;
    }
    
    public function Cadastrar(){
        $conexao = new Conexao();
        $sql = "INSERT INTO
        Computador(Cliente, Peso, Altura, Telefone)
        VALUES (:Cliente,:Peso,:Altura,:Telefone)";
        $pdo = $conexao->Conectar();
        $preview = $pdo->prepare($sql);
        $preview->bindParam(':Cliente', $this->Cliente);
        $preview->bindParam(':Peso', $this->Peso);
        $preview->bindParam(':Altura', $this->Altura);
        $preview->bindParam(':Telefone', $this->Telefone);
        $preview->execute();
    }
    
    public static function ListarTodos(){
        $conexao = new Conexao();
        $sql = "SELECT * FROM Computador";
        $dados = $conexao->Consultar($sql);
        foreach ($dados as $i => $linha) {
            $dados[$i]['Telefone'] = date('d/m/Y', $linha['Telefone']);
        }
        return $dados;
    }
}