<?php require_once('../src/ecritosModel.php') ?>
<?php require_once('../src/mainModel.php') ?>

<?php 
function addEcrito(){

    //We verify if we receive a ecrito to add in the database
    if(isset($_POST['title']) && $_POST['text'] !== '' &&
    isset($_POST['text']) && $_POST['text'] !== '') {

        $success = pushEcrito($_POST['title'],$_POST['text'],$_SESSION['id']);
        if(!$success) {
            throw new Exception("Impossible d'ajouter l'ecrito.");
        }
        require('../templates/submitedEcrito.php');
    } //If not we show the page to add an ecrito
    else{
        require('../templates/addEcrito.php');
    }

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>