<?php

// gére le CRUD pour les films

include_once "./Film.php";

class FilmManager {

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    public function insert(Film $f){
        // 
        

    }
    // public function delete (){


    // }


}