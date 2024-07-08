<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "./Eleve.php";


    $e1 = new Eleve ("Jenny", 2024, new DateTime("1/1/2000"));

    $e1->setPrenom("Chariffa");
    $e1->setAnneeInscription(2090);
    $e1->setDateNaissance(new DateTime());
    $e1->setAvatar("charifa.jpg");

    $e1->setPrenom("Lilyput")
        ->setAnneeInscription(1000)
        ->setDateNaissance(new DateTime());
        // ->setAvatar("lily.jpg");
        
    // print ($e1->getPrenom());
    // print ($e1->getAnneeInscription());
    // print ($e1->getDateNaissance()->format("d-m-y h:i:s"));
    
    $e1->setPrenom("Lola");
    // print ($e1->getPrenom());
    $e1->setPrenom("Marie");
    // print ($e1->getPrenom());

    print ("<hr>");
    
    $e1->setAnneeInscription(8000)
        ->setPrenom("Manuela")
        ->setDateNaissance(new DateTime());
    // print ("<img src='./images/" . $e1->getAvatar() . "'>");

    $e1->afficher();
    ?>
</body>
</html>