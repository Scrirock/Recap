<?php session_start()?>
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
        <form action="ul.php" method="POST" id="connexionForm">
            <div>
                <label for="contentU">Contenu: </label>
                <textarea type="text" id="contentU" name="contentU" cols="30" rows="10"></textarea>
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
    (new Manager())->addUl($_POST);
}