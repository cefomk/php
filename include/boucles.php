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
// for ($i = 0; $i < 8; $i++) {
// 	if ($i === 3) {
// 		continue;
// 	}
// 	echo $i;
// }

$planetes = ['mars','uranus','jupiter','terre','saturne'];

// foreach($planetes as $planete)
// {
// 	echo $planete . '<br />';
// }

// foreach($planetes as $clef => $planete)
// {
// 	echo $clef . ': ' . $planete . '<br />';
// }

// foreach($planetes as $clef => &$planete)
// {
// 	echo $clef . ': ' . $planete . '<br />';
// }
// $planete = 'beta';
// dd($planetes);

$users = [
	'nom' => 'Doupet',
	'email' => 'ldoupet@yahoo.com',
	'competences' => ['php','react','python']
];

// foreach($users as $key => $val)
// {
// 	// echo $key . ': ' . $val . '<br>';
// 	echo $key . ': ' . json_encode($val) . '<br>';
// }

// foreach ($users as $key => $val) {
// 	if ($key === 'competences') {
// 	  //dbug($user['competences']);
// 	  echo 'competences : ';
// 	  foreach ($users['competences'] as $comp) {
// 		echo $comp . ', ';
// 	  }
// 	} else {
// 	  echo $key . ' : ' . $val . '<br>';
// 	}
//   }

// foreach($users as $key => $val)
// {
//      if($key == 'competences' && is_array($val)){
        
//         echo $key . ': ';
//         foreach($val as $competences){
//             echo $competences . ', ';
//         }
//     }else{
//         echo $key . ': ' . $val . '<br>';
//     }
// }

// foreach($users as $key => $val)
// {
// 	if(is_array($val))
// 	{
// 		$val = implode(',', $val);
// 	}
// 	echo $key . ': ' . json_encode($val) . '<br>';
// }

// foreach($users as $key => $val)
// {
// 	echo $key . ': ' ;
// 	if (is_array($val))
// 	{
// 		foreach($val as $competence)
// 		{
// 			echo $competence . ',';
// 		}
// 	} else {
// 		echo $val;
// 	}
// 	echo '<br>';
// }


foreach($users as $key => $val):
	echo $key . ': ' ;
	if (is_array($val)):
		foreach($val as $competence):
			echo $competence . ',';
		endforeach;
	else:
		echo $val;
	endif;
	echo '<br>';
endforeach;


// foreach($planetes as $key => $val):
// 	echo $key . ': ' . $val . '<br>';
// endforeach;