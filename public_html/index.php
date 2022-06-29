<?php
session_start();

//Charging controllers
require_once('../src/controllers/home.php');
require_once('../src/controllers/ecrito.php');
require_once('../src/controllers/addEcrito.php');
require_once('../src/controllers/login.php');

if(isset($_GET['action']) && $_GET['action'] !== '') {
    if($_GET['action']==='ecrito'){
        if(isset($_GET['id']) && $_GET['id'] > 0){
            $ecritoID = $_GET['id'];
            ecrito($ecritoID);
        } else{
            echo "Erreur : Aucun identifiant d'ecrito envoyé.";
            die;
        }
    } elseif($_GET['action']==='addEcrito'){
        addEcrito();
    } elseif($_GET['action']==='login'){
        login();
    } elseif($_GET['action']==='disconnect'){
        $_SESSION['name'] = NULL;
        $_SESSION['id'] = NULL;
        home();
    } else{
        echo "Erreur : La page que vous cherchez n'existe pas.";
    }
} else{
    home();
}


?>