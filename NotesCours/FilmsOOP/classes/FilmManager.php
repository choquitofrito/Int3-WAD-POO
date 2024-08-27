<?php
include "./connexion/db.php";

class FilmManager
{
    private PDO $cnx;

    public function __construct()
    {

        try {
            $this->cnx = new PDO(DSN, USERNAME, PASSWORD);
        } catch (Exception $e) {
            echo "Erreur de connexion";
            die();
        }
    }
    public function insert(Film $film)
    {
        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) VALUES " .
            "(null, :titre, :duree, :description, :dateSortie, :image)";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $film->getTitre());
        $stmt->bindValue(":duree", $film->getDuree());
        $stmt->bindValue(":description", $film->getDescription());
        $stmt->bindValue(
            ":dateSortie",
            $film->getDateSortie()->format("Y-m-d")
        );
        $stmt->bindValue(":image", $film->getImage());

        $stmt->execute();
        $id = $this->cnx->lastInsertId(); // on récupére l'id du dernier enregistrement inséré dans la BD
        $film->setId($id);
    }

    public function delete(Film $film):void
    {
        $sql = "DELETE FROM film WHERE id=:id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $film->getId());
        $stmt->execute();
    }

    public function findAll():array
    {
        $sql = "SELECT * FROM film";
        $stmt = $this->cnx->prepare($sql);
        $stmt->execute();
        $arrayArraysFilm = $stmt->fetchAll(PDO::FETCH_ASSOC); // un array d'arrays contenant les infos de chaque film. Pas d'objets!!!


        $arrayObjetsFilm = []; // notre array d'objets film

        foreach ($arrayArraysFilm as $arrayFilm) {
            $arrayFilm['dateSortie'] = 
                    new DateTime ($arrayFilm['dateSortie']);
            $arrayObjetsFilm[] = new Film($arrayFilm);
        }
        return ($arrayObjetsFilm);
    }

    public function update (Film $unFilm){
        $sql = "UPDATE film SET titre=:titre, duree=:duree, description=:description, dateSortie=:dateSortie WHERE id=:id";
        
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $unFilm->getTitre());
        $stmt->bindValue(":duree", $unFilm->getDuree());
        $stmt->bindValue(":description", $unFilm->getDescription());
        $stmt->bindValue(":dateSortie", $unFilm->getDateSortie()->format("Y-m-d"));
        $stmt->bindValue(":id", $unFilm->getId());

        $stmt->execute();
        
    }



}
