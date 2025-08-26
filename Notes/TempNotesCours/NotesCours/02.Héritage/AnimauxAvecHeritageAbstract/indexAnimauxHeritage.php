<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // include_once "./Animal.php";
        include_once "./Chat.php";
        include_once "./Chien.php";
        include_once "./Animal.php";

        // $a1 = new Animal ("Lolo", "cocker");
        // $a1->afficher();

        $c1 = new Chat ("Felix", "sphinx");
        $c1->tomberDebout();
        var_dump ($c1);

        $chien = new Chien ("Felix", "sphinx");
        $chien->guider();
        var_dump ($chien);


        $chien->communiquer();
        $c1->communiquer();

        // $animal = new Animal ("coco", "race");


        // cette fonction est censée d'afficher un
        // animal dans un h2
        function useAnimal (Animal $x){
            print ("<h2>");
            $x->communiquer();
            print ("</h2>");
        }

        
        useAnimal($chien);
        useAnimal($c1);
    
        $animaux = [$c1, $chien, $chien, $c1, $chien];
        foreach ($animaux as $a){
            // $a->communiquer();
            useAnimal($a);
        }


    ?>

    
</body>
</html>