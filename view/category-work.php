<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Categorias</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-category-work.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-category-work">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Cliente") { ?>

        <?php require_once "header-client.php"; ?>

        <div id="container">
            <h1>Selecione uma categoria</h1>

            <hr>

            <div class="cards">
                <a class="card" href="workers.php?categoria=1">
                    <h2>Hidráulica</h2>
                </a>

                <a class="card" href="workers.php?categoria=2">
                    <h2>Elétrica</h2>
                </a>

                <a class="card" href="workers.php?categoria=3">
                    <h2>Construção</h2>
                </a>

                <a class="card" href="workers.php?categoria=4">
                    <h2>Marcenaria</h2>
                </a>

                <a class="card" href="workers.php?categoria=5">
                    <h2>Serralheria</h2>
                </a>

                <a class="card" href="workers.php?categoria=6">
                    <h2>Pintura</h2>
                </a>
            </div>
        </div>

    <?php } else { header('Location:login-client.php'); } ?>
</body>
</html>