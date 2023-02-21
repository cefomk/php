<?php
include '../include/fonctions.php';

// dd($_SERVER);
// dd($_GET);
// dd($_POST);
// dd($_POST['competence']);

// echo 'Votre nom est : ' . $_POST['nom'] . '<br>';
// echo 'Votre email est : ' . $_POST['email'] . '<br>';

// echo 'Les competences sont : ' . implode('-',$_POST['competence']);


// header('Location: http://localhost/php');
// header('Location: /');

$erreurs = [];

// if($_SERVER['REQUEST_METHOD'] === 'POST'):
//if(!empty($_POST['submitted'])): 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['submitted'])) :

    if(textData($_POST['nom']) == 0):
        $erreurs['nom'] = 'Votre nom est invalide';
    endif;

    $nom = cleanData(($_POST['nom']));
    if (!$nom) :
        $erreurs['nom'] = 'Votre nom est invalide';
    endif;

    $email = cleanData(($_POST['email']));
    if (!$email) :
        $erreurs['email'] = 'Votre email est invalide';
    endif;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $erreurs['email'] = 'Votre email est invalide';
    endif;

    // if (!empty($_POST['titre'])) :
    //     $titre = $_POST['titre'];
    // endif;
    // if (!empty($_POST['commentaire'])) :
    //     $commentaire = $_POST['commentaire'];
    // endif;
    
    dd($erreurs);
    
    echo '<ul>';
    if (count($erreurs) > 0) :
        foreach ($erreurs as $erreur) {
            echo '<li>' . $erreur .  '</li>';
        }
    endif;
    echo '</ul>';

    echo $nom . '<br>';
    echo $email . '<br>';
// echo $titre . '<br>';
// echo $commentaire . '<br>';

else :
    // echo 'Validation echoué !';
    exit('Validation echoué !');
endif;
