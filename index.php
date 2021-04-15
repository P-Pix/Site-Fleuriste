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
        <script type = "text/javascript" src = "javascript/recherche_page.js"></script>
        <script type = "text/javascript" src = "javascript/function.js"></script>
    </head>
    <body>
        <?php include("php/header.php") ?>
        <main>
        </main>
        <?php include("php/footer.php") ?>
        <?php include("php/js.php") ?>
    </body>
</html>