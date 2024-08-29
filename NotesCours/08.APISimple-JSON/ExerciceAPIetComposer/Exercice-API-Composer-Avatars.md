Créez un code capable d'afficher des avatars générés automatiquement. Générez aussi un nom "belge" et une adresse pour chaque avatar.

Pour les images des avatars utilisez l'API https://avatars.dicebear.com/


Example: 

https://www.dicebear.com/how-to-use/http-api/



Pour générer les noms utilisez **FakerPHP/Faker** (librairie PHP à installer avec composer)

Notes extra: 

Pour faire appel à l'API (qui n'a pas besoin du token), utilisez file_get_contents.
On peut utiliser aussi curl mais la requête HTTP est tellement simple qu'on n'aura pas besoin.

Concernant PHPFaker: regardez les options sur la configuration du "Locale" pour que les noms soient "belges".

