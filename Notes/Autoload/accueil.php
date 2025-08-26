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
        // include "Voiture.class.php";
        // include "Camion.class.php";
        
        include "./vendor/autoload.php";
        
        try {
            $v1 = new Voiture ("Seat");
            $c1 = new Camion("IVECO");
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
            die();
        }

        var_dump ($v1);
        var_dump ($c1);

    ?>

</body>

</html>