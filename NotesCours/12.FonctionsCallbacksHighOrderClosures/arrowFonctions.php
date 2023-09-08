<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        function somme(v1, v2) {
            console.log("somme");
            return (v1 + v2);
        }


        let somme2 = function(v1, v2) {
            console.log("somme2");
            return (v1 + v2);
        };

        // fonction flechée (arrow)
        let somme3 = (v1, v2) => {
            console.log("somme3 (flechée)");
            return (v1 + v2);
        };

        // simplification de l'arrow
        // fonction dont le but est uniquement de faire un return
        let somme4 = (v1, v2) => v1 + v2;



        console.log(somme(10, 20));
        console.log(somme2(10, 20));
        console.log(somme3(10, 40));
        console.log (somme4 (100,100));
    </script>


</body>

</html>