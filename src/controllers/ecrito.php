<?php require_once('../src/model.php') ?>

<?php 
function ecrito($ecritoID){

    $ecrito = getEcrito($ecritoID);
    $comments = getComments($ecrito['id']);
    require('../templates/ecrito.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>