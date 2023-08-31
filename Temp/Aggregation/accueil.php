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
    include_once "./Repertoire.class.php";
    include_once "./Contact.class.php";

    $r = new Repertoire("maison","blablabla");

    $c1 = new Contact ("Mar", "02342342323");
    $c2 = new Contact ("Lola", "02342342345");

    $r->addContact($c1);
    // $c1->setRepertoire($r); // ne fait pas le lien dans les deux sens
    // var_dump ($r);
    // die();

    // $r->addContact($c1)->addContact($c2)->addContact(new Contact ("Laure","03242343244"));
    // $r->setContacts([$c1,$c2]);
    // $r->setContacts([$r,$r]); // provoque erreur
    echo "<hr>";

    echo "<h2>Sans clone</h2>";
    // copie directe, problème!
    $rep1 = new Repertoire("original","");
    $contact1 = new Contact ("Mar", "02342342323");
    $contact2 = new Contact ("Lola", "02342342345");
    $rep1->addContact($contact1)->addContact($contact2);
    
    // var_dump ($rep1);
    $rep2 = $rep1;
    $rep1->addContact(new Contact ("Extra rep1","34234234234")); // est visible dans rep2!!!
    var_dump ($rep2);
    
    // avec clone, on aura deux copies séparées
    echo "<h2>Avec clone racine</h2>";
    $rep1 = new Repertoire("original","");
    $contact1 = new Contact ("Mar", "02342342323");
    $contact2 = new Contact ("Lola", "02342342345");
    $rep1->addContact($contact1)->addContact($contact2);
    
    // var_dump ($rep1);
    $rep2 = clone $rep1; // on clone la racine, mais il faut implementer clone ou les contacts seront les mêmes
    $rep1->contacts[0]->setNom ("modifié"); // est visible dans rep2!!!
    var_dump ($rep1);
    var_dump ($rep2);




?>


</body>
</html>