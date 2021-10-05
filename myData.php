<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche personnel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/10b102adea.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include "menu.php" ?>

    <div id="dataCard">
        <div id="flipContainer">
            <div id="card">
                <div id="front">
                    <figure>
                        <img src="moi.png" alt="Une photo de moi" width="250" height="250">
                        <figcaption>Une photo de moi</figcaption>
                    </figure>
                </div>
                <div id="back">
                    <p>Dos de la carte</p>
                </div>
            </div>
        </div>
        <div>
            <p><span class="info">Nom</span>: Roger</p>
            <p><span class="info">Prénom</span>: Roger</p>
            <p><span class="info">Age</span>: 54 ans</p>
        </div>
        <p id="passion">
            Ma plus grande passion c'est de collectionner des petits cailloux. J'aime me balader le long des chemin
            pour les rammaser. Pour le moment j'en ai 7548 mais ça augmente de jour en jour.
        </p>
    </div>

    <script src="script.js"></script>
</body>
</html>