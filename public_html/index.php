<?php
session_start();

//Charging controllers
require_once('../src/controllers/home.php');
require_once('../src/controllers/ecrito.php');
require_once('../src/controllers/addEcrito.php');
require_once('../src/controllers/login.php');


try{
    //Select the page to show
    if(isset($_GET['action']) && $_GET['action'] !== '') {
        //Page show one specific ecrito
        if($_GET['action']==='ecrito'){
            //Verif the id of the ecrito
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $ecritoID = $_GET['id'];
                ecrito($ecritoID);
            } else{ // If problem with the ID, stop the process and report an error
                throw new Exception("Aucun identifiant d'ecrito envoyé.");
            }
        // Page add a ecrito
        } elseif($_GET['action']==='addEcrito'){
            addEcrito();
        // Page with the cover "login"
        } elseif($_GET['action']==='login'){
            login();
        // Disconnect the current user
        } elseif($_GET['action']==='disconnect'){
            $_SESSION['name'] = NULL;
            $_SESSION['id'] = NULL;
            home();
        } else{ //If no correct action, stop the process and report an error
            throw new Exception("La page que vous cherchez n'existe pas.");
        }
    } else{ //If no action, show the main page
        home();
    }
} catch (Exception $e){
    $errorMessage = $e->getMessage();
    require_once('../templates/error.php');   
    require_once('../templates/layout.php');
}



?>