<?php
include './fonctions.php';

// session_start();

// $_SESSION['prenom'] = 'michel';
// $_SESSION['email'] = 'michel@yahoo.com';

// session_destroy();
// session_unset();

// dd($_SESSION);

// if ($_SESSION['login']):
//     echo 'Connecté .';
// else:
//     echo 'Non Connecté';
// endif;
// session_start();

// if(isset($_SESSION['visite'])):
//     echo $_SESSION['visite'];
//     unset($_SESSION['visite']);
// else:
//     echo 'La variable session visite n\'existe pas !';
// endif;

// dd($_SESSION);

// setcookie('cookie','mars');
// setcookie('cookie','mars',time() + 3600 * 24 * 30,'/');

if (isset($_COOKIE['cookie'])):
    echo 'Connecté';
else:
    echo 'Non connecté';
endif;
// echo $_COOKIE['cookie'];