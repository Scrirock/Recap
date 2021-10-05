<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes compétences</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/10b102adea.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <header>
        <?php include "menu.php" ?>
    </header>

    <main>
        <div>
            <section>
                <p class="littleTitle">Diplômes <span class="arrow"> ► </span></p>
                <div>

                </div>
            </section>
            <section>
                <p class="littleTitle">Hobby <span class="arrow"> ► </span></p>
                <div>

                </div>
            </section>
            <section>
                <p class="littleTitle">Expérience <span class="arrow"> ► </span></p>
                <div>

                </div>
            </section>
        </div>
        <aside>
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Objectif à réaliser</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Acheter une voiture de luxe</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Diriger un pays</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Construire un chateaux</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Voyager au Canada</td>
                        <td>✔️</td>
                    </tr>
                    <tr>
                        <td>Écrire un livre</td>
                        <td>✔️</td>
                    </tr>
                    <tr>
                        <td>Gagner au loto</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </aside>
    </main>

    <script src="script.js"></script>
</body>
</html>