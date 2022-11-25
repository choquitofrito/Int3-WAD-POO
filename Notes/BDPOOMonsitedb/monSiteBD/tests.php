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
    include_once "./vendor/autoload.php";

    $f1 = new Film (['titre'=>'Lalalala']);
    $u1 = new Utilisateur (['login'=>'Marie', 'password'=>'Marie']);

    // 
    $n1 = new Note (['cotation' => 5]);
    $u1->addNote ($n1);
    $f1->addNote ($n1);
    // var_dump ($u1);
    // var_dump ($f1);
    var_dump ($n1);


    


    ?>
</body>
</html>