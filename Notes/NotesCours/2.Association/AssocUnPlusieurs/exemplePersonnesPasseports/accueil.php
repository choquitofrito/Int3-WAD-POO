<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Passeport.php";
    require_once "./Personne.php";

    $pass1 = new Passeport("E234234", new DateTime("1/12/2023"));
    $pass2 = new Passeport("F345345", new DateTime("now"));
    $pass3 = new Passeport();

    $personne1 = new Personne ("Van AA", "Pauline");
    
    $personne1->addPasseport($pass1);
    $personne1->addPasseport($pass2);
    $personne1->addPasseport($pass3);

    $personne1->afficherPasseports();

    
    
    // var_dump ($personne1);
    // var_dump ($pass1);






    ?>
</body>
</html>