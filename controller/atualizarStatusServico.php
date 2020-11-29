<?php require_once "../model/ServicoDAO.php"; ?>

<?php
    $servicoDAO = new ServicoDAO;

    if (isset($_POST['confirmar'])) {
        $servicoDAO->confirmarServico($_POST['id_servico']);
    } else {
        $servicoDAO->terminarServico($_POST['id_servico']);
    }

    header('Location:../view/service-remaining.php');
