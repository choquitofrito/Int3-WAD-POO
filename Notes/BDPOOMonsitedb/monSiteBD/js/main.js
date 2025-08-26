document.querySelectorAll(".coeur").forEach((elem) => {
  elem.addEventListener("click", (e) => {
    console.log(e);
    console.log(e.target);
    let id = e.target.dataset.id;
    let form = new FormData();
    form.append("id", id);

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = (event) => {
      if (xhr.readyState === 4) {
        if (xhr.status === 200 || xhr.status === 304) {
          
          let p = e.target;
          // let p = document.querySelector(".coeur");
          let reponse = JSON.parse(xhr.responseText);

          if (reponse.statut == "off") {
            p.innerHTML = "";
            p.innerHTML = "&#10085;";
          } else {
            p.innerHTML = "";
            p.innerHTML = "&#10084;";
          }
        } else console.log("error: " + xhr.status);
      }
    };

    xhr.open("POST", "./favoriTraitement.php");
    xhr.send(form);
  });
});
