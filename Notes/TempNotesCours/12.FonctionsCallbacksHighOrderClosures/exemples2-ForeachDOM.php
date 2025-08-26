<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .imgClasse {
            width: 20em;
        }
    </style>
</head>

<body>
    <img src="./images/plage1.jpg" class="imgClasse">
    <img src="./images/plage2.jpg" class="imgClasse">
    <img src="./images/plage3.jpg" class="imgClasse">

    <script>
        let images = document.getElementsByClassName("imgClasse");

        console.log(images);

        // on doit extraire l'array de la HTMLCollection (images)
        Array.from(images).forEach(function(elem) {
            elem.addEventListener("mouseover", function(event) {
                console.log("hello hello");
            });
        });


        Array.from(images).forEach ((elem) => {
            elem.addEventListener("mouseover", (event) => {
                console.log("tutti frutti");
            });
        });



    </script>

</body>


</html>