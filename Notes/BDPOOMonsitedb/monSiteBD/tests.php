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
        'titre' => 'Lalalala',
        'duree' => 40,
        'description' => 'blabla',
        'image' => 'lala.jpg',
        'dateSortie' => '2000-10-10'
    ]);
    $filmManager = new FilmManager($cnx);
    
    $u1 = new Utilisateur([
        'login' => 'marie@gmail.com',
        'nom' => 'Marie',
        'password' => 'Marie'
    ]);
    $utilisateurManager = new UtilisateurManager($cnx);

    // insertion de tous les éléments
    $filmManager->insert($f1);
    
    var_dump ($f1);
    
    $utilisateurManager->insert($u1);
    
    $n1 = new Note(['cotation' => 5]);

    // créer les liens (bidirectionnels)
    $u1->addNote($n1);
    $f1->addNote($n1);

    $noteManager = new NoteManager($cnx);

    $noteManager->insert($n1);
    die();






    ?>
</body>

</html>