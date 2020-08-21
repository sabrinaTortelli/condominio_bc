<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório de Moradores</title>
    <link rel="stylesheet" href="relatorio.css">
</head>
<body background="Imagens/reboco.jpeg">

    <div class="caixa">
        <header>
            <h1>Condomínio Sol Nascente</h1>
        </header>
    </div>
    <main>
    <h2>Gerenciamento de Moradores</h2>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Apto</th>
                <th>Opções</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT id, nome, apartamento FROM condomino ORDER BY nome;";
        if($result = $mysqli->query($sql)) {
            while($row = $result->fetch_assoc()) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['apartamento'] . "</td>";
                echo "<td>";
                echo "<button type=\"button\" onclick=\"location.href = 'editar.php?id=" . $row['id'] . "'\">Editar</button>";
                echo "<button type=\"button\" onclick=\"location.href = '/excluir_controller.php?id=" . $row['id'] . "'\">Excluir</button>";
                echo "</td>";
                echo "</tr>";
            }
        }
        $result->close();
        ?>
    </table>        
    </main>
    <footer>
        <h3 class="links"><a href="index.php">Voltar</a></h3>
        <br>
        <h5>Todos os direitos reservados</h5>
    </footer>
</body>
</html>
