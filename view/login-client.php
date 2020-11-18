<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Login do cliente</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/page-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-login">
    <div id="container">
        <header>
            <a href="index.php">
                <img src="../assets/image/arrow-left-solid.svg" alt="Voltar">
            </a>
            <h2>Quick Work</h2>
        </header>

        <form action="../controller/loginCliente.php" method="POST">
            <fieldset>
                <legend>Login - Cliente</legend>

                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
            </fieldset>

            <button class="button button-login-client" type="submit">
                Entrar
            </button>

            <hr>

            <a class="button button-create-account" href="register-client.php">
                Criar nova conta
            </a>
        </form>
    </div>
</body>
</html>