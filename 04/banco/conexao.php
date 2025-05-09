<?php

$user = "root";
$password = "";
$database = "loja_produtos";

$produtos = [];

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, "");
    
    if (isset($_GET['nome']) && isset($_GET['preco'])) {
        $nome = $_GET['nome'];
        $preco = $_GET['preco'];

        $stmt = $db->prepare("INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)");

        $stmt->execute([
            ':nome' => $nome,
            ':preco' => $preco
        ]);
    }

    $resultado = $db->query("SELECT * FROM produtos");    
    $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}

