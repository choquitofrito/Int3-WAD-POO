<?php

include "./Contact.class.php";

$contact = new Contact("Anissa", "+32492438492");
echo $contact->getPrenom();
