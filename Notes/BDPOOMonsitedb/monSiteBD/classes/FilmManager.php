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
        // $nomFichier = $this->uploadImage();
        $stmt->bindValue(":image", "");

        // $stmt->bindValue(":image", $nomFichier);

        $stmt->execute();

        // pour debug
        // var_dump ($stmt->errorInfo());
        // nous devons donner un id à l'entité qui vient d'être insérée:
        $film->hydrate(['id' => $this->cnx->lastInsertId()]);
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


    // findByCustom - chercher par filtre
    public function findByCustom(array $filtres)
    {

        // $sql = "SELECT * FROM Film WHERE titre = :titre and asdfsdaf Ansdafaf"
        $sql = "SELECT * FROM Film";

        // On efface toutes les valeurs vides de l'array de filtres
        // https://www.php.net/manual/en/function.array-filter.php
        // array_filter sert à filtrer un array en utilisant un callback 
        // (ex: function qui renvoie si la valeur en cours est > 0).
        // Si on ne specifie pas un callback, il
        // efface toutes les valeurs vides d'un array
        $filtres = array_filter($filtres);

        $arrayStringsFilters = [];
        // s'il y a au moins un critére de recherche ()
        if (count($filtres) > 0) {
            // array qui contiendra tous les parametres à rajouter dans la query
            if (isset($filtres['titre'])) {
                $arrayStringsFilters[] = 'LOWER(titre) LIKE :titre'; // le rendre insensible a la casse
            }
            if (isset($filtres['minDuree'])) {
                $arrayStringsFilters[] = 'duree >= :minDuree';
            }
            if (isset($filtres['maxDuree'])) {
                $arrayStringsFilters[] = 'duree <= :maxDuree';
            }
            if (isset($filtres['description'])) {
                $arrayStringsFilters[] = 'description = :description';
            }
            if (isset($filtres['dateMin'])) {
                $arrayStringsFilters[] = 'dateSortie >= :dateMin';
            }
            if (isset($filtres['dateMax'])) {
                $arrayStringsFilters[] = 'dateSortie <= :dateMax';
            }

            // créer un string contenant tous les éléments de l'array séparés par " AND "
            $strFiltres = implode(" AND ", $arrayStringsFilters);

            $sql .= " WHERE " . $strFiltres;
        }


        $stmt = $this->cnx->prepare($sql);

        // var_dump($sql);

        // rajouter tous les bindParams
        foreach ($filtres as $key => $val) {
            echo ":" . $key;
            if (is_numeric($val)) {
                $stmt->bindValue(":" . $key, (int)$val);
            } else {
                if ($key == "titre") {
                    $val = strtolower("%" . $val . "%"); // recherche souple et insensible à la casse
                }
                $stmt->bindValue(":" . $key, $val);
            }
        }
        $stmt->execute();
        $arrayFilms = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // créer array d'objets
        $arrayObjetsFilms = [];
        foreach ($arrayFilms as $arrayFilm) {
            $arrayObjetsFilms[] = new Film($arrayFilm);
        }
        return $arrayObjetsFilms;
    }

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
