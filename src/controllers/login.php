<?php require_once('../src/ecritosModel.php') ?>

<?php 
function login(){

    require('../templates/login.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>