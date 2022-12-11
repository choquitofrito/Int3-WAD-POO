## Exercice base JSON-API-POO

<br>

Nous disposons d'un array d'objets Personne (qui pourrait provenir d'une BD mais qu'on fixera ici pour de raisons pratiques).
Chaque personne a un prénom, un nom et une date de naissance.

Pour chaque prénom, nous voulons savoir quelles sont ses nationalités les plus probables.

Actions à réaliser : 

**1**. Créez la classe Personne contenant les attributs nom, prénom et date de naissance

**2**. Créez une page principale où vous créez un array de personnes

**3**. Rajoutez le code nécessaire dans la classe (méthode) pour pouvoir obtenir les nationalités possibles du prénom d'une Personne
(Lisez et pratiquez la section **Outils de base** plus bas)

**4**. Créez une boucle dans le code principal pour afficher les données de chaque Personne, y comprises les possibles nationalités de chaque personne

**5**. Si vous voulez afficher aussi des drapeaux, vous pouvez utiliser l'API **CountryFlags**:

```
https://countryflagsapi.com/png/be
```

Exemple de code pour afficher un drapeau:

```php
$src = "https://www.countryflagsapi.com/png/be";
echo "<img src=" . $src . ">";
```

<br>

## Outils de base

<br>

Nous disposons de l'API **Nationalize** qui est capable de nous dire quelles sont les nationalités les plus probables d'un nom de notre choix.

Vous pouvez la tester en faisant appel à cette adresse dans votre navigateur: 

```
https://api.nationalize.io?name=Esperanza
```

Le paramètre **name** contient le prénom dont on veut connaitre les nationalités les plus probables.

On peut faire appel à l'API facilement depuis PHP en utilisant file_get_contents, et on recevra du JSON dans cet esprit:
```json
{
    "name":"esperanza",
    "country":  [
        {"country_id":"ES","probability":0.21773745827409474},
        {"country_id":"CO","probability":0.16329810891270305},
        {"country_id":"DO","probability":0.16005210431940603}]
}
```
( **{}** indique objet, **[]** indique array)

On peut transformer le JSON en array ou array d'objets PHP (selon le contenu reçu) grâce à **json_decode**

**Exemple:**

```php
<?php

$url = 'https://api.nationalize.io?name=michael';

// Read JSON file
$json = file_get_contents($url);

// array, objet ou array d'objets PHP 
$reponsePHP = json_decode($json_data);
?>
```

**json_decode** transforme les données pour qu'on obtienne: 
``` 
object(stdClass)[1]
  public 'name' => string 'michael' (length=7)
  public 'country' => 
    array (size=3)
      0 => 
        object(stdClass)[2]
          public 'country_id' => string 'US' (length=2)
          public 'probability' => float 0.089864822665327
      1 => 
        object(stdClass)[3]
          public 'country_id' => string 'AU' (length=2)
          public 'probability' => float 0.059767575270831
      2 => 
        object(stdClass)[4]
          public 'country_id' => string 'NZ' (length=2)
          public 'probability' => float 0.046669748208529
```


Faites un **var_dump** de $reponsePHP et **étudiez en détail** la structure. 

Essayez d'afficher, par exemple, uniquement les nationalités (les *country_id*). Une fois vous gérez cette structure, créez une méthode dans Personne capable de faire l'appel à l'API et d'afficher que les nationalités.

