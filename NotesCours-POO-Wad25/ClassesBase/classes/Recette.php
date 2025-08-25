<?php

class Recette {
    private string $nom;
    private string $description;
    private array $ingredients;

    public function __construct (string $nom,
                                string $description,
                                array $ingredients =[]){
                                    $this->nom = $nom;
                                    $this->description = $description;
                                    $this->ingredients = $ingredients;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function setDescription(string $description){
        $this->description = $description;
    }
    public function setIngredients(array $ingredients){
        $this->ingredients = $ingredients;
    }
    public function addIngredient(string $ingredient){
        $this->ingredients[] = $ingredient;
    }
    public function removeIngredient (string $ingredient){
        for ($i =0;$i < count ($this->ingredients);$i++){
            if ($ingredient == $this->ingredients[$i]){
                unset ($this->ingredients[$i]);
            }
        }
    }
    
}