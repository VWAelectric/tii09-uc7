<?php
//Declaração de variáveis:

$suaVariavel;

// Atribuição de valor:
$nome = "Clodoaldo"; // String
$idade = 25; //INT

//Exibição e concatenação de valores:
echo "Nome: " .$nome ."<br>";
echo "Idade: " .$idade ."anos" . "<br>";

//Uso de aspas
echo "Esse é um texto em aspas duplas <br>";
echo 'Esse é um texto em aspas simples <br>';

echo "Nome: $nome <br>"; // Interpolação de variável
echo 'Idade: $idade anos <br>'; // não faz interpolação
echo "Idade: $idade anos <br> ";// Com aspas duplas exibe corretamente