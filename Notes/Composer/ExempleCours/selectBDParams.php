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

    include "./config/db.php";

    try {
        $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
            ';dbname=' . DBNAME . ';charset='
            . DBCHARSET, DBUSER, DBPASS);
    } catch (PDOException $e) {
        echo "Une erreur de connexion s'est produite <a href='./accueil.php'>Accueil</a>";
        // echo $e->getMessage();
        die();
    }
    // toutes les villes d'un pays
    $sql = "SELECT country.country, city.city FROM country ".
            "INNER JOIN city ".
            "ON country.country_id = city.country_id ".
            "WHERE country.country = :unPays";
    $requete = $bdd->prepare($sql);
    $requete->bindValue(":unPays", "Italy");
    $requete->execute();
    $res = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump ($res);




    ?>
</body>

</html>