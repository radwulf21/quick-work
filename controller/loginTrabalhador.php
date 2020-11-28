<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $trabalhador = $log->verificarCredenciaisTrabalhador($email, $senha);

    if ($trabalhador != null) {
        $log->login();
        $_SESSION['usuario'] = 'Trabalhador';
        $_SESSION['id_trabalhador'] = $trabalhador['id'];
        $_SESSION['nome_trabalhador'] = $trabalhador['nome'];
        $_SESSION['sobrenome_trabalhador'] = $trabalhador['sobrenome'];
        
        header('Location:../view/service-remaining.php');
    } else {
        header('Location:../view/login-worker.php');
    }
