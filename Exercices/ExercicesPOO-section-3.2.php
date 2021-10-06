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
    // Ex1.

    // Ex2.
    include "./PersonneC.class.php";
    $p1 = new PersonneC("Turu","Tara");
    echo "<br>". $p1->getPrenom();

    // Ex3.
    $p1->afficherPersonne();

    // Ex4.
    $p1->setEtatCivil("marié");
    $p1->afficherPersonne();

    $p2 = $p1->setNom("Hermant");
    $p2->afficherPersonne();

    // Ex5.
    // class Produit {
    //     public float $prix;
    //     .
    //     .
    //     public function calculePrixTVAC(){
    //         return $this->prix*1.21;
    //     }
    // }




    ?>

</body>

</html>