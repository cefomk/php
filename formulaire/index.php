<?php
// include '../include/fonctions.php';
// dbug($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire</h1>
    <!-- <form action="" method="POST"> -->
    <form action="traitement.php" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" required>
        </div>
        <div>
        <label for="cmmentaire">Commentaire :</label>
        <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
        </div>
        <div>
            Compétence: 
            <input type="checkbox" name="competence[]" value="php" id="php">PHP
            <input type="checkbox" name="competence[]"  value="html" id="html">HTML
            <input type="checkbox" name="competence[]"  value="css" id="css">CSS
            <input type="checkbox" name="competence[]"  value="pyhton" id="pyhton">Python
            <input type="checkbox" name="competence[]"  value="react" id="react">React
        </div>
        <div>
            Niveau :
            <input type="radio" name="niveau" value="debutant" id="debutant">Debutant
            <input type="radio" name="niveau" value="intermediaire" id="intermediaire">Intermediaire
            <input type="radio" name="niveau" value="expert" id="expert">Expert
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>

</html>