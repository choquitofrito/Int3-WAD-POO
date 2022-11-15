<?php 
session_start();
?>
<header>
    <nav class="nav">
        <a class="nav-link" href="./index.php?p=accueil">Accueil</a>
        <a class="nav-link" href="./index.php?p=listeFilms">Liste de films</a>
        <a class="nav-link" href="./index.php?p=formRecherche">Chercher un film</a>
        <a class="nav-link" href="./index.php?p=insertFormulaire">Insérer un film</a>
            <?php
                if (isset($_SESSION['loginConnecte'])){
                    // $_SESSION['loginConnecte'] 
                    echo "<a class='nav-link' href='./logout.php'>Se deconnecter</a>";
                }
                else {
                    header ("location: ./login.php");
                }
            ?>
     </nav>
</header>