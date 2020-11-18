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

        <?php require_once "header-client.php"; ?>

        <div id="container">
            <form action="#" method="" class="form-search">
                <input type="text" name="cidade" id="cidade" placeholder="Informe uma cidade" required>

                <button type="submit" class="search-city">
                    <img src="../assets/image/search-solid.svg" alt="Pesquisar">
                </button>
            </form>

            <hr>

            <h1>Trabalhadores disponíveis</h1>

            <div class="cards">
                <div class="card">
                    <div class="name-and-city">
                        <h2>Marcos Guedes</h2>
                        <p>Taguatinga</p>
                    </div>

                    <p class="category">Hidráulica</p>

                    <hr>

                    <p class="description">
                        Sou um trabalhador muito competente e experiente. Faço os meus serviços com excelência e nenhum cliente
                        meu saiu insatisfeito com algum dos meus serviços. Tenho muita aptidão para trabalhar, pois minha 
                        família depende disso.
                    </p>

                    <hr>
                    
                    <form action="#" method="" class="form-request-service">
                        <input type="hidden" value="">
                        <button type="submit" class="button-request-service">Solicitar serviços</button>
                    </form>
                </div>

                <div class="card">
                    <div class="name-and-city">
                        <h2>Marcos Guedes</h2>
                        <p>/</p>
                        <p>Taguatinga</p>
                    </div>

                    <p class="category">Hidráulica</p>

                    <hr>

                    <p class="description">
                        Sou um trabalhador muito competente e experiente. Faço os meus serviços com excelência e nenhum cliente
                        meu saiu insatisfeito com algum dos meus serviços. Tenho muita aptidão para trabalhar, pois minha 
                        família depende disso.
                    </p>

                    <hr>
                    
                    <form action="#" method="" class="form-request-service">
                        <input type="hidden" value="">
                        <button type="submit" class="button-request-service">Solicitar serviços</button>
                    </form>
                </div>
            </div>
        </div>

    <?php } else { header('Location:login-client.php'); } ?>
</body>
</html>