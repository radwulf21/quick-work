<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $trabalhadorDAO = new TrabalhadorDAO;
    $trabalhadores = $trabalhadorDAO->listarTodosTrabalhadores();
    
    print_r($trabalhadores);
