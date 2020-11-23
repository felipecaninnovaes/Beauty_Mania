<?php

    include_once '../../db.php';

    if (isset($_GET['id'])) {

        $id = mysqli_escape_string($conexaoBanco, $_GET['id']);

        $query =  "SELECT * FROM cliente WHERE id_cliente = '$id'";
        $sql = mysqli_query($conexaoBanco, $query);
        $dados = mysqli_fetch_array($sql);

    }

?>
<div id="container">
    <div id="form">
        <link rel="stylesheet" type="text/css" href="../../styles/global.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../../styles/default.css" media="screen" />
        <form action="../../edita_cliente.php" method="POST">

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nomeCliente" value="<?= $dados['nome_cliente'] ?>" />

            <label for="tel">Telefone:</label>
            <input type="text" name="tel" id="telefoneCliente" value="<?= $dados['tel_cliente'] ?>" />

            <input type="submit" name="btnEditar" value="Editar" id="button">
            <button name="voltar">Voltar</button>

        </form>
    </div>
</div>
<?php

?>