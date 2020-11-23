<?php

    include_once '../../db.php';
    include_once '../../includes/head.php';

    if (isset($_GET['id'])) {

        $id = mysqli_escape_string($conexaoBanco, $_GET['id']);

        $query =  "SELECT * FROM produto WHERE id_produto = '$id'";
        $sql = mysqli_query($conexaoBanco, $query);
        $dados = mysqli_fetch_array($sql);

    }

?>
<div id="container">
    <div id="form">
    <link rel="stylesheet" type="text/css" href="../../styles/global.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../styles/default.css" media="screen" />

        <form action="../../edita_produto.php" method="POST">

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <label for="nome">Produto:</label>
            <input type="text" name="nome" value="<?= $dados['nome_produto'] ?>" />

            <label for="tel">Quantidade:</label>
            <input type="text" name="qtd" value="<?= $dados['qtd_produto'] ?>" />

            <input type="submit" name="btnEditar" id="button" value="Editar">
            <button name="voltar">Voltar</button>
            
        </form>
    </div>
</div>
<?php

    include_once '../../includes/footer.php';

?>