<?php

/*
Propriedades: nome, veiculo, telefone (todos private string)
Construtor que recebe todas as propreidades
Sobrescreva __toString() para visualizarmos os dados
Crie um get para o "nome" e um set para o "telefone"
*/

class Cliente {
    private string $nome;
    private string $veiculo;
    private string $telefone;

    public function __construct(string $nome, string $veiculo, string $telefone) {
        $this->nome = $nome;
        $this->veiculo = $veiculo;
        $this->telefone = $telefone;
    }
    public function getNome(): string {
        return $this->nome;
    }
 
    public function setTelefone(string $novoNumero) {
        $this->telefone = $novoNumero;
    }

    public function __toString()
    {
        return "Nome: $this->nome <br> Veículo: $this->veiculo <br> Telefone: $this->telefone <br>";
    }

}

$cli = new Cliente('Pedro', 'Brasilia', '11988885623');
print_r($cli);

echo "<br>";
echo ($cli);
$cli->setTelefone('(11) 9 8888-5544');
echo($cli);
