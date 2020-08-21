<!DOCTYPE html>
<?php
include('config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT nome, apartamento, bloco, id_tipo FROM condomino WHERE id = " . $_GET['id'];
    if($result = $mysqli->query($sql)) {
        $row = $result->fetch_row();
        $nome = $row[0];
        $apartamento = $row[1];
        $bloco = $row[2];
        $id_tipo = $row[3];
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Morador</title>
    <link rel="stylesheet" href="adicionar.css">
</head>
<body background="../Imagens/reboco.jpeg">

<div class="caixa">
    <header>
        <h1>Condomínio Sol Nascente</h1>
        <h2>Editar Morador</h2>
    </header>
</div>
<main>
    <form action="editar_controller.php?id=<?php echo $id; ?>" method="post">
    <label for="nome">Nome</label>
            <input type="text" id="nome" class="input-padrao" required="true" placeholder="ex: Ana Paula Guimarães" maxlength="100" value="<?php echo $nome;?>">
            <label for="apartamento">Apartamento</label>
            <input type="text" id="apartamento" class="input-padrao" required="true" placeholder="ex: 401" maxlength="4" value="<?php echo $apartamento;?>">
            <label for="bloco">Bloco</label>
            <input type="text" id="bloco" class="input-padrao" required="true" placeholder="ex: A" maxlength="4" value="<?php echo $bloco;?>">
            <div>
                <p>Tipo de condômino</p>
                <label for="radio_condomino"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" checked maxlength="11" value="<?php echo $id_tipo;?>">Condômino</label>

                <label for="radio_sindico"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" maxlength="11" value="<?php echo $id_tipo;?>">Síndico</label>

                <label for="radio_subsindico"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" maxlength="11" value="<?php echo $id_tipo;?>">Subsíndico</label>

            </div>
        <input type="submit" value="Enviar" class="enviar">
    </form>
</main>
<footer>
    <h3 class="links"><a href="index.php">Voltar</a></h3>
    <br>
    <h5>Todos os direitos reservados</h5>
</footer>
</body>
</html>
