<?php require_once('../src/model.php') ?>

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


}
?>