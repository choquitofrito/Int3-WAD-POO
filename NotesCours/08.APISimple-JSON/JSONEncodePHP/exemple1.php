<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // encoder un array
    $tab = ['Jenny', 'Leslie', 'Dorothée'];
    var_dump($tab);
    $tabJson = json_encode($tab);
    var_dump($tabJson);

    // encoder un array associatif
    $tabAssoc = [
        'nom' => 'Pepe',
        'nationalite' => 'Belgique',
        'hobby' => 'chanter'
    ];
    var_dump($tabAssoc);
    $tabAssocJson = json_encode($tabAssoc);
    var_dump($tabAssocJson);
    echo "<br>" . $tabAssocJson;

    // encoder un array d'arrays simples (indexés)
    $tabArrays = [
        ['Jean', 'Debbie', 'Jessica'],
        ['Leslie', 'Khaoula', 'Charifa']
    ];
    $tabArraysJson = json_encode($tabArrays);
    echo "<br><br>" . $tabArraysJson;

    // encoder un array d'arrays associatifs
    $tabArraysAssoc = [
        [
            'nom' => 'pommes',
            'prix' => 3
        ],
        [
            'nom' => 'oranges',
            'prix' => 2
        ],
        [
            'nom' => 'poires',
            'prix' => 2.5
        ],
    ];
    $tabArraysAssocJson = json_encode($tabArraysAssoc);
    echo "<br><br>" . $tabArraysAssocJson;

    // encoder un objet d'une classe
    class Personne
    {
        public string $nom;
        public string $hobby;
    }
    $p = new Personne();
    $p->nom = "Louise";
    $p->hobby = "natation";

    $objJson = json_encode($p);
    echo "<br><br>" . $objJson;

    $p2 = new Personne();
    $p2->nom = "Marthe";
    $p2->hobby = "lire";

    $arrayObjets = [$p, $p2];
    $arrayObjetsJson = json_encode ($arrayObjets);
    echo "<br><br>" . $arrayObjetsJson;




    ?>
</body>

</html>