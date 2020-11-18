<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = utf8_decode($_POST['email']);
    $senha = utf8_decode(md5($_POST['senha']));

    $cliente = $log->buscarCliente($email, $senha);

    if ($cliente != null) {
        $log->login();
        $_SESSION['usuario'] = 'Cliente';
        $_SESSION['id_cliente'] = $cliente['id'];
        
        header('Location:../view/category-work.php');
    } else {
        header('Location:../view/login-client.php');
    }
