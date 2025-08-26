RÔLES
-----

Les boutons Effacer-Update doivent être accésibles uniquement par un utilisateur admin.
Modifier le code dans la liste de films pour que ces deux liens soient uniquement accésibles si l'utilisateur a ce rôle.

Une façon simple d'implementer les rôles consiste à rajouter une colonne "role" dans le tableau Utilisateur (varchar qui contiendra "" ou "admin" ou ce qu'on veut). Si on veut utiliser plusieurs rôles on peut toujours créer une colonne type JSON, mais ce n'est pas notre but ici.


