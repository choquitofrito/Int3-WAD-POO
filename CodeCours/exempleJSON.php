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
    include "./Voiture.class.php";

    $v = new Voiture("Audi", "A4");
    $vJSON = json_encode($v);

    echo "<br>L'objet v en JSON est : " . $vJSON;

    $a = ["Laure", "Judy", "Julie"];
    echo "<br>L'array est : " . json_encode($a);

    $ville1 = [
        'nom' => 'Bruxelles',
        'population' => 1000000
    ];
    echo "<br>L'array ville1 est : " . json_encode($ville1);

    $ville2 = [
        'nom' => 'Bruxelles',
        'population' => 1000000
    ];
    echo "<br>L'array ville2 est : " . json_encode($ville2);

    $villes = [$ville1, $ville2, $ville1];
    echo "<br>L'array villes est : " . json_encode($villes);


    ?>

    <script>

        
        let a1 = "<?php echo "hello"; ?>";

        let a2 = <?php 
            $a2 = [4,5,6];
            
            echo "[".$a2[0].",";
            echo $a2[1].",";
            echo $a2[2];
            echo "]";
        ?>;
        

        let jsonArray = "<?php echo json_encode ([4,10,18]); ?>";
        let array = JSON.parse (jsonArray);
        console.log (array[1]);

    </script>

</body>

</html>