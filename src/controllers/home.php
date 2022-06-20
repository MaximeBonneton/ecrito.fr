<?php require_once('../src/model.php') ?>

<?php 
function home(){

    $posts = get10lastEcritos();
    require('../templates/home.php');
}

?>
