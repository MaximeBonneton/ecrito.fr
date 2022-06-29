<?php require_once('../src/ecritosModel.php') ?>

<?php 
function login(){

    if(isset($_POST['name']) && isset($_POST['pwd'])) {
        if(verifUser(getUsers(),$_POST['name'],$_POST['pwd'])){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['id'] = getUserByName($_POST['name'])['id'];
            $loginMessage = 'true';
        } else
            $loginMessage = 'false';
    } else{
        $loginMessage = 'submit';
    }
    
    require('../templates/login.php');

    //Charging layout, header and footer
    require_once('../templates/header.php');
    require_once('../templates/footer.php');
    require_once('../templates/layout.php');

}
?>