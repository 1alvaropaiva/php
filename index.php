<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Total Energy</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

        <!-- Formulário para criar/cadastrar um usuário -->
        <form class="cadastro" action="cadastro.php" method="post">
            <h2>Cadastro de Usuário</h2>
            <p>Nome Completo:</p>
            <input type="text" name="nome" placeholder="Digite seu nome completo" required><br>
            <p>Email:</p>
            <input type="email" name="email" placeholder="Digite seu email" required><br>
            <p>Senha:</p>
            <input type="password" name="senha" placeholder="Digite sua senha" required><br>
            <button class="submitbtn" type="submit">Cadastrar</button>
        </form>

        <!-- mostrar a lista de usuarios (temporario) -->
        <div class="table">
            <h2>Mais ações</h2>
            <button><a href="visualizar.php">Visualizar usuários</a></button>
            <button><a href="visualizar.php">Editar usuários</a></button>
            <?php 
            $conexao->close();
            ?>
        </div>
    </div>
</body>

</html>