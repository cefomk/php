<?php
// session_start();
// $_SESSION['visite'] = ($_SESSION['visite'] ?? 0) + 1;


include './partials/header.php';
include './include/fonctions.php';
// include_once './partials/header.php';
// require './partials/header.php';
?>
<main>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, nihil iste! Aut, error tenetur unde, modi nisi ipsa ratione eum officiis non omnis corrupti delectus eaque magni quisquam et sint.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, omnis expedita esse vero maiores alias, adipisci veritatis recusandae possimus non delectus itaque atque fuga placeat, nam voluptatum. Deleniti, totam quis?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, omnis expedita esse vero maiores alias, adipisci veritatis recusandae possimus non delectus itaque atque fuga placeat, nam voluptatum. Deleniti, totam quis?</p>
        <p>Vous avez <?= calculAge(1990) ?> ans.</p>
    </section>
</main>

<?php
include './partials/footer.php';
?>