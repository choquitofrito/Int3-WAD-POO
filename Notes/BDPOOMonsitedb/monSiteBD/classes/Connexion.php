<?php

include "./connexion/db.php";
// Singleton: 
// dans notre cas c'est utile si on utilise plusieurs connexions dans le même script
class Connexion
{
    private static PDO $cnx;

    /**
     * Get the value of pdo
     */
    public static function getPdo()
    {
        // la première fois, 
        // isset renverra false
        // car la variable n'a pas été
        // initialisée
        if (!isset (self::$pdo)){
            // créer la connexion
            try {
                self::$cnx = new PDO(DSN, USERNAME, PASSWORD);

                
            } catch (Exception $e) {
                // jamais en production car ça montre des infos
                // sensibles
                echo $e->getMessage();
                die();
            }
        } 
        // la connexion existe ici. Soit elle a été crée plu haut
        // ou elle existait déjà
        return self::$cnx;
    }
}
