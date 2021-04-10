<?php
    session_start();

    $_SESSION['nom'] = 'Créer un compte';
?>

<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <meta  charset = "UTF-8" />
        <title>Fleuriste</title>
        <link rel = "stylesheet" href="style/stylecom.css">
        <link rel = "stylesheet" href="style/styleindex.css">
        <link rel = "icon" href = "images/logo.png">
        <script type = "text/javascript" src = "javascript/barre.js"></script>
    </head>
    <body>
        <header>
            <?php include("php/header.php") ?>
        </header>
        <main>
        </main>
        <footer>
            <?php include("php/footer.php") ?>
        </footer>
        <?php include("php/js.php") ?>
    </body>
</html>