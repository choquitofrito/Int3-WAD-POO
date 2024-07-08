<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $a = o;
    // include "cocoliso.php"; 
    // $tab =[];
    // print (4/0);
    // print ("coco");

    require_once "./config/db.php";

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } 
    catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD<br>" ;
        echo $e->getMessage();
        // die();
    }
    echo "<br>";
    /////////////////////
    function division (int $a, int $b){
        if ($b == 0){
            throw new Exception ("Erreur de division par zéro");
        }
        else {
            return ($a / $b);
        }
    }

    try {
        print (division (10,0));
    }
    catch (Exception $e){
        echo $e->getMessage();
        
    }
    



    ?>
</body>

</html>