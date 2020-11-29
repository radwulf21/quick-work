<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Serviços remanescentes</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-service.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-service">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Trabalhador") { ?>
        <?php require_once "../controller/buscarServicosRemanescentes.php"; ?>

        <?php require_once "header-worker.php"; ?>

        <div id="container">
            <h1>Serviços remanescentes</h1>

            <hr>

            <?php if(count($infoServicos) != 0) { ?>

                <div class="cards">

                    <?php foreach($infoServicos as $infoServico) { ?>

                    <div class="card">

                        <div class="top-card">
                            <div class="name-and-city">
                                <h2><?php echo $infoServico['nome_cliente'] ." ". $infoServico['sobrenome_cliente'] ?></h2>
                                <p><?php echo $infoServico['cidade_cliente'] ?></p>
                            </div>

                            <div class="status">
                                <h2>Status</h2>
                                <p>:</p>
                                <p><?php echo $infoServico['nome_status'] ?></p>
                            </div>
                        </div>

                        <p class="phone"><?php echo $infoServico['telefone_cliente'] ?></p>

                        <hr>

                        <p class="description">
                            <?php echo $infoServico['descricao_servico'] ?>
                        </p>

                        <hr>

                        <div class="service-options">
                            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=55 <?php echo $infoServico['telefone_cliente'] ?>&text=Olá aqui é <?php echo $infoServico['nome_trabalhador']; ?>, trabalhador da Quick Work." class="button button-contact-whatsapp" target="blank">
                                <img src="../assets/image/whatsapp.svg" alt="Contato WhatsApp">
                                Contato
                            </a>
                        
                            <button type="submit" class="button button-confirm-service">Confirmar</button>

                            <div id="container-modal-confirm-service">
                                <div class="modal modal-confirm-service">
                                    <div class="modal-header">
                                        <h3>Confirmar serviço</h3>
                                        
                                        <img class="close-modal" src="../assets/image/times-solid.svg" alt="Fechar">
                                    </div>

                                    <hr>

                                    <form class="form-confirm-service" action="../controller/atualizarStatusServico.php" method="POST">
                                        <p>
                                            Ao confirmar o serviço, você confirmará que irá realizar o serviço para o cliente. Deseja realmente <strong>confirmar</strong> o serviço?
                                        </p>

                                        <input type="hidden" name="id_servico" id="id_servico" value="<?php echo $infoServico['id_servico'] ?>">
                                        <input type="hidden" name="confirmar">

                                        <button type="submit" class="btn btn-confirm-service">Confirmar serviço</button>
                                    </form>
                                </div>
                            </div>

                            <button type="submit" class="button button-finish-service">Terminar</button>

                            <div id="container-modal-finish-service">
                                <div class="modal modal-finish-service">
                                    <div class="modal-header">
                                        <h3>Terminar serviço</h3>
                                        
                                        <img class="close-modal" src="../assets/image/times-solid.svg" alt="Fechar">
                                    </div>

                                    <hr>

                                    <form class="form-finish-service" action="../controller/atualizarStatusServico.php" method="POST">
                                        <p>
                                            Terminar o serviço significa que o serviço do cliente foi concluído. Deseja realmente <strong>terminar</strong> o serviço?
                                        </p>

                                        <input type="hidden" name="id_servico" id="id_servico" value="<?php echo $infoServico['id_servico'] ?>">
                                        <input type="hidden" name="terminar">

                                        <button type="submit" class="btn btn-finish-service">Terminar serviço</button>
                                    </form>
                                </div>
                            </div>
                            
                            <button type="submit" class="button button-close-request">Fechar</button>

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

    <?php } else { header('Location:login-worker.php'); } ?>
</body>
</html>

<script src="../assets/js/showModal.js"></script>