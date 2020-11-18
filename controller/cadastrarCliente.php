<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/domain/Cliente.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $dadosCliente = Codificacao::decodeArrayDataUtf8([
        $_POST['nome'], 
        $_POST['sobrenome'], 
        $_POST['telefone'], 
        $_POST['cidade'], 
        $_POST['email'],
        $_POST['senha']
    ]);

    $cliente = new Cliente;

    $cliente->nome      = $dadosCliente[0];
    $cliente->sobrenome = $dadosCliente[1];
    $cliente->telefone  = $dadosCliente[2];
    $cliente->cidade    = $dadosCliente[3];
    $cliente->email     = $dadosCliente[4];
    $cliente->senha     = md5($dadosCliente[5]);

    $clienteDAO = new ClienteDAO;

    $clienteDAO->cadastrarCliente($cliente);

    header('Location:../view/login-client.php');
