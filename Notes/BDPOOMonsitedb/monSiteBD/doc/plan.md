- création du schéma

- construction du modèle pour Film

- construction du modèle pour Utilisateur
    - Créer classe Utilisateur
    - Créer classe UtilisateurManager (insert, select)

- transformer les pages d'inscription et login pour qu'elles utilisent la classe Utilisateur

- créer modèle pour Note

- implementer la rélation User - Note - Film




(Créer modèle pour Note)

Implementation des Rélations: 
-----------------------------

Utilisateur: 
    array favoris
    array notes

Film: 
    array favoris
    array notes

Favori: 
    objet Utilisateur
    objet Film

Note: 
    objet Utilisateur 
    objet Film
