<header>
    <a href = "index.php">
        <img src = "images/logo.png" alt = "Fleur libre">
    </a>
    <ul id = "liste">
        <li>Hibiscus
            <ul class = "first">
                <li><a href = "hibisR.php">Hibiscus Rouge</a></li>
                <li><a href = "hibisB.php">Hibiscus bleu</a></li>
            </ul>
        </li>
        <li>Coquelicot
            <ul class = "first">
                <li><a href = "coqueR.php">Coquelicot Rouge</a></li>
            </ul>
        </li>
    </ul>
    <ul id = "compte">
        <li><?php
                if($_SESSION['nom'] == '')
                {
                    ?>
                    <a href = "signup.php">Créer un compte</a></li>
                    <?php            
                }
                else
                {
                    ?>
                    <a href = "compte.php"><?php echo $_SESSION['nom']?></a></li>
                    <?php
                }
            ?>
        <li><a href = "panier.php">Mon panier <?php echo $_SESSION['panier']?></a></li>
    </ul>
    <section>
        <input type = "text" id = "recherche" placeholder = "Recherche">
        <input type = "submit" id = "recherche_exe" value = "Rechercher">
    </section>
</header>