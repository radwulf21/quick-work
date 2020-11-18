<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = utf8_decode($_POST['email']);
    $senha = utf8_decode(md5($_POST['senha']));

    $trabalhador = $log->buscarTrabalhador($email, $senha);

    if ($trabalhador != null) {
        $log->login();
        $_SESSION['usuario'] = 'Trabalhador';
        $_SESSION['id_trabalhador'] = $trabalhador['id'];
        
        header('Location:../view/service-remaining.php');
    } else {
        header('Location:../view/login-worker.php');
    }
