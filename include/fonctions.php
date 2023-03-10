<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

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

function calculPrixTTC($prixht, $tva)
{
    $prixTTC = $prixht + ($prixht * $tva) / 100;
    return $prixTTC;
}

// Faire une fonction qui calcul l'âge d'une personne en donnant la date de naissance à la fonction

function calculAge($anneNaissance)
{
    $anneeEnCours = date("Y");
    $age = $anneeEnCours - $anneNaissance;
    return $age;
}

function dbug($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow: auto;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow: auto;height: 500px;'>";
    var_dump($valeur);
    // print_r($valeur);
    echo "</pre>";
    die();
}

// function maFonction(): int
// {
//     return '3';
// }

// dd(maFonction());

// function maFonction(): void
// {
//     return ;
//     // return null;
// }

// dd(maFonction());

// function maFonction(): array|int|float
// function maFonction(): mixed
// {
//     return [4.5];
// }

// dd(maFonction());

// function maFonction(array|int $x): mixed
// {
//     return $x;
// }

// dd(maFonction(34));

// $article = "Je suis un article.";
// Inverser une chaine de cacaretere
//echo $article;
//dd(strrev($article));

// Longueur d'une chaine de caracete
// dd(strlen($article));

// Transforme une chaine de caratere en majuscule
// dd(strtoupper($article));

// Remplace un element dans une chaine de caractere
// remplacer 'un' par 'cet'
// dd(str_replace('un','cet',$article));

// Retourne un segment d'une chaine de caractere
// renvoyer les 6 premieres elements
//dd(substr($article,0,6));

// $x = 5;
// $y = 3;

// function calcul($x)
// {
//     global $y;
//     $y = 7;
//     return $x + $y;
// }

// echo calcul(5);
// dd($y);

// global $z; 
// $z = 'le monde';
// echo 'Hello ' . $GLOBALS['z'];


// if (true) {
//     function maFonction()
//     {
//         return 'coucou';
//     }
// }
//var_dump(maFonction());

function cleanData($valeur)
{
    if (!empty($valeur) && isset($valeur)) :
        $valeur = htmlentities(trim($valeur));
        return $valeur;
    else :
        return false;
    endif;
}

function textData($valeur)
{
    $valeur = preg_match('/^[a-z-A-Z]*$/', $valeur);
    return $valeur;
}
