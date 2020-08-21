<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Morador</title>
    <link rel="stylesheet" href="adicionar.css">
</head>
<body background="Imagens/reboco.jpeg">

    <div class="caixa">
        <header>
            <h1>Condomínio Sol Nascente</h1>
            <h2>Adicionar Morador</h2>
        </header>
    </div>
    <main>
        <form action="adicionar_controller.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" class="input-padrao" required="true" placeholder="ex: Ana Paula Guimarães" maxlength="100">
            <label for="apartamento">Apartamento</label>
            <input type="text" id="apartamento" class="input-padrao" required="true" placeholder="ex: 401" maxlength="4">
            <label for="bloco">Bloco</label>
            <input type="text" id="bloco" class="input-padrao" required="true" placeholder="ex: A" maxlength="4">
            <div>
                <p>Tipo de condômino</p>
                <label for="radio_condomino"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" checked maxlength="11">Condômino</label>

                <label for="radio_sindico"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" maxlength="11">Síndico</label>

                <label for="radio_subsindico"><input type="radio" name="id_tipo" value="condomino" id="tipo" required="true" maxlength="11">Subsíndico</label>

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
