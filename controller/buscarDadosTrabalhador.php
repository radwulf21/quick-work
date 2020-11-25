<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $trabalhadorDAO = new TrabalhadorDAO;
    $dadosTrabalhador = $trabalhadorDAO->buscarDadosTrabalhador($_SESSION['id_trabalhador']);
    return $dadosTrabalhador;
