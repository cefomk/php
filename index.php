<?php

// un commentaire
# un commentaire
/*
commentaires sur 
plusieurs 
lignes
*/

// Variables
$variable = 'Une variable';
$Variable = 'Une Variable';

//echo "$variable, $Variable";
//echo '$variable , $Variable';

/*
$camelCase = 'une variable en camel case';
$snake_case = 'une variable en snake case';
$kebab-case = 'une variable en kebab case';
$PascalCase = 'une variable en pascale case';
*/

$nombre = 45;
$nombreDecimal = 10.5;

$boolean = false;
//echo $boolean;

$fruit1 = 'pomme';
$fruit2 = 'banane';

// echo "$fruit1" . " " . "$fruit2" . "<br>";
// echo "<p>$fruit1" . "<br>" . "$fruit2</p>";

// echo 'Aujourd\'hui il fait beau !';
//echo "Aujourd'hui il fait beau !";

$resultat = '';
$resultat .= '<h1>';
$resultat .= 'Cours PHP';
$resultat .= '</h1>';

// echo $resultat;
?>

<h2>Texte en html</h2>

<?php
$titre = 'Texte de titre';
?>

<h4><?php echo $titre; ?></h4>
<h4><?= $titre ?></h4>

<?php
$data1 = 'Hello';
$data2 = 'les terriens';
$data3 = 'Mars';
$data4 = 'planete';

// Afficher la phrase dasn un paragraphe : Hello, les terriens.Je viens de la planete Mars.
// Dans php et dans html !

echo '<p>' . $data1 . ', ' . $data2 . '.Je viens de la ' . $data4 . ' ' . $data3 . '.</p>';

$html = '';
//$html .= '<p>' . $data1 . ', ' . $data2;
$html .= '<p>';
$html .= $data1 . ', ' . $data2;
//$html .= '.Je viens de la ' . $data4 . ' ' . $data3 . '.</p>';
$html .= '.Je viens de la ' . $data4 . ' ' . $data3 . '.';
$html .= '</p>';

echo $html;
?>

<p><?= $data1 . ', ' . $data2 . '.Je viens de la ' . $data4 . ' ' . $data3 ?></p>

<?php

$tableau = ['groupe',23,4.5,false,[1,2,3]];
// echo '<pre>';
// var_dump($tableau);
// print_r($tableau);
// echo '</pre>';

//die();

// Variables Superglobales
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

// Constantes
define('HOST','localhost');
define('USER','Jon doe');
define('TABLEAU',['a',45,true,1.8]);

//echo HOST;
//echo USER;
print_r(TABLEAU);
echo '<hr>';
var_dump(TABLEAU);










