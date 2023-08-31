<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Contact
    {
        private string $nom = "";
        private string $prenom;

        // public function __construct()
        // {

        // }
        public function afficherUL(): void
        {
            echo "<ul id='monUl'>";
            echo "<li>nom: " . $this->nom . "</li>";
            echo "<li>prenom: " . $this->prenom . "</li>";
            echo "</ul>";
        }

        public function changerNom(string $nouveauNom): void
        {
            $this->nom = $nouveauNom;
        }
        
        public function changerPrenom(string $nouveauPrenom): void
        {
            $this->prenom = $nouveauPrenom;
        }
    };

    $contact1 = new Contact();
    $contact1->changerPrenom ("Coco");
    $contact1->changerNom ("Tururu");
    $contact1->afficherUL();



    ?>
</body>

</html>