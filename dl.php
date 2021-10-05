<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Admin zone</title>
</head>
<body>

<?php
include "menu.php";
if(isset($_SESSION['role']) && $_SESSION['role'] === "admin"){
    ?>

    <div class="formContainer">
        <form action="dl.php" method="POST" id="connexionForm">
            <div>
                <label for="titleD">Titre: </label>
                <input type="text" id="titleD" name="titleD">
            </div>
            <div>
                <label for="contentD">Contenu: </label>
                <textarea type="text" id="contentD" name="contentD" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Ajouter">
        </form>
    </div>


    <?php
}
else{
    echo "<div id='error'>vous n'avez pas la permission d'être ici</div>";
}
?>
</body>
</html>

<?php
require_once "./Model/Manager/Manager.php";
require_once "./DB.php";
if ($_POST){
    (new Manager())->addDl($_POST);
}