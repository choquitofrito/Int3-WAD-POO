<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <form action="./inscriptionTraitement.php" method="POST">
        Nom:<input class="form-control" type="text" name="nom">
        Login:<input class="form-control" type="email" name="login">
        Password:<input class="form-control" type="password" name="password">
        Re-tapez le password:<input class="form-control" type="password" name="repassword">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>