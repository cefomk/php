<?php
include '../include/fonctions.php';

$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['submitted'])) :

    if (textData($_POST['nom']) == 0) :
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

    echo '<ul>';
    if (count($erreurs) > 0) :
        foreach ($erreurs as $erreur) {
            echo '<li>' . $erreur .  '</li>';
        }
    else :
        header('Location: http://localhost/php');
    endif;
    echo '</ul>';

endif;
