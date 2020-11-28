<header>
    <div class="items">
        <h2>Quick Work</h2>

        <div class="options">
            <h2><h2><?php echo $_SESSION['nome_trabalhador']; echo " "; echo  $_SESSION['sobrenome_trabalhador']; ?></h2></h2>

            <a href="service-remaining.php">
                <img src="../assets/image/wrench-solid.svg" alt="Serviços remanescentes">
            </a>
            <a href="update-info-worker.php">
                <img src="../assets/image/user-cog-solid.svg" alt="Atualizar dados">
            </a>
            <a href="../controller/logoff.php">
                <img src="../assets/image/sign-out-alt-solid.svg" alt="Sair">
            </a>
        </div> 
    </div>
</header>