<nav>
    <div>
        <a class="menu" href="index.php">Accueil</a>
        <a class="menu" href="myData.php">Fiche personnel</a>
        <a class="menu" href="mySkill.php">Mes compétences</a>
        <a class="menu" href="contact.php">Me contacter</a>
        <?php
        if ($_SESSION["role"] === "admin"){ ?>
            <a class="menu" href="admin.php">Panel</a>
        <?php } ?>
        <a class="menu" href="connection.php">
            <?php
            if (isset($_SESSION['name'])) echo "Déconnexion";
            else echo "Connexion";
            ?>
        </a>
    </div>
</nav>