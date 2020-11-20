<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/Login.php'; ?>

<?php
    $id = $_POST['id'];

    $clienteDAO = new ClienteDAO;
    $clienteDAO->apagarContaCliente($id);

    $log = new Login;
    $log->logoff();
    
    header('Location:../view/index.php');
    die();
