<?php require_once "../model/ServicoDAO.php"; ?>

<?php
    $servicoDAO = new ServicoDAO;

    $servicoDAO->fecharSolicitacaoServico($_POST['id_servico']);
    header('Location:../view/service-request.php');