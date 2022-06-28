<?php require_once('../src/model.php') ?>

<?php 
function home(){

    $posts = get10lastEcritos();
    require('../templates/home.php');

    require('../templates/login.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');
}

?>
