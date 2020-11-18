<?php require_once '../model/Login.php'; ?>

<?php
    $log = new Login;
    $log->logoff();
    header('Location:../view/index.php');
    die();
