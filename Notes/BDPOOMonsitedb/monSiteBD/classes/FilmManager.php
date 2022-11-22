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
        // obtenir un nom pour l'image`
        $nomFichier = $this->uploadImage();

        $stmt->bindValue(":image", $nomFichier);

        $stmt->execute();

        // pour debug
        // var_dump ($stmt->errorInfo());
    }

    // obtenir tous les films sous la forme d'un array d'objets
    public function findAll(): array
    {
        // 1. obtenir tous les films de la BD 
        // sous la forme d'un array normal
        
        
    }


    public function delete(Film $film)
    {
        // effacer de la BD


        // (effacer le fichier d'image dans le disque)

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
