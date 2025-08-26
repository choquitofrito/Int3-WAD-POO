<?php

include_once "./Animal.php";

class Chat extends Animal {


    public function tomberDebout():void{
        print ("<br>Tojours debout!!!");

    }

    public function communiquer():void{
        print ("<br>Miauuuu!");
    }

}