<?php
    include_once 'db.php';

    $sql = "SELECT * FROM cliente";
    $dados = mysqli_query($conexaoBanco, $sql);

    if (isset($_POST['agendar'])) {

        $nome = $_POST['nome'];
        $telefone = $_POST['tel'];
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];

        $sqlInsert  = "INSERT INTO agenda (nome_agenda, telefone_agenda, dia_agenda, hora_agenda) VALUES ('$nome', '$telefone', '$dia', '$hora')";
        mysqli_query($conexaoBanco, $sqlInsert);
        
        header('Location: views/agenda/agenda.php');

    }
    include_once 'includes/head.php';
?>
<link rel="stylesheet" type="text/css" href="styles/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/default.css" media="screen" />
<div id="container">
    <div id="form">
        <form action="" method="POST">

            <label for="nome">Nome:</label>
            <select name="nome">
                <?php
                while ($linha = mysqli_fetch_array($dados)) {
                    echo "<option value=" . $linha['nome_cliente'] . ">" . $linha['nome_cliente'] . "</option>";
                }
            ?>
            </select>

            <label for="telefone">Telefone:</label>
            <input type="text" name="tel" id="telCliente" />

            <label for="dia">Dia:</label>
            <input type="date" name="dia" id="dia" />

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" />

            <input type="submit" name="agendar" value="Agendar" id="button" />
            <a id="b3" href="views/index.html">Voltar</a>

        </form>
    </div>
</div>