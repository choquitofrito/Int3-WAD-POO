<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./loginTraitement.php" method="POST">
        Login:<input type="email" name="login">
        Password:<input type="password" name="password">
        <input type="submit">
    </form>
    <?php
        if (isset ($_GET['error'])){
            // traiter les différents types d'erreur
            switch ($_GET['error']){
                case "badPass":
                    echo "<h5>Le pass est incorrecte</h5>";
                    break;
            }
        }
    ?>
</body>
</html>