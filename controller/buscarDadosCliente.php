<?php require_once '../model/ClienteDAO.php'; ?>
<?php require_once '../model/utils/Codificacao.php'; ?>

<?php
    $clienteDAO = new ClienteDAO;
    $dadosCliente = $clienteDAO->buscarDadosCliente($_SESSION['id_cliente']);
    return $dadosCliente;
