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
include "./vendor/autoload.php";

$voiture1 = new Voiture("Renault", "3242342343");
$troti1 = new Trotinette("AXIS","94324234234");
$troti1->rouler();
$voiture1->rouler();
var_dump ($voiture1);
var_dump ($troti1);




?>

</body>
</html>