<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // fonction en tant qu'instruction
    function bonjour()
    {
        print("<br>Bonjour PHP");
    }
    bonjour();

    // 1. fonction dans une variable (en tant qu'expression)
    $adieu = function () {
        print("<br>Adieu!");
    };

    $adieu();

    $manger = function () {
        print("<br>On mange");
    };

    // on peut créer de tableaux!
    // $tab = [$adieu, $manger];

    // foreach ($tab as $uneFonction){
    //     $uneFonction();
    // }

    // 2. envoyer une fonction comme paramètre

    // On veut appliquer plusieurs fonctions
    // à un tableau. Traditionellement on fera:
    $noms = ['Lola', 'Najoua', 'Hsin I', 'Margot'];

    // fonction qui renvoie un nouvel array
    // où tous les noms sont en majuscule
    $fnMajuscules = function (array $tab) {
        $tabMajuscules = [];
        foreach ($tab as $nom) {
            $tabMajuscules[] = strtoupper($nom);
        }
        // renvoyer le tableau qu'on vient de créer
        return $tabMajuscules;
    };

    // fonction qui renvoie un nouvel array
    // où tous les noms sont en majuscule
    $fnMinuscules = function (array $tab) {
        $tabMinuscules = [];
        foreach ($tab as $nom) {
            $tabMinuscules[] = strtolower($nom);
        }
        // renvoyer le tableau qu'on vient de créer
        return $tabMinuscules;
    };

    var_dump($fnMajuscules($noms));
    var_dump($fnMinuscules($noms));

    // on va utiliser une autre approche:
    // Une fonction qui reçoit la fonction à appliquer
    $fnMajusElement = function ($elem) {
        $elemMajuscule = strtoupper($elem);
        return $elemMajuscule;
    };
    $fnMinusElement = function ($elem) {
        $elemMinuscule = strtolower($elem);
        return $elemMinuscule;
    };

    $parcourirArray = function (array $noms, callable $uneFonction) {
        $nouveauxNoms = [];
        foreach ($noms as $nom) {
            $nouveauxNoms[] = $uneFonction($nom);
        }
        return $nouveauxNoms;
    };

    // appel
    var_dump($noms);
    var_dump($parcourirArray($noms, $fnMajusElement));

    var_dump(array_map($fnMajusElement, $noms));



    ?>

    <script>
        // fonction en tant qu'instruction
        function bonjour() {
            console.log("Bonjour JS");
        }
        bonjour();

        // fonction dans une variable
        let adieu = function() {
            console.log("Adieu!");
        }
        adieu();

        // tableau de noms
        let noms = ['Lola', 'Najoua', 'Hsin I', 'Margot'];
        console.log (typeof (noms));

        let fnMajusElement = function(elem) {
            let elemMajuscule = elem.toUpperCase();
            return elemMajuscule;
        };
        let fnMinusElement = function(elem) {
            let elemMinuscule = elem.toLowerCase();
            return elemMinuscule;
        };

        let nomsMajs = noms.map (fnMajusElement);
        
        console.log (nomsMajs);

        // exemple de forEach
        noms.forEach (function (val){
            console.log (val);
        });
        
        // utilisation de forEach pour "essayer" 
        // de mettre l'array en majuscule
        let nomsMajusForEach = noms.forEach (fnMajusElement);



    </script>
</body>

</html>