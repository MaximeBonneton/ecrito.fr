<?php require_once('../src/ecritosModel.php') ?>
<?php require_once('../src/model.php') ?>

<?php 
function ecrito($ecritoID){
  
    //If we post a commment we verfy if the user is connected
    if(isset($_POST['cmt'])) {
        if(isset($_SESSION['id']) && isset($_SESSION['name'])){
            pushComment($_POST['cmt'],$_SESSION['id'],$ecritoID);
        } else {
            login();
        }
    }

    $ecrito = getEcrito($ecritoID);
    $comments = getCommentsFromEcrito($ecritoID);
    require('../templates/ecrito.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>