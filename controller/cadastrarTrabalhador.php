<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/domain/Trabalhador.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $trabalhador = new Trabalhador;

    $trabalhador->nome         = $_POST['nome'];
    $trabalhador->sobrenome    = $_POST['sobrenome'];
    $trabalhador->telefone     = $_POST['telefone'];
    $trabalhador->cidade       = $_POST['cidade'];
    $trabalhador->email        = $_POST['email'];
    $trabalhador->senha        = md5($_POST['senha']);
    $trabalhador->descricao    = $_POST['descricao'];
    $trabalhador->categoria_id = $_POST['categoria'];

    $trabalhadorDAO = new TrabalhadorDAO;

    $trabalhadorDAO->cadastrarTrabalhador($trabalhador);

    header('Location:../view/login-worker.php');