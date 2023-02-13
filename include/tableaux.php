<?php
include './fonctions.php';

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

$tableau = [true,4,6.7,[5,'truc',['muche',8,8.9]]];
$notes = [12,9,13,7,2];
// dd($notes);

$tableauFusion = array_merge($tableau,$notes);
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