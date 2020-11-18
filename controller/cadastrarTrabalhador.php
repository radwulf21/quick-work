<?php require_once '../model/TrabalhadorDAO.php'; ?>
<?php require_once '../model/domain/Trabalhador.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $dadosTrabalhador = Codificacao::decodeArrayDataUtf8([
        $_POST['nome'], 
        $_POST['sobrenome'], 
        $_POST['telefone'], 
        $_POST['cidade'], 
        $_POST['email'],
        $_POST['senha'],
        $_POST['descricao'],
        $_POST['categoria']
    ]);

    $trabalhador = new Trabalhador;

    $trabalhador->nome         = $dadosTrabalhador[0];
    $trabalhador->sobrenome    = $dadosTrabalhador[1];
    $trabalhador->telefone     = $dadosTrabalhador[2];
    $trabalhador->cidade       = $dadosTrabalhador[3];
    $trabalhador->email        = $dadosTrabalhador[4];
    $trabalhador->senha        = md5($dadosTrabalhador[5]);
    $trabalhador->descricao    = $dadosTrabalhador[6];
    $trabalhador->categoria_id = $dadosTrabalhador[7];

    $trabalhadorDAO = new TrabalhadorDAO;

    $trabalhadorDAO->cadastrarTrabalhador($trabalhador);

    header('Location:../view/login-worker.php');