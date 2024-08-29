<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // prendre une chaîne JSON et 
        // générer une structure de données JS (array)
        let json1 = "[4,6,7]";
        let arrJson1 = JSON.parse(json1);
        console.log(arrJson1);
        console.log(typeof(arrJson1));
        console.log(arrJson1[2]);

        // prendre une chaîne JSON et 
        // générer une structure de données JS (array obj)
        let jsonArrayObj = '[{"nom":"Jean"},{"nom":"Kate"}]';
        let arrayJsonArrayObj = JSON.parse (jsonArrayObj);
        console.log (arrayJsonArrayObj);

        console.log (arrayJsonArrayObj[1].nom);
        console.log (arrayJsonArrayObj[1]['nom']);

        let cle = 'nom';
        console.log (arrayJsonArrayObj[1][cle]);



    </script>
</body>

</html>