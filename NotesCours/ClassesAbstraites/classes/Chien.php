<?php

class Chien {
    private string $nom;
    private int $poids;
    

    public function aboyer():void {
        echo "<br>wouafff wouaff!!!!";
    }
    public function manger():void {
        echo "<br>Miam je mange des os!";
    }
    public function seDeplacer():void{
        echo "<br>Je cours dans tous les sens!";
    }

}