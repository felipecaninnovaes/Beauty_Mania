<?php


    include 'db.php';

    
    if (((isset($_POST['nome'])) && (isset($_POST['qtd']))) && (($_POST['nome'] != '') && ($_POST['qtd'] != ''))) {
        
        $nome = $_POST['nome'];
        $qtd = $_POST['qtd'];

        $sql = "INSERT INTO produto (nome_produto, qtd_produto) VALUES ('$nome', '$qtd')";
        mysqli_query($conexaoBanco, $sql);

        header("Location: views/produtos/estoque.php");

    }

    if (isset($_POST['voltar'])) {
        header("Location: views/produtos/estoque.php");
    }
    include_once 'includes/head.php';
?>
<link rel="icon" href="assets/favicon.svg">
<link rel="stylesheet" type="text/css" href="styles/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/default.css" media="screen" />
<div id="container">
    <div id="form">
        <form action="" method="POST">

            <label for="nome">Produto:</label>
            <input type="text" name="nome" id="nomeProduto" />

            <label for="tel">Quantidade:</label>
            <input type="number" name="qtd" id="qtdProduto" />

            <input type="submit" value="Cadastrar" id="button">
            <button name="voltar">Voltar</button>

        </form>
    </div>
</div>
<?php

    include_once 'includes/footer.php';

?>