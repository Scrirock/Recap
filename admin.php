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
session_start();
include "menu.php";
if(isset($_SESSION['role']) && $_SESSION['role'] === "admin"){
?>

    <a href="section.php" class="linkAdd">Ajouter une compétence</a>
    <a href="ul.php" class="linkAdd">Ajouter un element dans la liste</a>
    <a href="dl.php" class="linkAdd">Ajouter une définition</a>


<?php
}
else{
    echo "<div id='error'>vous n'avez pas la permission d'être ici</div>";
}
?>
</body>
</html>
