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
    echo "On va créer une copie d'une image, la copie sera en noir et blanc";
    include "./vendor/autoload.php";

    use Spatie\Image\Image;

    $uneImage  = Image::load("./images/lynx.jpg")
        ->greyscale()
        ->save("./images/lynx_gris.jpg");

    



    ?>
    <br>
    <img src="./images/lynx_gris.jpg" width="40%">
</body>

</html>