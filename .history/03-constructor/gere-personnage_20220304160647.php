<?php

declare(strict_types=1);
require_once 'Personnage.php';

$bilel = new Personnage(
    [
        "nom" => "Bilel",
        "forcePerso" => 1,
        "degats" => 250,
        "niveau" => 1,
        "experience" => 0,
        "vie" => 200,
    ]
);

echo $bilel->getNom();
