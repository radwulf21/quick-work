<?php require_once '../model/ServicoDAO.php'; ?>

<?php
    $servicoDAO = new ServicoDAO;

    $infoServicos = $servicoDAO->buscarServicosSolicitados($_SESSION['id_cliente']);
    return $infoServicos;
