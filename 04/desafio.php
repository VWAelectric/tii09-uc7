<!--
PHP + HTML

Crie um formulário que permita cadastrar até 3 produtos (nome e preço)
Use funções para:
- Inserir os produtos no array
- Listar os produtos cadastrados
- Calcular a média dos preços
-->
<!--
PHP + HTML

Crie um formulário que permita cadastrar produtos (nome e preço)
Use funções para:
- Inserir os produtos no array
-->
<?php

session_start();

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

// "isset" verifica se o valar existe ou não
if (isset($_GET['nome'])  && isset($_GET['preco'])) {
    $nome = $_GET['nome'];
    $preco = (float) $_GET['preco'];
    $produtos[] = ["nome" => $nome, "preco" => $preco];

    $_SESSION['produtos'][] = ["nome" => $nome, "preco" => $preco];
}

$produtos = $_SESSION['produtos'];
?>

<table border="1">
    <tr>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>


    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td>
                <?= $produto['nome'] ?>
            <td>
                R$ <?= $produto['preco'] ?>
            </td>
            </td>
        </tr>
    <?php endforeach; ?>
</table>