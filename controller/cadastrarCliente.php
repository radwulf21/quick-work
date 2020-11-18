<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/domain/Cliente.php'; ?>

<?php
    $cliente = new Cliente;

    $cliente->nome = utf8_decode($_POST['nome']);
    $cliente->sobrenome = utf8_decode($_POST['sobrenome']);
    $cliente->telefone = utf8_decode($_POST['telefone']);
    $cliente->cidade = utf8_decode($_POST['cidade']);
    $cliente->email = utf8_decode($_POST['email']);
    $cliente->senha = utf8_decode(md5($_POST['senha']));

    $clienteDAO = new ClienteDAO;

    $clienteDAO->cadastrarCliente($cliente);

    header('Location:../view/login-client.php');
