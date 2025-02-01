<?php
define('HOST', 'localhost');
define('USUARIO', 'root2');
define('SENHA', 'h7F]n3YVDLzVbDWo');
define('DB', 'clientes');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
?>