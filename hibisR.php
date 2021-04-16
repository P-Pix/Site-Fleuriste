<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <meta  charset = "UTF-8" />
        <title>Hibiscus Rouge</title>
        <link rel = "stylesheet" href="style/stylecom.css">
        <link rel = "stylesheet" href="style/styleindex.css">
        <link rel = "icon" href = "images/logo.png">
        <script type = "text/javascript" src = "javascript/function.js"></script>
        <script type = "text/javascript" src = "javascript/recherche_page.js"></script>
    </head>
    <body>
        <?php include("php/header.php") ?>
        <main>
            <section id = "produit">
                <div class = "alpha_div">
                    <img src = "images/logo.png" alt = "hibiscus rouge">
                    <article>
                        <p>
                            Hibiscus de très grande qualité.
                            Parfait pour ravire toute la famille autour de magnifiques fleures.
                        </p>
                        <p>
                            Ces cinq pétales vous ferons vivres d'intense moments de béhatitude.
                            De nombreux bouquets sont composés à partir de cette fleure.
                        </p>
                    </article>
                    <div>
                        <p class = "prix">Prix unitaire : 19.95 €</p>
                        <input type = "number" class = "nombre" min = "1" placeholder = "Nombre de fleur voulue">
                        <div class = "totaldiv"><input type = "submit" class = "total" value = "total"></div>
                        <input type = "submit" value = "acheter" class = "achat">
                    </div>
                </div>
                <div class = "alpha_div">
                    <img src = "images/logo.png" alt = "hibiscus rouge">
                    <article>
                        <p>
                            Hibiscus de très grande qualité.
                            Parfait pour ravire toute la famille autour de magnifiques fleures.
                        </p>
                        <p>
                            Ces cinq pétales vous ferons vivres d'intense moments de béhatitude.
                            De nombreux bouquets sont composés à partir de cette fleure.
                        </p>
                    </article>
                    <div> 
                    <p class = "prix">Prix unitaire : 19.95 €</p>
                        <input type = "number" class = "nombre" min = "1" placeholder = "Nombre de fleur voulue">
                        <div class = "totaldiv"><input type = "submit" class = "total" value = "total"></div>
                        <input type = "submit" value = "acheter" class = "achat">
                    </div>
                </div>
            </section>
        </main>
        <?php include("php/footer.php") ?>
        <?php include("php/js.php") ?>
    </body>
</html>