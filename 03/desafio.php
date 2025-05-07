<table border="1">
   <tr> 
    <th>Nome</th>
    <th>CPF</th>
    <th>Cidade</th>
</tr>
<?php

/*
Crie um array multidimensional com 2 clientes, cada um contendo:
- nome
- cpf
- cidade
*/

$clientes = [
    ["nome" => "Paulo", "CPF" => "222.555.888-35", "cidade" => "São Paulo"],
    ["nome" => "João", "CPF" => "222.444.789-00", "cidade" => "Osasco"]
    
];

foreach($clientes as $cliente) {
    echo "
    <tr>
        <td> {$cliente ['nome']} </td>
        <td> {$cliente ['CPF']} </td>
        <td> {$cliente ['cidade']} </td>
    </tr>;
    ";
}
?>

</table>