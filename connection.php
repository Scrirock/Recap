<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Se connecter</title>
</head>
<body>

<?php
include "menu.php";
session_start();
    if (isset($_SESSION['name'])){
        session_destroy();
        header("Location: /index.php");
    }

    if(isset($_SESSION['error'])) {
        echo "<div id='error'>" . $_SESSION['error'] . "</div>";
        session_destroy();
        session_start();
    }
?>

<div class="formContainer">
    <form action="connection.php" method="POST" id="connexionForm">
        <div>
            <label for="name">Nom: </label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="password">Mot de passe: </label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Se connecter" id="validate">
    </form>
</div>

</body>
</html>

<?php
    require_once "./Controller/Controller.php";
    require_once "./Model/Manager/Manager.php";
    require_once "./DB.php";
    if ($_POST){
        (new Controller())->connexion($_POST);
    }