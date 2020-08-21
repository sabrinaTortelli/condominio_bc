<?php

include 'config.php';

if($_POST['nome'] == ""){
    echo "Por favor, informe o nome do condômino";
} else if($_POST['apartamento'] == ""){
    echo "Por favor, informe o apartamento do condômino";
} else if($_POST['bloco'] == ""){
    echo "Por favor, informe o bloco do condômino";
}else if($_POST['id_tipo'] == ""){
        echo "Por favor, informe o tipo do condômino";
} else{
    $nome = $_POST['nome'];
    $apartamento = $_POST['apartamento'];
    $bloco = ($_POST['bloco']);
    $id_tipo = ($_POST['id_tipo']);
    $sql = "INSERT_INTO condomino (nome, apartamento, bloco, id_tipo) VALUES ('$nome','$apartamento','$bloco','$id_tipo')";

    if($mysqli->query($sql) == true){
        echo "Condômino adicionado!";
    } else{
        echo "Erro ao adicionar o condômino. Contate o administrador do sistema!.";
    }
}
$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>