<?php 

include "./connexion/db.php";
// var_dump ($_POST);

// Obtenir les données du formulaire
$nom = $_POST['nom'];

$login = filter_input (INPUT_POST, 'login', FILTER_VALIDATE_EMAIL);

if (!$login){
    // header()....
    // die();
}



$password = $_POST['password'];
$repassword = $_POST['repassword'];

// ( Filtrer les données )


// Connecter à la BD

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    echo $e->getMessage();
    die();
}

// il faut chercher le login dans la BD, on ne veut pas de doublons!



// Lancer l'insertion de l'utilisateur dans le tableau "user"
$sql = "INSERT INTO utilisateur (id, nom, login, password) VALUES " .
    "(null , :nom , :login , :password) ";
$stmt = $cnx->prepare ($sql);
$stmt->bindValue (":nom", $nom);
$stmt->bindValue (":login", $login);


$password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

$stmt->bindValue (":password", $password);

$stmt->execute ();

// Si tout ok , on va vers l'accueil après 
// avoir stocké le login dans la session
// (utiliser $stmt->errorInfo())

?>
