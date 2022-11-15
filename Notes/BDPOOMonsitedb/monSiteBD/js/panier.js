document.querySelectorAll(".ajouter").forEach((elem) => {
    elem.addEventListener("click", (e) => {
        let quantite = e.target.previousSibling.value; // value de l'input à côté du button
        let idFilm = e.target.dataset.id;

        let xhr = new XMLHttpRequest();

        let formulaire = new FormData();
        formulaire.append("idFilm", idFilm);
        formulaire.append("quantite", quantite);

        xhr.onreadystatechange = (event) => {
            if (xhr.readyState === 4) {
                if (xhr.status === 200 || xhr.status === 304) {
                    // tout ok
                    console.log(xhr.responseText);

                } else console.log("error: " + xhr.status);
            }
        };
        xhr.open ("POST","./panierAjouter.php");
        xhr.send (formulaire);
    })
});


// vider le panier, juste charger la page
document.getElementById ("vider").addEventListener ("click",(e) => {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = (event) => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200 || xhr.status === 304) {
                // tout ok
                console.log(xhr.responseText);

            } else console.log("error: " + xhr.status);
        }
    };
    xhr.open ("GET","./viderPanier.php");
    xhr.send (null);

});