<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insérer un nouveau film</title>
</head>

<body>
    <?php
    // include "./checkSession.php";
    // include "./nav.php";
    ?> 
    <h3>Tapez les données du film</h3>
    <form action="./filmInsererTraitement.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="dateSortie">Date de sortie</label>
            <input type="date" id="dateSortie" name="dateSortie">
        </div>
        <div>
            <label for="duree">Durée</label>
            <input type="number" id="duree" name="duree">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <input type="submit" value="Envoyer" id="envoyer">
        </div>
    </form>

</body>




</html>