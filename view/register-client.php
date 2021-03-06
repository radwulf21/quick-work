<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Cadastro de cliente</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/page-register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-register">
    <div id="container">
        <header>
            <a href="login-client.php">
                <img src="../assets/image/arrow-left-solid.svg" alt="Voltar">
            </a>
            <h2>Quick Work</h2>
        </header>

        <form action="../controller/cadastrarCliente.php" method="POST">
            <h1>Cadastro de Cliente</h1>

            <fieldset>
                <legend>Dados Pessoais</legend>

                <div class="field-group">
                    <div class="field">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>

                    <div class="field">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" required>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" required>
                    </div>

                    <div class="field">
                        <label for="cidade">Cidade</label>
                        <input list="cidades" name="cidade" id="cidade" placeholder="Selecione">
                        <datalist id="cidades">
                            <option value="Brasília">
                            <option value="Riacho Fundo">
                            <option value="Riacho Fundo II">
                            <option value="Candangolândia">
                            <option value="Samambaia">
                            <option value="Guará">
                            <option value="São Sebastião">
                            <option value="Ceilândia">
                            <option value="Lago Norte">
                            <option value="Sobradinho">
                            <option value="Lago Sul">
                            <option value="Gama">
                            <option value="Santa Maria">
                            <option value="Taguatinga">
                            <option value="Planaltina">
                            <option value="Recanto das Emas">
                            <option value="Cruzeiro">
                            <option value="Brazlândia">
                            <option value="Paranoá">
                            <option value="Núcleo Bandeirante">
                            <option value="Paranoá">
                            <option value="Águas Claras">
                            <option value="Águas Lindas">
                            <option value="Sol Nascente">
                            <option value="Vicente Pires">
                            <option value="Sudoeste">
                            <option value="Park Way">
                        </datalist>                        
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" required>
                    </div>

                    <div class="field">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>
                </div>
            </fieldset>

            <button class="button button-register-client" type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>