<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Trabalhadores</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-workers.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-workers">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Cliente") { ?>
        <?php require_once "../controller/buscarTrabalhadores.php"; ?>

        <?php require_once "header-client.php"; ?>

        <div id="container">
            <h1>Trabalhadores disponíveis</h1>

            <hr>

            <?php if(count($trabalhadores) != 0) { ?>

                <div class="cards">

                    <?php foreach($trabalhadores as $trabalhador) { ?>

                    <div class="card">
                        <div class="name-and-city">
                            <h2><?php echo $trabalhador['nome_trabalhador'] ." ". $trabalhador['sobrenome_trabalhador'] ?></h2>
                            <p><?php echo $trabalhador['cidade_trabalhador'] ?></p>
                        </div>

                        <p class="category"><?php echo $trabalhador['nome_categoria'] ?></p>

                        <hr>

                        <p class="description">
                            <?php echo $trabalhador['desc_trabalhador'] ?>
                        </p>

                        <hr>
                        
                        <button class="button-request-service">Solicitar serviços</button>

                        <div id="container-modal">
                            <div class="modal modal-desc-service">
                                <div class="modal-header">
                                    <h3>Descrição do serviço</h3>
                                    
                                    <img class="close-modal" src="../assets/image/times-solid.svg" alt="Fechar">
                                </div>

                                <hr>

                                <form class="form-desc-service" action="../controller/cadastrarServico.php" method="POST">
                                    <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $_SESSION['id_cliente'] ?>">
                                    <input type="hidden" name="trabalhador_id" id="trabalhador_id" value="<?php echo $trabalhador['id_trabalhador'] ?>">
                                    <input type="hidden" name="categoria_id" id="categoria_id" value="<?php echo $trabalhador['categoriad_id'] ?>">

                                    <p>
                                        Preencha o campo com uma <strong>descrição</strong> breve do seu <strong>problema.</strong>
                                    </p>

                                    <textarea name="descricao" id="descricao" required></textarea>

                                    <button type="submit" class="btn btn-send-request">Enviar solicitação</button>
                                </form>
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