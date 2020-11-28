<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $cliente = $log->verificarCredenciaisCliente($email, $senha);

    if ($cliente != null) {
        $log->login();
        $_SESSION['usuario'] = 'Cliente';
        $_SESSION['id_cliente'] = $cliente['id'];
        $_SESSION['nome_cliente'] = $cliente['nome'];
        $_SESSION['sobrenome_cliente'] = $cliente['sobrenome'];
        
        header('Location:../view/category-work.php');
    } else {
        header('Location:../view/login-client.php');
    }
