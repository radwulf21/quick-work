<?php require_once '../model/TrabalhadorDAO.php'; ?>

<?php
    $id = $_POST['id'];
    $senha = md5($_POST['senha']);
    $confirmSenha = md5($_POST['confirmacao_senha']);

    $trabalhadorDAO = new TrabalhadorDAO;

    if ($trabalhadorDAO->validarNovaSenha($senha, $confirmSenha)) {
        $trabalhadorDAO->alterarSenhaTrabalhador($id, $senha);
        header('Location:../view/update-info-worker.php');
    } else {
        header('Location:../view/update-info-worker.php');
    }
