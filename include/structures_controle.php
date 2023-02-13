<?php
/* if/else/elseif

>
<
>=
<=
==
===
!=
!==

*/

$age = 10;
if($age >= 18) {
    echo 'Vous avez le droit de voter.';
} else {
    echo 'Votre âge ne vous permet pas de voter !';  
}

$heure = 23;
// Afficher "On est le matin" lorsque l'heure est infrieur à 12h00 et "On est le soir" lorsque l'heure est superieur à 18h00