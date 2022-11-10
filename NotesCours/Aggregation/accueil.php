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
    var_dump ($r);
    die();

    // $r->addContact($c1)->addContact($c2)->addContact(new Contact ("Laure","03242343244"));
    

    // $r->setContacts([$c1,$c2]);
    // $r->setContacts([$r,$r]); // provoque erreur

    
    var_dump ($r);




?>


</body>
</html>