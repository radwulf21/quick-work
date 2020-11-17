<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/domain/Trabalhador.php'; ?>

<?php
    $trabalhador = new Trabalhador;

    $trabalhador->nome = utf8_decode($_POST['nome']);
    $trabalhador->sobrenome = utf8_decode($_POST['sobrenome']);
    $trabalhador->telefone = utf8_decode($_POST['telefone']);
    $trabalhador->cidade = utf8_decode($_POST['cidade']);
    $trabalhador->email = utf8_decode($_POST['email']);
    $trabalhador->senha = utf8_decode(md5($_POST['senha']));
    $trabalhador->descricao = utf8_decode($_POST['descricao']);
    $trabalhador->categoria_id = utf8_decode($_POST['categoria']);

    $trabalhadorDAO = new TrabalhadorDAO;

    $trabalhadorDAO->cadastrarTrabalhador($trabalhador);

    header('Location:../view/login-worker.php');