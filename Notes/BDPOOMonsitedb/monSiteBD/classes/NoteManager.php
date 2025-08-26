<?php

// gére le CRUD pour les Notes
class NoteManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Note $note)
    {
        $sql = "INSERT INTO note (id, utilisateur_id, film_id, cotation) ";
        $sql .= " VALUES (NULL , :utilisateur_id, :film_id, :cotation)";

        $stmt = $this->cnx->prepare($sql);

        // valeurs propres
        $stmt->bindValue(":cotation", $note->getCotation());

        // valeurs externes: obtenir les ids à partir des rélations
        $stmt->bindValue(":utilisateur_id", $note->getUtilisateur()->getId());
        $stmt->bindValue(":film_id", $note->getFilm()->getId());

        $stmt->execute();
        // nous devons donner un id à l'entité qui vient d'être insérée:
        $id = $this->cnx->lastInsertId();
        $note->setId($id);
       // pour debug
        // var_dump ($stmt->errorInfo());
    }
}