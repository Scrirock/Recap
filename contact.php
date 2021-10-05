<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Me contacter</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/10b102adea.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include "menu.php" ?>

    <form action="">
        <fieldset>
            <legend>info perso</legend>

            <label for="name">Nom: </label>
            <input type="text" id="name" required>
            
            <label for="lastname">Prénom: </label>
            <input type="text" id="lastname" required>

            <label for="email">Mail: </label>
            <input type="email" id="email" required>
        </fieldset>
        <fieldset>
            <legend>Message</legend>

            <label for="message">Votre message</label>
            <textarea name="massage" id="message" cols="30" rows="10"></textarea>
        </fieldset>
    </form>

    <script src="script.js"></script>
</body>
</html>