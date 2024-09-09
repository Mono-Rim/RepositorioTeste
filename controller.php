<?php
include "classes/Pessoa.class.php";

// Criando uma nova instância da classe Pessoa
$pessoa = new Pessoa('987654321', 'Mario', 'Mario@gmail', 'senha');

// Exibindo os dados da pessoa
echo $pessoa;
?>
