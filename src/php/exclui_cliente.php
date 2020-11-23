<?php

include_once 'db.php';

if (isset($_POST['sim'])) {
    
    $id = mysqli_escape_string($conexaoBanco, $_GET['id']);
    
    $sql = "DELETE FROM cliente WHERE id_cliente = '$id'";
    mysqli_query($conexaoBanco, $sql);
    
    header('Location: views/clientes/clientes.php');
    
}

if (isset($_POST['nao'])) {
    header('Location: views/clientes/clientes.php');
}
include_once 'includes/head.php';
?>
<link rel="icon" href="assets/favicon.svg">
<link rel="stylesheet" type="text/css" href="styles/global.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/default.css" media="screen" />
<div id="container">
    <div id="form">
        <div class="modal">
            <form action="" method="POST">
                <label for="confirmar">Deseja mesmo excluir esse registro?</label>  
                <button type="submit" name="sim">Sim! Quero deletar</button>
                <button type="submit" name="nao">Nao</button>
            </form>
            <!-- <a href="views/clientes/clientes.php">nao</a> -->
        </div>
    </div>
</div>

<?php

    include_once 'includes/footer.php';

?>