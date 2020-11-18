<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = utf8_decode($_POST['email']);
    $senha = utf8_decode(md5($_POST['senha']));

    $linhasAfetadas = $log->buscarCliente($email, $senha);

    echo $linhasAfetadas;

    if ($linhasAfetadas > 0) {
        $log->login();
        $_SESSION['usuario'] = 'Cliente';
        
        header('Location:../view/category-work.php');
    } else {
        header('Location:../view/login-client.php');
    }
