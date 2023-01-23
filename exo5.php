<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

match ($opponentWeapon){
    'fists' => $indyWeapon = 'gun',
    'whip' => $indyWeapon = 'fists',
    'gun' => $indyWeapon = 'whip',
};

echo "Opponent weapon is $opponentWeapon so Indiana Jones take $indyWeapon";