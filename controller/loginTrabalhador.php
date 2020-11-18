<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = utf8_decode($_POST['email']);
    $senha = utf8_decode(md5($_POST['senha']));

    $linhasAfetadas = $log->buscarTrabalhador($email, $senha);

    echo $linhasAfetadas;

    if ($linhasAfetadas > 0) {
        $log->login();
        $_SESSION['usuario'] = 'Trabalhador';
        
        header('Location:../view/service-remaining.php');
    } else {
        header('Location:../view/login-worker.php');
    }
