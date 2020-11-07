<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Serviços solicitados</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-service.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-service">
    <?php require_once "header-client.php"; ?>

    <div id="container">
        <h1>Serviços solicitados</h1>

        <hr>

        <div class="cards">

            <div class="card">

                <div class="top-card">
                    <div class="name-and-city">
                        <h2>Marcos Guedes</h2>
                        <p>Taguatinga</p>
                    </div>

                    <div class="status">
                        <h2>Status</h2>
                        <p>:</p>
                        <p>Pendente</p>
                    </div>
                </div>

                <p class="phone">(61)9 9999-9999</p>

                <hr>

                <p class="description">
                    Olá Márcio, venho por meio deste solicitar seus serviços em minha residência. 
                    Estou com um problema no meu banheiro. A descarga está vazando. Solicito confirmação de serviço.
                </p>

                <hr>

                <div class="service-options">
                    <a href="#" class="button button-contact-whatsapp">
                        <img src="../assets/image/whatsapp.svg" alt="Contato WhatsApp">
                        Contato
                    </a>

                    <form action="#" method="" class="form-close-request">
                        <input type="hidden" value="">
                        <button type="submit" class="button button-close-request">Fechar</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>
</html>