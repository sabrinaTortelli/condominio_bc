<!DOCTYPE html>
<?php include ('config.php');?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema Condomínio Sol Nascente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="Imagens/reboco.jpeg">

    <div class="caixa">
        <header>
            <h1>Condomínio Sol Nascente</h1>
        </header>
    </div>

    <main>
        <div class="imagemCondominio">
            <img src="Imagens/imagem1.jpg" width="400px" height="400px">
        </div>
        <nav>
            <ul class="links">
                <li><h2 class="titulo">Cadastro de moradores</h2></li>
                <li><h3><a href="adicionar.php">Adicionar Morador</a></h3></li>
                <li><h3><a href="relatorio.php">Relatório de Moradores</a></h3>
            </ul>
        </nav>
    </main>
    <footer>
        <h5>Todos os direitos reservados</h5>
    </footer>
</body>
</html>
<?php $mysqli->close();?>


