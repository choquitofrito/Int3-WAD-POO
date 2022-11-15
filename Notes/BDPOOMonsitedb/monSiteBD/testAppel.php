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
        function maja(){
            echo "Je suis Maja";
        }

        maja();

        $quiAppeller = "maja";
        $quiAppeller();

        // ceci est autre chose
        $maja2 = function (){
            echo "Je suis Maja2";
        };
        $maja2();

    ?>
</body>

</html>