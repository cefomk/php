<?php
// A l'aide d'une boucle foreach clef/valeur , parcourir le fichier colors.json , afin  d'obtenir le resultat de la capature d'ecran : resultat-travaux-03.png
$jsonColorFile = file_get_contents('./colors.json');
$jsonColorArrayPhp = json_decode($jsonColorFile,true);

foreach ($jsonColorArrayPhp as $clef => $valeur)
{
    // echo '<div style="width:200px;height:200px;background-color:' . $valeur['value'] . ';color:white;font-weight: bold;display: flex;justify-content: center;align-items: center;">' . $jsonColorArrayPhp[$clef]['color'] . '</div>';
    echo '<div style="width:200px;height:200px;background-color:' . $valeur['value'] . ';color:white;font-weight: bold;display: flex;justify-content: center;align-items: center;">' . $valeur['color'] . '</div>';
}