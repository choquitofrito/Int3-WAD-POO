<?php
include_once "./AppareilDVD.class.php";

class LecteurDVDH extends AppareilDVD {
    public function __construct (string $marque, int $vitesseLecture){
        parent::__construct ($marque, $vitesseLecture);

    }
}
