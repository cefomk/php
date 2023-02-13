<?php
//  include './include/fonctions.php';
//  dd($_SERVER);
// dd($_SERVER['HTTP_HOST']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?='http://' . $_SERVER['HTTP_HOST'] . '/php'  .  '/assets/css/style.css'?>">
    <title>PHP</title>
</head>
<body>
<header>
    <?php $titre = 'Cours PHP'; ?>
    <h1><?= $titre ?></h1>
    <?php include './partials/menu.php' ?>
</header>