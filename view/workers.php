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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-workers">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Cliente") { ?>
        <?php require_once "../controller/buscarTrabalhadores.php"; ?>

        <?php require_once "header-client.php"; ?>

        <div id="container">
            <h1>Trabalhadores disponíveis</h1>

            <hr>

            <?php foreach($trabalhadores as $trabalhador) { ?>

            <div class="cards">
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
                    
                    <form action="#" method="" class="form-request-service">
                        <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $_SESSION['id_cliente'] ?>">
                        <input type="hidden" name="id_trabalhador" id="id_trabalhador" value="<?php echo $trabalhador['id_trabalhador'] ?>">
                        <input type="hidden" name="categoriad_id" id="categoriad_id" value="<?php echo $trabalhador['categoriad_id'] ?>">
                        <button type="submit" class="button-request-service">Solicitar serviços</button>
                    </form>
                </div>
            </div>

            <?php } ?>

        </div>

    <?php } else { header('Location:login-client.php'); } ?>
</body>
</html>