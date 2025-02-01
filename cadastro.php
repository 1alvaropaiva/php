<?php
session_start();
require 'conexao.php';

$sql = "INSERT INTO usuarios (nome, email, senha) 
        VALUES ('" . $_POST['nome'] . "', '" . $_POST['email'] . "', 
        '" . md5($_POST['senha']) . "')";
$result = $conexao->query($sql);

if ($result) {
    header('Location: index.php');
	exit;
} else {
    header('Location: index.php');
	exit;
}

$conexao->close();
?>
