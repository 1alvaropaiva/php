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

        <!-- mostrar a lista de usuarios -->
        <div class="table">
            <h2>Lista de Usuários</h2>
            <?php
            $sql = "SELECT * FROM usuarios";
            $result = $conexao->query($sql);
            if ($result->num_rows > 0) {
                echo "<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome Completo</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>";
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>Não há usuários cadastrados.</p>";
                $sql = "TRUNCATE TABLE usuarios";
                $result = $conexao->query($sql);
                exit();
            }
            // Fechando a conexão com o banco de dados
            $conexao->close();
            $result->close();
            ?>
        </div>
    </div>
</body>

</html>