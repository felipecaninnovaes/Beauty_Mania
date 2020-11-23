<?php

    include 'db.php';
    
    if (isset($_POST['btnEditar'])) {
        
        $id = mysqli_escape_string($conexaoBanco, $_POST['id']);
        $nome = mysqli_escape_string($conexaoBanco, $_POST['nome']);
        $tel = mysqli_escape_string($conexaoBanco, $_POST['tel']);

        $sql = "UPDATE cliente SET nome_cliente = '$nome', tel_cliente = '$tel' WHERE id_cliente = '$id'";
        mysqli_query($conexaoBanco, $sql);

        header('Location: views/clientes/clientes.php?sucesso');
    }

    if (isset($_POST['voltar'])) {
        header("Location: views/clientes/clientes.php");
    }

?>
