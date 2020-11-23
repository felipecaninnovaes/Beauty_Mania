<?php
    include_once 'includes/head.php';
    include 'db.php';

    if (isset($_POST['btnEditar'])) {
        
        $id = mysqli_escape_string($conexaoBanco, $_POST['id']);
        $nome = mysqli_escape_string($conexaoBanco, $_POST['nome']);
        $qtd = mysqli_escape_string($conexaoBanco, $_POST['qtd']);

        $sql = "UPDATE produto SET nome_produto = '$nome', qtd_produto = '$qtd' WHERE id_produto = '$id'";
        mysqli_query($conexaoBanco, $sql);

        header('Location: views/produtos/estoque.php?sucesso');
    }

    if (isset($_POST['voltar'])) {
        header("Location: views/produtos/estoque.php");
    }

?>

<?php

    include_once 'includes/footer.php';

?>
