<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
<?php

    // include "./Wad/GestionUtilisateurs/User.php";
    // include "./Wad/GestionUtilisateurs/Profile.php";
    // include "./Web/User.php";
    // include "./Web/Eleve.php";
    // include "./Web/Cours.php";
    include "./autoload.php";
  
  
  use Wad\GestionUtilisateurs\User;
  use Wad\GestionUtilisateurs\Eleve;
  use Wad\GestionUtilisateurs\Profile;
  // use Web\User;  // cette ligne provoquerait une erreur: la classe User serait définie deux fois
  // on va utiliser un alias
  use Web\User as UserWeb;
  
  

  // plus besoin d'indique le namespace pour les classes du Namespace Wad
  $user= new User(); 
  $profile= new Profile("admin");
  
  
  $user2= new UserWeb();
  $eleve = new Web\Eleve("Jean");
  $cours = new Web\Cours("Jean");

  
  
  
  
?>
        
    </body>
</html>

