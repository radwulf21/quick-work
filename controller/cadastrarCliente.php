<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/domain/Cliente.php'; ?>

<?php
    $cliente = new Cliente;

    $cliente->nome = $_POST['nome'];
    $cliente->sobrenome = $_POST['sobrenome'];
    $cliente->telefone = $_POST['telefone'];
    $cliente->cidade = $_POST['cidade'];
    $cliente->email = $_POST['email'];
    $cliente->senha = md5($_POST['senha']);

    $clienteDAO = new ClienteDAO;

    $clienteDAO->cadastrarCliente($cliente);

    header('Location:../view/login-client.php');
