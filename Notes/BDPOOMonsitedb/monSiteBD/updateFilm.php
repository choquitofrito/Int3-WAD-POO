<?php


include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    echo $e->getMessage();

    die();
}
// var_dump($_POST);

$id = $_GET['id']; // le film à chercher, reçu dans l'url

$sql = "SELECT * FROM film WHERE id LIKE :id ";

$stmt = $cnx->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump ($res);

?>

<!-- formulaire pour modifier le film choisi -->
<form action="./updateTraitement.php" method="POST">
    <input type="hidden" name="id" value="<?= $res['id'] ?>">
    Titre<input type="text" value="<?= $res['titre'] ?>" maxlength="100" name="titre">
    Duree<input type="number" value="<?= $res['duree'] ?>" name="duree">
    Description<textarea name="description"><?= $res['description'] ?></textarea>
    Date de sortie<input value="<?= $res['dateSortie'] ?>" type="date" name="dateSortie">
    <input type="submit" value="Modifier">
</form>






