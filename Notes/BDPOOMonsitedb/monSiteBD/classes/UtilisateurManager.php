<?php

// gére le CRUD pour les films
class UtilisateurManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Utilisateur $utilisateur)
    {
        // Lancer l'insertion de l'utilisateur dans le tableau "user"
        $sql = "INSERT INTO utilisateur (id, nom, login, password) VALUES " .
            "(null , :nom , :login , :password) ";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":nom", $utilisateur->getNom());
        $stmt->bindValue(":login", $utilisateur->getLogin());

        $password = password_hash($utilisateur->getPassword(), PASSWORD_DEFAULT, ['cost' => 12]);

        $stmt->bindValue(":password", $password);

        $stmt->execute();

        // nous devons donner un id à l'entité qui vient d'être insérée:
        $utilisateur->hydrate (['id' => $this->cnx->lastInsertId()]);
    }

    // select par titre, renvoie un tableau d'objets
    public function findByLogin(string $login): array
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
