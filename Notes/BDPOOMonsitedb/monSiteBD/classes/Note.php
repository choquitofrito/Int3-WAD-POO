<?php

class Note
{

    private int $id;
    private int $cotation;

    public function hydrate(array $init)
    {
        foreach ($init as $propriete => $valeur) {
            $nomSet = "set" . ucfirst($propriete);
            if (!method_exists($this, $nomSet)) {
                // à nous de voir selon le niveau de restriction...
                // throw new Exception("La méthode {$nomSet} n'existe pas");
            }
            else {
                // appel au set
                $this->$nomSet($valeur);
            }
        }
    }

    public function __construct(array $init)
    {
        $this->hydrate($init);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cotation
     */ 
    public function getCotation()
    {
        return $this->cotation;
    }

    /**
     * Set the value of cotation
     *
     * @return  self
     */ 
    public function setCotation($cotation)
    {
        $this->cotation = $cotation;

        return $this;
    }
}
