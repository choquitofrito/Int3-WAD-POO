<form  method="POST" enctype="multipart/form-data" action="./index.php?p=insertTraitement">
    Titre<input type="text" maxlength="100" name="titre">
    Duree<input type="number" name="duree">
    Description<textarea name="description"></textarea>
    Date de sortie<input type="date" name="dateSortie">
    Image<input type="file" name="image">
    <input type="submit" value="Rajouter film">
</form>