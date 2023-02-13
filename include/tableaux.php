<?php
include '../include/fonctions.php';
// Tableau indexé
// declaration d'un tableau

// $tableau1 = [];
// $tableau2 = array();
// $tableau2 = array{};

// $tableau3 = [true,4,6.7,[5,'truc',['muche',8,8.9]]];
// $tableau3 = [
//     true,
//     4,
//     6.7,
//     [
//         5,
//         'truc',
//         [
//             'muche',
//             8,
//             8.9
//         ]
//     ]
// ];

// dd($tableau3);

// $tableau = [];
// $tableau = 'Janvier';
// $tableau = 45;
// $tableau = false;

// array_push($tableau,'Voiture',true);

// $tableau = [true,4,6.7,[5,'truc',['muche',8,8.9]]];
// $notes = [12,9,13,7,2];
// dd($notes);

// $tableauFusion = array_merge($tableau,$notes);
// dd($tableauFusion);

// Afficher la note 13 dans le tableau notes
// dd($notes[2]);

// Afficher la note 13 dans le tableau tableauFusion
// dd($tableauFusion[6]);

// Afficher le chiffre 5 dans le tableau tableauFusion
// dd($tableauFusion[3][0]);

// Afficher le chiffre 8.9 dans le tableau tableauFusion
// dd($tableauFusion[3][2][2]);

// Tableau associatif

// $fruits = [
//     'banane' => 'jaune',
//     'pomme' => 'rouge',
//     'kiwi' => 'vert'
// ];

// Afficher la couleur de kiwi
// dd($fruits['kiwi']);

// $fruits['poire'] = 'rouge';
// // dd($fruits);

// $chaine = implode('*',$fruits);
// // dd($chaine);
// $fruits2 = explode('*',$chaine);
// dd($fruits2);

// Fonction associes aux tableau 

// $planetes = ['mars','terre','uranus','venus','jupiter'];
// $planetes = ['m' => 'mars','t' => 'terre','u' => 'uranus','v' =>'venus','j' => 'jupiter'];

// dbug($planetes);
// dd(sort($planetes));

// sort($planetes);
// asort($planetes);
// rsort($planetes);
// ksort($planetes);
// arsort($planetes);
// krsort($planetes);
// foreach ($planetes as $key => $val) {
//     echo "planetes[" . $key . "] = " . $val . "</br>";
// }

// $tab= [];
// $tab[] = ['A','B','C'];
// $tab[] = ['Q','R','T'];
// $tab[] = ['E','U','P','I'];

// // Ecrire le mot CEPPIC avec les lettres du tableau $tab

// // dd($tab);
// echo $tab[0][2] . $tab[2][0] . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2];

$person1 = [
    'nom' => 'Carle',
    'prenom' =>  'Awa',
    'email' => 'cawa@yahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludu@gmail.com'
    ],
];


// // Afficher les phrase suivantes :
// // Le nom de Lucie est  Dupond.
// echo 'Le nom de ' . $people[2]['prenom'] . 'est ' . $people[2]['nom'] .'.</br>';
// // L'email de Michel MOURAD est moumi@caramail.com
// echo 'L\'email de ' . $people[1]['prenom'] . ' ' . strtoupper($people[1]['nom']) . ' est ' . $people[1]['email'] . '.</br>';
// Afficher les personnes dans un tableau html nom/prenom/email
?>
<!-- <table class="montableau">
    <thead>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php  //foreach ($people as $key => $val) { 
    ?>
        <tr>
            <td><? //=$val['prenom']
                ?></td>
            <td><? //=$val['nom']
                ?></td>
            <td><? //=$val['email']
                ?></td>
        </tr>
    <?php //} 
    ?>
    </tbody>
</table> -->

<?php

// $jsonFile = json_encode($people);
// dd($jsonFile);

$jsonObj = '{
   "nom": "Pontpasneuf",
   "prenom": "Albert",
   "email": "pontal@free.fr",
   "couleur": ["rouge","vert","jaune"],
   "image": "https://ximg.es/128x128/000/fff" 
}';

$jsonArrayPhp = json_decode($jsonObj,true);
// dbug($jsonArrayPhp);

// Afficher une card pour cette personne
?>

<figure>
    <img src="<?=$jsonArrayPhp['image']?>" alt="">
    <figcaption>
        <ul>
            <li><?=$jsonArrayPhp['prenom']?> <?=$jsonArrayPhp['nom']?></li>
            <li><?=$jsonArrayPhp['email']?></li>
        </ul>
    </figcaption>
</figure>