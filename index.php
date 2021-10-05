<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/10b102adea.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php include "menu.php" ?>

    <div class="container">
        <h1>Bienvenue</h1>
        <h2>Sur mon CV</h2>
        <h3>En ligne</h3>

        <a href="https://www.google.com/" id="link">Voulez vous retourner sur google ?</a>

        <div id="dl"></div>

        <div id="ul"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>