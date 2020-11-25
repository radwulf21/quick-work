<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/Login.php'; ?>

<?php
    $id = $_POST['id'];

    $trabalhadorDAO = new TrabalhadorDAO;
    $trabalhadorDAO->apagarContaTrabalhador($id);

    $log = new Login;
    $log->logoff();
    
    header('Location:../view/index.php');
    die();
