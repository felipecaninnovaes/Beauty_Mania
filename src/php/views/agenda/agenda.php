<?php

    include '../../includes/head.php';
    include_once '../../db.php';

    $sql = "SELECT id_agenda, nome_agenda, telefone_agenda, DATE_FORMAT(dia_agenda, '%d/%m/%Y') AS dia_agenda, hora_agenda FROM agenda";
    $dados = mysqli_query($conexaoBanco, $sql);

?>

<div class="grid-container">
    <link rel="stylesheet" type="text/css" href="../../styles/block.css">
    <div id="tit">
        <div class="grid-item">
            <form>
                <a id="b3" href="../../insere_horario.php">Novo Horário</a>
                <a id="b3" href="../index.html">Voltar</a>
            </form>
        </div>
    </div>

    <div id="container">
        <?php while ($linha = mysqli_fetch_array($dados)) : ?>
        <div id="box">
            <span id="tx1"><strong><label class="nome" for="nome"><?= $linha['nome_agenda'] ?></label></strong></span>
            <span id="tx2">
                <p><?= $linha['telefone_agenda'] ?></p>
                <p>Dia: <?= $linha['dia_agenda'] ?></p>
                <p>Hora: <?= $linha['hora_agenda'] ?></p>
            </span>
            <a id="b2" href="edita_agenda_view.php?id=<?=$linha['id_agenda']?>">Editar</a></br></br>
            <a id="b1" href="../../exclui_agenda.php?id=<?=$linha['id_agenda']?>">Finalizar/Cancelar</a>
        </div>
        <?php endwhile; ?>
    </div>
    <?php


    include_once '../../includes/footer.php';
?>