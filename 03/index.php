<?php
//for
for($i = 1; $i < 5; $i++){
    echo "Funciona! <br>";
}

//while
$contador = 1;
while ($contador < 5) {
    echo "Contando: X <br>";
    $contador++;
}

//array
$nomes = ['Adenilsa', "Carlos", "Gustavo", "Gabriel"];

//count() percorre todos os nomes do array 

// for($i = 0; $i < count($nomes); $i++){
//     echo "Olá, $nomes[$i]! <br>";
// }

 //as seria um "como"

foreach($nomes as $n) {
    echo "Olá, $n! <br>";
}