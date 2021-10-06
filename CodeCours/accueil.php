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
        include "./Personne.class.php";

        // Personne p1 = new Personne(); // java, c#....

        $p1 = new Personne();
        $p1->setNom ("Lila");
        $p1->setPrenom ("Lula");
        var_dump ($p1);
        



    ?>
</body>

</html>