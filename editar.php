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
    <link rel="stylesheet" href="styles/editar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Editar Usuário</h2>
        <form action="cadastro.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <p>Nome Completo:</p>
            <input type="text" name="nome" placeholder="Novo nome:" required><br>
            <p>Email:</p>
            <input type="email" name="email" placeholder="Novo email:" required><br>
            <p>Senha:</p>
            <input type="password" name="senha" placeholder="Nova senha" required><br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>

</html>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$result = $conexao->query($sql);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $result = $conexao->query($sql);
}
?>

<?php
$conexao->close();
?>