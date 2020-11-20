<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/domain/Cliente.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $cliente = new Cliente;

    $cliente->nome      = $_POST['nome'];
    $cliente->sobrenome = $_POST['sobrenome'];
    $cliente->telefone  = $_POST['telefone'];
    $cliente->cidade    = $_POST['cidade'];
    $cliente->email     = $_POST['email'];
    $cliente->id        = $_POST['id'];

    $clienteDAO = new ClienteDAO;

    $clienteDAO->alterarDadosCliente($cliente);

    header('Location:../view/update-info-client.php');
