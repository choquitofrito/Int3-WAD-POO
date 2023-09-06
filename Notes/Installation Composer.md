# 1. Composer et la gestion de dépendances

<br>

Composer est un gestionnaire de dépendances, c'est à dire un logiciel qui nous aide a importer et organiser les classes **externes** dont notre projet dépend.

**Exemple:** Si on veut includre un Captcha avec **PHP Captcha** dans notre projet, Composer nous aidera à télécharger le package (dans une version choisie qui pourra changer) et à l'inclure dans notre projet (grace à la création d'un fichier autoload)

**Il traite les «packages» per projet**. On peut installer des packages globalement mais ça fait du sens uniquement pour de packages qui sont utilisées par tous nous projets (ex: PHPUnit). 
Par défaut, Composer installera les packages dans un répertoire (par défaut **vendor**) **dans votre projet**.

Faisons quand-même la différence entre Biliothèque et Package:

* **Bibliothèque** (Library) : morceau de code réutilisable dans d'autres programmes (ex: extensions **PDO**).

* **Package** : c'est souvent une bibliothèque qui est prête à être **installée dans un projet** en utilisant un gestionnaire de packages/dépendances.

L'idée d'un outil pour faciliter l'importation de packages et son utilisation dans un projet n'est pas nouvelle et Composer est fortement inspiré par le **npm** de **node.js** et par le gestionnaire de Ruby's.

Composer supporte cependant un projet "global" pour plus de commodité via la commande **global** mais on n'étudiera pas cette commande dans le cadre de notre cours.

<br>

# 2. Pourquoi utiliser composer, fonctionnement de base

<br>

**L'utilité de base est de faciliter la gestion des packages dans un projet et la gestion des versions de ces packages.**

**Vous avez un projet qui dépend d'un certain nombre de packages** de
tiers, et certaines de ces packages dépendent d'autres packages. En
principe vous devriez télécharger/copier tous les packages dans votre
projet et **gérer vous-mêmes tant leurs versions comme leur
emplacement**. Ceci peut vite devenir un cauchemar pour de différentes
de raisons : quelle est la version d'un package qui est en train
d'être utilisée par chaque dev? Où est-ce qu'on trouve le package??

**Composer** vous permet de **spécifier** les packages dont votre
application dépende **dans un seul fichier** **composer**.**json**. Dans
**ce fichier vous indiquez les packages qui peuvent et doivent être
installés pour votre projet, ainsi que leur version.** Une fois vous
avez créé le fichier, la commande suivante

```console
composer install
``` 

téléchargera les bibliothèques et les installera dans un dossier dans
votre projet. Vous avez un control total sur les packages que vous
utilisez.

Nous pouvons aussi **utiliser la ligne de commande pour spécifier
(installer, mettre à jour, effacer)** les packages qu'on utilisera dans
notre projet. Ces actions auront un effet direct sur le fichier
**composer.json** (ex: composer install unRepo/unPackage rajoutera une
ligne **require** dans composer.json)

Nous allons voir ces concepts avec un exemple pratique.

<br>

# 3. Installation de Composer

<br>

**Téléchargez** Composer pour Windows/Linux/Mac sur le site

[**https://getcomposer.org/**](https://getcomposer.org/)

<br>

# 4. Utilisation de Composer : Exemple pratique 1

## 4.1. Exemple pratique 1 : Spatie (manipulation d'images) - utilisation de composer require

<br>

Nous allons utiliser un package de manipulation d'images (**Spatie** - https://spatie.be/docs/image/v1/introduction).
Ce package nous permet de modifier un tas de caracteristiques des images (sepia, blanc et noir, dimensions, crop etc...)

Nous allons developper un exemple où nous prendrons une image et créerons une copie en noir et blanc.
Nous **allons importer le package avec composer**. Pour cet exemple nous utiliserons la méthode de la console **composer require**.

Voici la procedure:

1. Créez un dossier vide (ex: ManipImages) et un fichier accueil.php
2. Créez un dossier **images** à l'intérieur, contenant une image téléchargé sur Internet (l'image à transformer)
3. Créez une page de base et les balises php
4. Téléchargez le package Spatie en utilisant la commande de console **composer require**
(allez préalablement dans le dossier contenant l'accueil dans la console)
```
composer require spatie/image
```
1. Observez que le code a été téléchargé dans vendor. **Faites include de l'autoload fourni par composer**
dans votre script (**include './vendor/autoload.php'**)
1. Utilisez les méthodes de la classe pour créer une copie noir et blanc de l'image
(choisissez un nom pour la nouvelle image)

```php
use Spatie\Image\Image;

include "./vendor/autoload.php";

// overwriting the original image with a greyscale version   
Image::load("./images/princessemononoke.jpg")
        ->greyscale()
        ->save("./images/princessemononoke-bw.jpg");
```
7. Chargez la page et observez comment un nouveau fichier a été crée dans le dossier **images**.
8. Observez le contenu du fichier **composer.json**. 
Le fichier a été modifié quand vous avez fait **composer require**. 
Vous pouvez modifier ce fichier au lieu d'utiliser la commande **composer require**, on voit cette méthode dans l'exemple qui suit.

<br>


## 4.2. Utilisation de Composer : Exemple pratique 2 - création ou édition à la main du composer.json

<br>

Dans **cet exemple on change directement le fichier composer.json** au lieu d'utiliser **composer require**.

Considérons un projet où on réalise une connexion à une BD. Nous voulons créer un fichier de log à chaque fois qu'il a une erreur de connexion à la BD (le but est d'avoir un registre d'erreurs pour pouvoir les tracer plus tard et trouver de solutions).  

Nous allons  télécharger un package qui permet de générer de fichiers de **log** en disque. Il s'agit de **monolog** (<https://packagist.org/packages/monolog/monolog>).

<br>

### **4.2.1.**  Créez un dossier contenant un page qui fasse un SELECT dans la BD (prenez un exemple déjà fait)

<br>

### **4.2.2.**  Créez un fichier **composer.json** dans la racine du projet. Spécifiez une dépendance utilisant ce format :
<br>

```json
{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}
```


**require** : indique à composer quelles sont les packages à utiliser.
Le fichier composer.json sera modifié et les dépendances (ici seulement
un package) seront téléchargées

Le premier **monolog** est le fournisseur d'un package à télécharger
et le deuxième est le package en soi.

**1.0.\*** : indique la version à télécharger. Cela signifie toute
version dans la branche de développement 1.0. C'est l'équivalent de
dire des versions qui correspondent à >= 1.0 <1.1 (entre 1.0 et 1.1,
sans inclure la derniere)
 
<br>


### **4.2.3.** **Installation des dépendances** du projet : **composer install**

<br>

Dans la console, allez dans le dossier de votre projet et tapez
**composer install**. Cette commande téléchargera le package dans le
dossier **vendor** de votre projet.

Composer créera aussi un fichier **composer.lock**

**Les packages téléchargées** (ici uniquement **monolog**) se trouveront
dans un dossier **vendor** dans votre projet.

Vous pouvez aussi utiliser la commande **composer remove** en console
pour effacer une dépendance du projet :

**Exemple :**


```php
composer remove monolog/monolog
composer remove twig/twig --update-with-dependencies
```

<br>

### **4.2.4.** Testez la fonctionnalité du package dans votre code PHP. 

Nous voulons générer un log à chaque erreur de connexion. Profitons du fait que le bloc qui traite l'exception de l'erreur de connexion existe!

<br>

```php
<?php

// importer les namespaces
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
.
.
.
catch (Exception $e) {
    
        // créer un log (ici un fichier dans le disque)
        $objectLogger = new Logger('monLogger');

        $objectLogger->pushHandler(new StreamHandler ('monLogConnexions.log', Logger::INFO));

        // écrire de messages
        $objectLogger->info("Un erreur de connexion s'est produite");
        $objectLogger->err('Erreur du connexion '. $e->getMessage());
}
.
.
.

?>
```

<br>


# 5. Le control de versions : le fichier composer.lock

<br>

**La première fois** qu'on lance composer install, Composer lira le fichier composer.json et téléchargera la version indiquée de chaque package, en plus de créer le fichier composer.lock qui spécifie les **packages installés et leur version**. Après avoir installé les
dépendances, Composer écrit la liste des versions exactes actuellement installées dans un fichier composer.lock. Cela **verrouille le projet à ces versions spécifiques.** 

Voici pouquoi :

La commande d'installation **composer install** vérifie toujours si
un fichier de verrouillage (composer.lock) est présent. Si le fichier
existe, il télécharge les versions qui correspondent au composer.lock
indépendamment de ce que indique composer.json au moment de lancer la
commande (car on a pu le changer entre temps)

**Cela signifie que quiconque configure le projet téléchargera la même version des dépendances**. Votre serveur CI, les machines de production,
les autres développeurs de votre équipe, **tout le monde fonctionne sur les mêmes dépendances, ce qui atténue le risque de bugs affectant seulement certaines parties des déploiements**. Même si vous développez
seul, dans six mois lors de la réinstallation du projet, vous pouvez
être sûr que les dépendances installées fonctionnent toujours même si
vos dépendances ont publié de nombreuses nouvelles versions depuis.

**Si aucun fichier composer.lock** n'existe, Composer **lira les dépendances et les versions de composer.json et créera le fichier de verrouillage après l'exécution de composer update** ou **composer**
**install**.

Note : si vous utilisez un système de contrôle de versions (GIT, par
exemple) faites commit aussi du composer.lock de votre application (avec
composer.json).

<br>

# 6. Mise à jour de dépendances (composer update)

<br>

Si **l'une des dépendances est mise à jour** (= changer la version dans composer.json) et 
un composer.lock existe,  
vous **n'obtiendrez pas ces mises à jour automatiquement** au moment de faire composer install. 
Pour ce faire, utilisez la commande **composer update**, car  **cela récupérera les versions indiquées dans composer.json** et mettra également à jour le fichier composer.lock avec la nouvelle version.

**Remarque:** Composer affichera un **avertissement lors de l'exécution de composer install** **si composer.lock et composer.json n'ont pas le même contenu** 

Si vous souhaitez uniquement installer ou mettre à jour une dépendance, vous pouvez l'indiquer de façon explicite avec **composer update monolog/monolog** dans la console

<br>

# 7. Des origines des packages: the Packagist

<br>

Le **Packagist** est le dépôt principal de Composer. Un dépôt
(repository) de Composer est essentiellement **une source de packages**:
un endroit où vous pouvez obtenir de packages. Le Packagist vise à être
le référentiel central que tout le monde utilise. Cela signifie que vous
pouvez automatiquement demander tout package qui est disponible là-bas.

**Si vous allez sur le site Web Packagist (packagist.org), vous pouvez
parcourir et rechercher des packages**.

**Tout projet open source utilisant Composer est recommandé de publier
leurs packages sur Packagist**. Un package n'a pas besoin d'être sur
Packagist pour être utilisée par Composer, mais elle permet la
découverte et l'adoption par d'autres développeurs plus rapidement.

<br>

## Chargement des Packages : autoload de base

<br>

Une fois les Packages se trouvent dans le dossier de notre projet, on
doit les « inclure » dans nos scripts (pages).

Pour les Packages qui spécifient des informations de chargement
automatique (**autoload**), Composer génère un fichier
vendor/autoload.php. Vous pouvez simplement inclure ce fichier et vous
obtiendrez l'autoloading automatiquement.

```
require __DIR__ . '/vendor/autoload.php';
```
( \_\_DIR\_\_ est le dossier du script où le code se trouve)

**Cela rend très facile à utiliser le code de tiers**. Par exemple : Si
votre projet dépend de Monolog, vous pouvez simplement commencer à
utiliser des classes de celui-ci, et elles seront chargées
automatiquement.
