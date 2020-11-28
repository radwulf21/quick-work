<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Serviços solicitados</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-service.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-service">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Cliente") { ?>
        <?php require_once "../controller/buscarServicosSolicitados.php"; ?>

        <?php require_once "header-client.php"; ?>

        <div id="container">
            <h1>Serviços solicitados</h1>

            <hr>

            <?php if(count($infoServicos) != 0) { ?>

                <div class="cards">

                    <?php foreach($infoServicos as $infoServico) { ?>

                    <div class="card">

                        <div class="top-card">
                            <div class="name-and-city">
                                <h2><?php echo $infoServico['nome_trabalhador'] ." ". $infoServico['sobrenome_trabalhador'] ?></h2>
                                <p><?php echo $infoServico['cidade_trabalhador'] ?></p>
                            </div>

                            <div class="status">
                                <h2>Status</h2>
                                <p>:</p>
                                <p><?php echo $infoServico['nome_status'] ?></p>
                            </div>
                        </div>

                        <p class="phone"><?php echo $infoServico['telefone_trabalhador'] ?></p>

                        <hr>

                        <p class="description">
                            <?php echo $infoServico['descricao_servico'] ?>
                        </p>

                        <hr>

                        <div class="service-options">
                            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=55 <?php echo $infoServico['telefone_trabalhador'] ?>&text=Olá aqui é <?php echo $infoServico['nome_cliente']; ?> da Quick Work." class="button button-contact-whatsapp" target="blank">
                                <img src="../assets/image/whatsapp.svg" alt="Contato WhatsApp">
                                Contato
                            </a>

                            <button class="button button-close-request">Fechar</button>

                            <div id="container-modal">
                                <div class="modal modal-close-request">
                                    <div class="modal-header">
                                        <h3>Fechar solicitação</h3>
                                        
                                        <img class="close-modal" src="../assets/image/times-solid.svg" alt="Fechar">
                                    </div>

                                    <hr>

                                    <form class="form-close-request" action="../controller/fecharSolicitacaoServico.php" method="POST">
                                        <p>
                                            Ao fechar a solicitação, ela será desfeita e apagada do sistema. Deseja realmente <strong>fechar</strong> essa solicitação?
                                        </p>

                                        <input type="hidden" name="id_servico" id="id_servico" value="<?php echo $infoServico['id_servico'] ?>">

                                        <button type="submit" class="btn btn-close-request">Fechar solicitação</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php } ?>

                </div>

            <?php } else { ?>

            <p class="msg-notfound">Nenhum resultado encontrado</p>

            <?php } ?>
        </div>
        
    <?php } else { header('Location:login-client.php'); } ?>
</body>
</html>

<script src="../assets/js/showModal.js"></script>