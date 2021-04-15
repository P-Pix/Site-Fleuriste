<header>
    <a href = "index.php">
        <img src = "images/logo.png" alt = "Fleur libre">
    </a>
    <ul id = "liste">
        <li>Hibiscus
            <ul class = "first">
                <li><a href = "suite/hibiscus/rouge.php">Hibiscus Rouge</a></li>
                <li><a href = "#">Hibiscus bleu</a></li>
            </ul>
        </li>
        <li>Coquelicot
            <ul class = "first">
                <li><a href = "suite/coquelicot/rouge.php">Coquelicot Rouge</a></li>
            </ul>
        </li>
    </ul>
    <ul id = "compte">
        <li><a href = "compte.php"><?php echo $_SESSION['nom'] ?></a></li>
        <li><a href = "panier.php">Mon panier</a></li>
    </ul>
    <section>
        <input type = "text" id = "recherche" placeholder = "Recherche">
        <input type = "submit" id = "recherche_exe" value = "Rechercher">
    </section>
</header>