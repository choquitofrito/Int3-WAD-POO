<?php

require_once "./classes/IPersonnage.php";
require_once "./classes/Robot.php";
require_once "./classes/Human.php";

$robot = new Robot("Ayla", "Robot");
$human = new Human("Chloé", "Human");

$robot->sePresenter();
$human->sePresenter();

$human->seDeplacer();
$robot->parler();