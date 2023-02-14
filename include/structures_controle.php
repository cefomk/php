<?php
include './fonctions.php';
/* if/else/elseif

>
<
>=
<=
== : comparaison d'egalite en valeur
=== : comparaison d'egalite en valeur et en type
!=
!==

*/

// $age = 10;
// if($age >= 18) {
//     echo 'Vous avez le droit de voter.';
// } else {
//     echo 'Votre âge ne vous permet pas de voter !';  
// }

// $heure = 23;
// // Afficher "On est le matin" lorsque l'heure est infrieur à 12h00 et "On est le soir" lorsque l'heure est superieur à 18h00
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18) {
//     echo 'On est le soir';
// }

// $heure = date('H');
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18) {
//     echo 'On est le soir';
// } else {
//     echo 'On est l\'apres midi.';
// }

// $a = '20';
// $b = 5;

// if($b != 3) {
//     echo 'La variable $b n\' est pas egale à 3.';
//     // echo "La variable $b n'est pas egale à 3.";
// }

// if($b == '5'){
//     echo 'Egalte';
// }

// if($b === '5'){
//     echo 'Egalte';
// } else {
//     echo 'Non egalité en valeur en type';
// }

// if($a != 20) {
//     echo '$a different de 20.';
// }

// if($a !== 20) {
//     echo '$a different de 20.';
// }

//$vrai = true;
// $vrai = null;
// if($vrai) {
//     echo 'Vrai';
// } else {
//     echo 'Faux';
// }

$votes = 235;
$votesPrecedent = 1226;
($votes > $votesPrecedent) ? $votes-- : $votes++;

dd($votes);

// switch/case
