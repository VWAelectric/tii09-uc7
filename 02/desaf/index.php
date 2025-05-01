<?php 

$salario = (float) $_GET ['salario'];

echo "O salário é: R$ $salario <br>";

$salarioAtualizado = $salario * 0.11;
echo "O desconto do salário é: R$ $salarioAtualizado <br>";
$desconto = $salario - $salarioAtualizado;

echo "O salário com desconto é: R$ $desconto";