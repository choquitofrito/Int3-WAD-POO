<?php

class FilmManager
{




    public function insert(Film $film)
    {

        include "./connexion/db.php";

        try {
            $cnx = new PDO(DSN, USERNAME, PASSWORD);
        } catch (Exception $e) {
            echo "Erreur de connexion";
            die();
        }

        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) VALUES " .
            "(null, :titre, :duree, :description, :dateSortie, :image)";

        $stmt = $cnx->prepare($sql);
        $stmt->bindValue(":titre", $film->getTitre() );
        $stmt->bindValue(":duree",$film->getDuree());
        $stmt->bindValue(":description",$film->getDescription() );
        $stmt->bindValue(":dateSortie", $film->getDateSortie() );
        $stmt->bindValue(":image", $film->getImage());

        $stmt->execute();


        
    }
}
