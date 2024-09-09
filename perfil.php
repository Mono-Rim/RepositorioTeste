<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="style/style_perfil.css">
</head>
<body>
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Redireciona para a página de login se não estiver logado
    header('Location: tela_login.html');
    exit();
}
?>
    <header>
        <h1>Perfil do Usuário</h1>
    </header>
    <main>
        <div class="profile-container">
            <h2>Bem-vindo, [Nome do Usuário]</h2>
            <!-- Adicione aqui os campos para manipulação do perfil -->
        </div>
    </main>
</body>
</html>
