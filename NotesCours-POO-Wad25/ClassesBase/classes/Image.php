<?php

class Image {
    public string $lien;

    public function __construct (string $lien){
        $this->lien = $lien;
    }
    public function afficher (int $width = 50,
                            int $heigth = 50){
        echo "<img src='./images/" . $this->lien . "' width=" . $width . " height=" . $heigth . ">";
    }



}