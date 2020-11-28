<header>
    <div class="items">
        <h2>Quick Work</h2>

        <div class="options">
            <h2><?php echo $_SESSION['nome_cliente']; echo " "; echo  $_SESSION['sobrenome_cliente']; ?></h2>

            <a href="category-work.php">
                <img src="../assets/image/globe-solid.svg" alt="Buscar trabalhadores">
            </a>
            <a href="service-request.php">
                <img src="../assets/image/wrench-solid.svg" alt="Serviços requisitados">
            </a>
            <a href="update-info-client.php">
                <img src="../assets/image/user-cog-solid.svg" alt="Atualizar dados">
            </a>
            <a href="../controller/logoff.php">
                <img src="../assets/image/sign-out-alt-solid.svg" alt="Sair">
            </a>
        </div> 
    </div>
</header>