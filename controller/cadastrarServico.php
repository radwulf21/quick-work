<?php require_once '../model/ServicoDAO.php'; ?>
<?php require_once '../model/domain/Servico.php'; ?>

<?php
    $servico = new Servico;

    $servico->cliente_id     = $_POST['cliente_id'];
    $servico->trabalhador_id = $_POST['trabalhador_id'];
    $servico->categoria_id   = $_POST['categoria_id'];
    $servico->status_id      = 1;
    $servico->descricao      = $_POST['descricao'];

    $servicoDAO = new ServicoDAO;

    $servicoDAO->cadastrarServico($servico);
    header('Location:../view/service-request.php');