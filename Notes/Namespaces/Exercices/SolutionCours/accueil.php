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

    use GestionAsbl\Wad\GestionUtilisateurs\Profile;
    use GestionAsbl\Web\User as UserWeb;
    use GestionAsbl\Wad\GestionUtilisateurs\User as UserWad;
    use GestionAsbl\Web\Eleve;

    include "./vendor/autoload.php";
    $userWeb = new UserWeb(5);
    $userWad = new UserWad(8);
    $profile = new Profile(9);
    $eleve = new Eleve(6);


    ?>

</body>

</html>