<?php

    include_once '../../db.php';
    include_once '../../includes/head.php';

    if (isset($_GET['id'])) {

        $id = mysqli_escape_string($conexaoBanco, $_GET['id']);

        $query =  "SELECT * FROM agenda WHERE id_agenda = '$id'";
        $sql = mysqli_query($conexaoBanco, $query);
        $dados = mysqli_fetch_array($sql);

    }

?>
<link rel="stylesheet" type="text/css" href="../../styles/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../../styles/default.css" media="screen" />
<div id="container">
    <div id="form">
        <form action="../../edita_agenda.php" method="POST">

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nomeAgenda" value="<?= $dados['nome_agenda'] ?>" />

            <label for="tel">Telefone:</label>
            <input type="text" name="tel" id="telefoneAgenda" value="<?= $dados['telefone_agenda'] ?>" />

            <label for="tel">Dia:</label>
            <input type="date" name="dia" id="diaAgenda" value="<?= $dados['dia_agenda'] ?>" />

            <label for="tel">Hora:</label>
            <input type="time" name="hora" id="horaAgenda" value="<?= $dados['hora_agenda'] ?>" />

            <input type="submit" name="btnEditar" value="Editar" id="button">
            <button name="voltar">Voltar</button>

        </form>
    </div>
</div>
<?php

    include_once '../../includes/footer.php';

?>