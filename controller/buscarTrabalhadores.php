<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $trabalhadorDAO = new TrabalhadorDAO;

    if (isset($_GET['categoria'])) {
        $trabalhadores = $trabalhadorDAO->buscarTrabalhadoresPorCategoria($_GET['categoria']);
        return $trabalhadores;
    } else {
        $trabalhadores = $trabalhadorDAO->buscarDadosTrabalhadores();
        return $trabalhadores;
    }
