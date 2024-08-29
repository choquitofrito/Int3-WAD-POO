<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // transformer un string JSON dans un élément de PHP
    $arrJSON = '["Marc","Charifa","Marie"]'; 
    var_dump ($arrJSON);
    $res = json_decode($arrJSON);
    var_dump ($res);

    // transformer un string JSON dans un objet
    $objJSON = '{"nom":"Louis","hobby":"danser"}';
    $resObj = json_decode($objJSON);
    var_dump ($resObj);
    echo "<br><br>" . $resObj->nom;

    ?>
</body>
</html>