<?php

include 'config.php';

include('config.php');
if (!isset($_GET['id']) && $_GET['id'] == "") {
    echo "Por favor, informe o ID do condômino!";
} else {
    if ($_POST['nome'] == "") {
        echo "Por favor, informe o nome do condômino.";
    } else if ($_POST['apartamento'] == "") {
        echo "Por favor, informe o apartamento do condômino.";
    } else if ($_POST['bloco'] == "") {
        echo "Por favor, informe o bloco do condômino.";
    } else if ($_POST['id_tipo'] == "") {
        echo "Por favor, informe o tipo do condômino.";
    } else {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $apartamento = $_POST['apartamento'];
        $bloco = $_POST['bloco'];
        $id_tipo = $_POST['id_tipo'];

        if ($nome !== "" && $apartamento!== "" && $bloco!== "" && $id_tipo!== "") {
            $sql = "UPDATE condomino SET nome = '$nome', apartamento = '$apartamento', bloco = '$bloco', id_tipo = $id_tipo WHERE id = " . $id;
        }

        if($mysqli->query($sql) == true) {
            echo "Condômino editado!";
        } else {
            echo "Erro ao editar o condômino, contate o administrador do Sistema!";
        }

    }
    $mysqli->close();
}
?>
<br>
<button type="button" onclick="location.href='editar.php?id=<?php echo $id;?>'">Voltar</button>