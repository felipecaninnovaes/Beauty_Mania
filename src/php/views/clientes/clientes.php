<?php

    include '../../db.php';
    include '../../includes/head.php';
    $dados = mysqli_query($conexaoBanco, "SELECT * FROM cliente");

    if (isset($_POST['buscar']) && $_POST['buscar'] != "") {

        $filtro = $_POST['buscar'];
        $query = "SELECT * FROM cliente WHERE nome_cliente LIKE '%$filtro%' OR tel_cliente LIKE '%$filtro%'";
        $dados = mysqli_query($conexaoBanco, $query);

    }

?>
<div class="grid-container">
    <div class="grid-item">
        <link rel="stylesheet" type="text/css" href="../../styles/list.css" media="screen" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <form action="" method="POST">
            <a id="b3" href="../../insere_clientes.php">Novo Cliente</a>
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
                    <a id="b1" href="../../exclui_cliente.php?id=<?=$linha['id_cliente']?>">DELETAR</i></a>
                    <a id="b2" href="edita_cliente_view.php?id=<?=$linha['id_cliente']?>">EDITAR</a>
                </span>
                <span id="tx1""><strong><?= $linha['nome_cliente'] ?></strong></br></span>
                <span id="tx2">Telefone: <?= $linha['tel_cliente'] ?></span>
            </div>
            <div id="space"></div>    
            <?php endwhile; ?>

        </div>
    </section>
</div>
<?php

    include '../../includes/footer.php';

?>