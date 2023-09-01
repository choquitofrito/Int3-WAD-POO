<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./Contact.php";
    include "./ContactNew.php";

    $c1 = new Contact("Dupont","Margot","04545345234");
    $c2 = new Contact("Nimri","Najoua","03242342344");

    // $c1->afficher();
    // $c2->afficher();

    $c2->setNom ("Van Volxem");
    $c2->setPrenom ("Laurence");

    print ("<br>");
    $c2->setPrenom("Marc")->setNom("Dupont");

    $c2->setNom("Marc")->setPrenom("Dupont");
    
    $c2->afficher();





    $cn1 = new ContactNew("Dupont","Margot","04545345234");
    $cn2 = new ContactNew("Nimri","Najoua","03242342344");

    // $cn1->afficher();
    // $cn2->afficher();
    ?>
</body>

</html>