<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $noms = ['Jessica', 'Mélusine', 'Khaoula', 'Émilie', 'Francisco', 'Marwa'];
    // $res = file_get_contents("https://api.nationalize.io/?name=Leslie");
    // var_dump($res);

    //    $resDecode = json_decode ($res);

    $resDecode = json_decode('{"count":5224,"name":"Leslie","country":[{"country_id":"PH","probability":0.0893589766033441},{"country_id":"GT","probability":0.0557568386052635},{"country_id":"CL","probability":0.045508189582155224},{"country_id":"AR","probability":0.042135291862726694},{"country_id":"SV","probability":0.03739789672426875}]}');

    echo "<h3>Le nom " . $resDecode->name . " vient probablement de " . $resDecode->country[0]->country_id;





    ?>
</body>

</html>