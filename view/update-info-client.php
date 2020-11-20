<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Work - Atualizar dados de cliente</title>

    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/page-update-info.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-update-info">
    <?php if (isset($_SESSION['login']) && $_SESSION['usuario'] == "Cliente") { ?>

        <?php require_once '../controller/buscarDadosCliente.php'; ?>

        <?php require_once "header-client.php"; ?>

        <div id="container">

            <div class="card">
                <h1>Atualizar dados de cliente</h1>

                <form action="../controller/atualizarDadosCliente.php" method="POST" class="form-personal-data">
                    <fieldset>
                        <legend>Dados Pessoais</legend>

                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id_cliente']; ?>">

                        <div class="field-group">
                            <div class="field">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" value="<?php echo $dadosCliente[0]; ?>" required>
                            </div>

                            <div class="field">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" name="sobrenome" id="sobrenome"value="<?php echo $dadosCliente[1]; ?>" required>
                            </div>
                        </div>

                        <div class="field-group">
                            <div class="field">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" value="<?php echo $dadosCliente[2]; ?>" required>
                            </div>

                            <div class="field">
                                <label for="cidade">Cidade</label>
                                <input list="cidades" name="cidade" id="cidade" placeholder="Selecione" value="<?php echo $dadosCliente[3]; ?>" required>
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
                                <input type="text" name="email" id="email" value="<?php echo $dadosCliente[4]; ?>" required>
                            </div>
                        </div>
                    </fieldset>

                    <button class="button button-update-data" type="submit">Atualizar dados</button>
                </form>

                <hr>

                <form action="../controller/atualizarSenhaCliente.php" method="POST" class="form-update-password">
                    <fieldset>

                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id_cliente']; ?>">

                        <div class="field-group">
                            <div class="field">
                                <label for="nome">Nova senha</label>
                                <input type="password" name="senha" id="senha" required>
                            </div>
                        </div>

                        <div class="field-group">
                            <div class="field">
                                <label for="nome">Confirme a senha</label>
                                <input type="password" name="confirmacao_senha" id="confirmacao_senha" required>
                            </div>
                        </div>
                    </fieldset>

                    <button class="button button-update-password" type="submit">Atualizar senha</button>
                </form>

                <hr>
                
                <form action="../controller/apagarContaCliente.php" method="POST" class="form-delete-account">
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id_cliente']; ?>">
                    <button type="submit" class="button button-delete-account">Apagar conta</button>
                </form>
            </div>

        </div>

    <?php } else { header('Location:login-client.php'); } ?>
</body>
</html>