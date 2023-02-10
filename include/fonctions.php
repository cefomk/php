<?php
// function calcul($a,$b)
// {
//     $c = $a + $b;
//     return $c;
//     // echo 'test';
// }

// echo calcul(23,3);

// function calcul($a,$b = 5)
// {
//     $c = $a + $b;
//     return $c;
// }

// echo calcul(23);

// Faire une fonction qui calul le Prix TTC en lui passant le prix HT et la TVA

// Faire une fonction qui calcul l'âge d'une personne en donnant la date de naissance à la fonction


function dbug($valeur)
{
    echo "<pre>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color;white;padding: 10ppx;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}