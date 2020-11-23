<?php

    include 'db.php';
    
    if (isset($_POST['btnEditar'])) {
        
        $id = mysqli_escape_string($conexaoBanco, $_POST['id']);
        $nome = mysqli_escape_string($conexaoBanco, $_POST['nome']);
        $tel = mysqli_escape_string($conexaoBanco, $_POST['tel']);
        $dia = mysqli_escape_string($conexaoBanco, $_POST['dia']);
        $hora = mysqli_escape_string($conexaoBanco, $_POST['hora']);

        $sql = "UPDATE agenda SET nome_agenda = '$nome', telefone_agenda = '$tel', dia_agenda = '$dia', hora_agenda = '$hora' WHERE id_agenda = '$id'";
        mysqli_query($conexaoBanco, $sql);

        header('Location: views/agenda/agenda.php?sucesso');
    }

    if (isset($_POST['voltar'])) {
        header("Location: views/agenda/agenda.php");
    }

?>
