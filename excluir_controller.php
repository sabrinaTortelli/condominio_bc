<?php

include 'config.php';

include('config.php');
if (!isset($_GET['id']) && $_GET['id'] == "") {
    echo "Por favor, informe o ID do condômino!";
} else {
    $id = $_GET['id'];

    $sql = "DELETE FROM condomino WHERE id = " . $id;

    if($mysqli->query($sql) == true) {
        echo "Condômino excluído!";
    } else {
        echo "Erro ao editar o condômino, contate o administrador do Sistema!";
    }
    $mysqli->close();
}
?>
<br>
<button type="button" onclick="location.href='../index.php'">Voltar</button>