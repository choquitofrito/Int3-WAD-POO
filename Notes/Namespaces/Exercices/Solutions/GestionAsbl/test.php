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
    
    
  $user= new Wad\GestionUtilisateurs\User();
  $profile= new Wad\GestionUtilisateurs\Profile("admin");
  
  $user2= new Web\User();
  $eleve = new Web\Eleve("Jean");
  $cours = new Web\Cours("Jean");
  
  
  
?>
        
    </body>
</html>

