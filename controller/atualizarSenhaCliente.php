<?php require_once '../model/ClienteDAO.php'; ?>

<?php
    $id = $_POST['id'];
    $senha =  utf8_decode(md5($_POST['senha']));
    $confirmSenha = utf8_decode(md5($_POST['confirmacao_senha']));

    $clienteDAO = new ClienteDAO;

    if ($clienteDAO->validarNovaSenha($senha, $confirmSenha)) {
        $clienteDAO->alterarSenhaCliente($id, $senha);
        header('Location:../view/update-info-client.php');
    } else {
        header('Location:../view/update-info-client.php');
    }
