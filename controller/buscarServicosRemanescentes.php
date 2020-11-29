<?php require_once '../model/ServicoDAO.php'; ?>

<?php
    $servicoDAO = new ServicoDAO;

    $infoServicos = $servicoDAO->buscarServicosRemanescentes($_SESSION['id_trabalhador']);
    return $infoServicos;
