<?php

// Gérer le CRUD de la class Cinema
class CinemaManager
{
    private PDO $cnx;
    // injection de dépendances: objet PDO
    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Cinema $c)
    {
        $sql = "INSERT INTO cinema (id, nom, contact)
                VALUES (null, :nom, :contact)";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":nom", $c->getNom());
        $stmt->bindValue(":contact", $c->getContact());
        $stmt->execute();
        $lastId = $this->cnx->lastInsertId();
        $c->setId($lastId);
        // debugger avec var_dump ($stmt->errorInfo())
    }
    
    public function delete(Cinema $c)
    {
        $sql = "DELETE FROM cinema WHERE id=:id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $c->getId());
        $stmt->execute();
        // debugger avec var_dump ($stmt->errorInfo())

    }
}
