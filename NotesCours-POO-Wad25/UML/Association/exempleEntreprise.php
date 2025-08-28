<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./classes/Employe.php";
    require_once "./classes/Societe.php";

    use UML\Association\ExempleEntreprise\Societe;
    use UML\Association\ExempleEntreprise\Employe;

    $e1 = new Employe ("Superwoman", "superwoman@gmail.com");
    $e2 = new Employe ("Goku", "goku@gmail.com");
    $s1 = new Societe ("Interface 3", "interface3@interface3.com");

    $s1->setEmployes ([$e1,$e2]);
    $s1->addEmploye ($e1);

    var_dump ($s1->getEmployes());

    // $e1->setEmployeur ($s1);
    var_dump ($e1);
    // var_dump ($e2);
    // var_dump ($s1);

    ?>

</body>
</html>