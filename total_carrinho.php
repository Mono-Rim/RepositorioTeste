<?php
session_start();
include 'db.php';

if (isset($_SESSION['user_id'])) {
    $id_pessoa = $_SESSION['user_id'];

    $stmt = $pdo->prepare('
        SELECT SUM(p.preco * c.quantidade) AS total_preco
        FROM carrinho_compras c
        JOIN produtos p ON c.id_produto = p.id
        WHERE c.id_pessoa = :id_pessoa
    ');
    $stmt->execute(['id_pessoa' => $id_pessoa]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo 'Preço total no carrinho: R$ ' . number_format($result['total_preco'], 2, ',', '.');
    } else {
        echo 'Erro ao calcular o preço total.';
    }
} else {
    echo 'Você precisa estar logado para ver o preço total do carrinho.';
}
?>
