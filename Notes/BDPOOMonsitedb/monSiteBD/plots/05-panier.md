Panier
------

- Afficher les produits (films)

- Rajouter un produit au panier 
    1. Depuis la liste de produits on choisi un produit
        - bouton rajouter
        - input pour quantité

        - Faire appel AJAX on click: envoyer l'id et la quantité
        - (SERVER) -> 
          - Vérifier l'existence d'un panier (session)
          - Créer le panier s'il n'existe pas
          - Rajouter le produit dans le panier dans la quantité choisie
            - Si le produit n'existe pas, rajouter à l'array
            - Si le produit existe, augmenter la quantité 
        - Mettre à jour un div qui contient le panier


Structure :

idProduit => [ nom, quantite, prixUnitaire ] 
3 => ['1984', 2, 10]
6 => ['LOTR', 3, 8]

.
.
.




- Effacer un produit du panier
    (Depuis la page de gestion du panier)

- Supprimer le panier completement
