<?php



class FilmManager {

    private PDO $cnx;

    public function __construct (PDO $cnx){
        $this->cnx = $cnx;    
    }

    public function insert (Film $film){
        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie) ";
        $sql .= " VALUES (NULL , :titre, :duree, :description, :dateSortie)";
        
        $stmt = $this->cnx->prepare($sql);
        
        $stmt->bindValue (":titre", $film->getTitre());
        $stmt->bindValue (":duree", $film->getDuree(), PDO::PARAM_INT);
        $stmt->bindValue (":description", $film->getDescription());
        $stmt->bindValue (":dateSortie", $film->getDateSortie()->format("Y-m-d"));
        // manque l'image
        $stmt->execute();

        $film->setId($this->cnx->lastInsertId());
    }



    public function delete (Film $film){
        $sql = "DELETE FROM film WHERE id=:id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue (":id", $film->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function select (array $filtres){
        $sql = "SELECT * FROM film WHERE ";
        // créer des couples cle=:cle (ex: duree=:duree AND titre=:titre AND ...)
        // " .... duree=:duree AND titre=:titre AND...."
        var_dump ($filtres);
        $cles = array_keys($filtres);
        $stringFiltres = "";

        foreach ($cles as $uneCle){
            $arrayConditions[] = $uneCle . "=:" . $uneCle;
        }
        $stringFiltres = implode (" AND ", $arrayConditions);
        
        $sql = $sql . " " . $stringFiltres;
        
        $stmt = $this->cnx->prepare($sql);
        var_dump ($sql);
        foreach ($filtres as $cle => $valeur){
            $stmt->bindValue (":" . $cle, $valeur);
        }

        $stmt->execute();

        $res= $stmt->fetchAll (PDO::FETCH_ASSOC);
        return $res;

    }


    
}