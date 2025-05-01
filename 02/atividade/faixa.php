<?php
/*
Crie um formulário que recebe uma idade (inteiro) **
Veriquei se idade:
- Menor que 12: Criança
- Menor que 18: Adolescente
- Menor que 60: Adulto
- Qualquer outra idade: Idoso
*/

$idade = (int) $_GET ['idade'];

if ($idade < 12) {
    echo "Criança";
} elseif ($idade < 18) {
    echo "Adolescente";
} elseif ($idade < 60){
echo "Adulto";
} else {
    echo "Idoso";
}