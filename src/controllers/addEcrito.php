<?php require_once('../src/ecritosModel.php') ?>

<?php 
function addEcrito(){


    if(isset($_POST['title']) && $_POST['text'] !== '' &&
    isset($_POST['text']) && $_POST['text'] !== '') {

        pushEcrito($_POST['title'],$_POST['text'],2);
        require('../templates/submitedEcrito.php');
    }
    else{
        require('../templates/addEcrito.php');
    }

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>