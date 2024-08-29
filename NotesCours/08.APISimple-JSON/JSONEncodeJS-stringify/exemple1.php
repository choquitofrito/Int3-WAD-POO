<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script>
        console.log("Exemple de stringify");
        // encoder un array JS en JSON
        let arr = ['Pauline', 'Louise', 'Stephanie'];
        let arrJSon = JSON.stringify(arr);
        console.log(arrJSon);
        console.log(typeof(arrJSon));

        // encoder un objet JS en JSON
        let objPersonne = {
            "nom": "Pauline",
            "hobby": "jouer"
        };
        let objPersonneJSON = JSON.stringify(objPersonne);
        console.log(objPersonneJSON);

    </script>

</body>

</html>