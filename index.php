<?php

use character\Fighter;
use character\Rogue;
use character\Wizard;

require_once "./player/Personnage.php";
require_once "./player/hero_classes/Fighter.php";
require_once "./player/hero_classes/Rogue.php";
require_once "./player/hero_classes/Wizard.php";

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
    $characters = [
        "char1" => new Fighter("Michael"),
        "char2" => new Rogue("André"),
        "char3" => new Wizard("Pierre")
    ];
    foreach ($characters as $char) {
        echo "Hello, I'm " . $char->name . " and I'm a " . explode("\\", get_class($char))[1] . ". I start at level " . $char->level . " my strength is equal to " . $char->strength . " and I have " . $char->life . " life points!</br>";
    }
    $characters["char1"]->strike($characters["char2"]);
    ?>
</body>

</html>