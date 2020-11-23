<?php

    include '../../db.php';
    include '../../includes/head.php';
    $dados = mysqli_query($conexaoBanco, "SELECT * FROM produto");

    if (isset($_POST['buscar']) && $_POST['buscar'] != "") {

        $filtro = $_POST['buscar'];
        $query = "SELECT * FROM produto WHERE nome_produto LIKE '%$filtro%' OR qtd_produto LIKE '%$filtro%'";
        $dados = mysqli_query($conexaoBanco, $query);

    }

?>
<link rel="stylesheet" type="text/css" href="../../styles/list.css" media="screen" />
<div class="grid-container">
    <div class="grid-item">
        <form action="" method="POST">
            <a id="b4" href="../../insere_produtos.php">Novo Produto</a>
            <a id="b3" href="../index.html">Voltar</a>
            <span id="search">
                <input type="text" name="buscar" id="search">
            </span>
            <span id="search">
                <input type="submit" value="Buscar" id="button2">
            </span>
        </form>
    </div>
    <section>

        <div class="grid-item">

            <?php while ($linha = mysqli_fetch_array($dados)) : ?>

            <div id="dadosClientes">
                <span id="button">
                    <a id="b1" href="../../exclui_produto.php?id=<?=$linha['id_produto']?>">DELETAR</a>
                    <a id="b2" href="edita_produto_view.php?id=<?=$linha['id_produto']?>">EDITAR</a>
                </span>
                <span id="tx1""><strong><?= $linha['nome_produto'] ?></strong></br></span>
                    <span id="tx2"">Quantidade: <?= $linha['qtd_produto'] ?></span>

            </div>
            <div id="space"></div>
            <?php endwhile; ?>

        </div>

    </section>
</div>
<?php

    include '../../includes/footer.php';

?>