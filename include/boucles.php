<?php
include './fonctions.php';

// While
// $j = 0;

// while ($j <= 10) {
// 	echo $j . '-';
// 	//echo "$j-";
// 	$j++; // $j=$j + 1;
// }

// Avec une boucle while afficher toutes les années de 1970 à aujourd'hui
// dans une liste ul
// echo '<ul>';
// $annee = 1970;
// while ($annee <= 2023) {
// 	echo '<li>' . $annee . '</li>';
// 	$annee++;
// }
// echo '</ul>';

// Afficher le nombre de jour depuis 1970 
// $annee = 1970;
// $nj = 0;
// while ($annee < 2023) {
// 	$nj = $nj + 365;
// 	//$nj+=365;
// 	$annee++;
// }
// echo 'Le nombre de jour depuis ' . $annee . ' est ' . $nj . '.';

// Do while
// $y = 0;
// do {
// 	echo $y . '<br>';
// 	$y++;
// } while ($y <= 10);

// Break/Continue
// $i = 0;
// while ($i < 5) {
// 	if ($i === 3) {
// 		break;
// 	}
// 	echo $i++;
// }

// For
for ($i = 0; $i < 8; $i++) {
	if ($i === 3) {
		continue;
	}
	echo $i;
}

//$tab = [1,2,3,4,5,6];
