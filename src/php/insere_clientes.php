<?php
    include 'db.php';

    
    if (((isset($_POST['nome'])) && (isset($_POST['tel']))) && (($_POST['nome'] != '') && ($_POST['tel'] != ''))) {
        
        $nome = $_POST['nome'];
        $tel = $_POST['tel'];

        $sql = "INSERT INTO cliente (nome_cliente, tel_cliente) VALUES ('$nome', '$tel')";
        mysqli_query($conexaoBanco, $sql);

        header("Location: views/clientes/clientes.php");

    }

    if (isset($_POST['voltar'])) {
        header("Location: views/clientes/clientes.php");
    }
    include_once 'includes/head.php';
?>
<link rel="icon" href="assets/favicon.svg">
<link rel="stylesheet" type="text/css" href="styles/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/default.css" media="screen" />
<div id="container">
    <div id="form">
        <form action="" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" />

            <label for="tel">Telefone:</label>
            <input type="text" name="tel" />

            <input type="submit" value="Cadastrar" id="button">
            <button name="voltar">Voltar</button>

        </form>
    </div>
</div>