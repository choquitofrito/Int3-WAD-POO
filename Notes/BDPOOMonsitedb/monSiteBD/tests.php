<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./vendor/autoload.php";

    // connexion
    $objetConnexion = new Connexion();
    $cnx = Connexion::getPdo();


    $f1 = new Film([
        'titre' => 'Matilda',
        'duree' => 40,
        'description' => 'blabla',
        'image' => 'lala.jpg',
        'dateSortie' => '2000-10-10'
    ]);

    
    $u1 = new Utilisateur([
        'login' => 'matilda@gmail.com',
        'nom' => 'Marie',
        'password' => 'Marie'
    ]);

    $n1 = new Note(['cotation' => 15]);
    
    $u1->addNote($n1);
    $f1->addNote($n1);

    // BD Maintenant!!

    // insertion de tous les éléments
    $filmManager = new FilmManager($cnx);
    $filmManager->insert($f1);
  
    // var_dump ($f1);
    // var_dump ($u1);
    // var_dump ($n1);

    $utilisateurManager = new UtilisateurManager($cnx);
    $utilisateurManager->insert($u1);
    
    // créer les liens (bidirectionnels)

    $noteManager = new NoteManager($cnx);
    $noteManager->insert($n1);
    die();

























    

    $f2 = $filmManager->find(14);
    var_dump ($f2->getNotes());




    ?>
</body>

</html>