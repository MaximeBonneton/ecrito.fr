<?php require_once('../src/ecritosModel.php') ?>
<?php require_once('../src/mainModel.php') ?>

<?php 
function home(){

    $posts = get10lastEcritos();
    require('../templates/home.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');
}

?>
