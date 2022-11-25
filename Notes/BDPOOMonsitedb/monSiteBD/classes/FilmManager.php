<?php

// gére le CRUD pour les films
class FilmManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Film $film)
    {
        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) ";
        $sql .= " VALUES (NULL , :titre, :duree, :description, :dateSortie, :image)";

        $stmt = $this->cnx->prepare($sql);

        $stmt->bindValue(":titre", $film->getTitre());
        $stmt->bindValue(":duree", $film->getDuree(), PDO::PARAM_INT);
        $stmt->bindValue(":description", $film->getDescription());
        $stmt->bindValue(":dateSortie", $film->getDateSortie()->format("y-m-d"));

        // CORRIGER pour l'upload
        // obtenir un nom pour l'image`
        $nomFichier = $this->uploadImage();

        $stmt->bindValue(":image", $nomFichier);

        $stmt->execute();

        // pour debug
        // var_dump ($stmt->errorInfo());
    }

    // select par titre, renvoie un tableau d'objets
    public function findByTitre(string $titre, bool $titreExact = false): array
    {
        // si on veut chercher par un bout du titre
        if (!$titreExact) {
            $titre = "%" . $_POST['titre'] . "%";
        }


        $sql = "SELECT * FROM film WHERE titre LIKE :titre ";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $titre);
        $stmt->execute();

        $tableauFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // créer un tableau d'objets Film
        $tableauObjectsFilm = [];
        foreach ($tableauFilms as $arrayFilm) {
            $tableauObjectsFilm[] = new Film($arrayFilm);
        }

        return ($tableauObjectsFilm);
    }

    // update
    public function update(Film $film)
    {

        $sql = "UPDATE film SET titre=:titre, duree=:duree, description=:description, dateSortie=:dateSortie WHERE id =:id";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $film->getTitre());
        $stmt->bindValue(":duree", $film->getDuree());
        $stmt->bindValue(":description", $film->getDescription());
        $stmt->bindValue(":dateSortie", $film->getDateSortie()->format("y-m-d"));
        $stmt->bindValue(":id", $film->getId());
        $stmt->execute();

        
    }


    // findBy - chercher par filtre


    // select par id, renvoie un objet ou null
    public function find(int $id)
    {

        $sql = "SELECT * FROM film WHERE id=:id";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        $res = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($res) {
            // on a trouve un film avec cet id
            $res = new Film($res);
        }

        return ($res); // p-e un objet ou false
    }



    // obtenir tous les films sous la forme d'un array d'objets
    // public function findAll(): array
    // {
    //     // 1. obtenir tous les films de la BD 
    //     // sous la forme d'un array normal


    // }


    public function delete(Film $film)
    {
        // effacer de la BD
        $sql = "DELETE FROM film WHERE :id = id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $film->getId(), PDO::PARAM_INT);
        $stmt->execute();

        // (effacer le fichier d'image dans le disque)
        // obtenir le nom du fichier d'image
        $fichierImg = $film->getImage();
        // effacer le fichier du disque
        unlink('./img/' . $fichierImg);
    }




    // upload du fichier dans le dossier ./img
    // renvoie le nom du fichier (pour le stocker dans la BD)
    public function uploadImage(): string
    {
        // Choisir un dossier pour le fichier
        $uploadDossier = "./img";
        // On essaie de générer un nom de fichier unique
        $idUnique = uniqid() . date("Y-m-d-H-i-s");
        // Créer le nom du fichier
        $nomFichier = $idUnique . basename($_FILES['image']['name']);

        // Déplacer le fichier du dossier tmp du serveur vers un dossier réel
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadDossier . "/" . $nomFichier)) {
            throw new Exception("Problème d'upload");
        }
        return $nomFichier;
    }
}
