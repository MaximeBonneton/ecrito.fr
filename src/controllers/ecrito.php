<?php require_once('../src/ecritosModel.php') ?>
<?php require_once('../src/mainModel.php') ?>

<?php 
function ecrito($ecritoID){
  
    //If we post a commment we verfy if the user is connected
    if(isset($_POST['cmt']) && $_POST['cmt'] !== '') {
        if(isset($_SESSION['id']) && isset($_SESSION['name'])){
            $success = pushComment($_POST['cmt'],$_SESSION['id'],$ecritoID);
            if(!$success) {
                throw new Exception("Impossible d'ajouter le commentaire.");
            }
        } else {
            login();
        }
    }

    $ecrito = getEcrito($ecritoID);
    if(empty($ecrito)) {
        throw new Exception("Impossible d'afficher l'ecrito.");
    }

    $comments = getCommentsFromEcrito($ecritoID);
    require('../templates/ecrito.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>