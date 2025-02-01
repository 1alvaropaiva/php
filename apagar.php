<?php
session_start();
require 'conexao.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "DELETE FROM usuarios WHERE id = '$id'";
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
