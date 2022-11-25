<?php

// gére le CRUD pour les films
class Utilisateur
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Film $film)
    {
        // $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) ";
        // $sql .= " VALUES (NULL , :titre, :duree, :description, :dateSortie, :image)";

        // $stmt = $this->cnx->prepare($sql);

        // $stmt->bindValue(":titre", $film->getTitre());
        // $stmt->bindValue(":duree", $film->getDuree(), PDO::PARAM_INT);
        // $stmt->bindValue(":description", $film->getDescription());
        // $stmt->bindValue(":dateSortie", $film->getDateSortie()->format("y-m-d"));

        // // CORRIGER pour l'upload
        // // obtenir un nom pour l'image`
        // $nomFichier = $this->uploadImage();

        // $stmt->bindValue(":image", $nomFichier);

        // $stmt->execute();

        // pour debug
        // var_dump ($stmt->errorInfo());
    }

    // select par titre, renvoie un tableau d'objets
    public function findByLogin(string $login, bool $titreExact = false): array
    {
        // si on veut chercher par un bout du titre
        // if (!$titreExact) {
        //     $titre = "%" . $_POST['titre'] . "%";
        // }


        // $sql = "SELECT * FROM film WHERE titre LIKE :titre ";

        // $stmt = $this->cnx->prepare($sql);
        // $stmt->bindValue(":titre", $titre);
        // $stmt->execute();

        // $tableauFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // // créer un tableau d'objets Film
        // $tableauObjectsFilm = [];
        // foreach ($tableauFilms as $arrayFilm) {
        //     $tableauObjectsFilm[] = new Film($arrayFilm);
        // }

        // return ($tableauObjectsFilm);
    }

}
