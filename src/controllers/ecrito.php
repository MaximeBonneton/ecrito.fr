<?php require_once('../src/model.php') ?>

<?php 
function ecrito($ecritoID){

    $ecrito = getEcrito($ecritoID);
    $comments = getComments($ecrito['id']);
    require('../templates/ecrito.php');

}
?>