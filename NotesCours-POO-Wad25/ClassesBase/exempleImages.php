<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "./classes/Image.php";

        $liens = ['chien.jpg','chat.jpg','giraffe.jpg']; 
        foreach ($liens as $key => $lien){
            $imageObject = new Image ($lien);
            $imageObject->afficher(60,80);
        }

        $image = new Image ($liens[array_rand($liens)]);
        $image->afficher(200,200);

    ?>
    
</body>
</html>