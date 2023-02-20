<?php
include '../include/fonctions.php';

//dd($_POST);
// dd($_POST['competence']);

echo 'Votre nom est : ' . $_POST['nom'] . '<br>';
// echo 'Votre email est : ' . $_POST['email'] . '<br>';

echo 'Les competences sont : ' . implode(',',$_POST['competence']);

// header('Location: http://localhost/php');
// header('Location: /');
