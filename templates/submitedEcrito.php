<?php 
$pageTitle="Ecrit0 - Ajout";
$pageStyle="addEcritoStyle";?>

<?php ob_start();?>
<section id="submitedEcrito">
    <p>
        Bien reçu !
    </p>
    <p>
        Votre ecrito a été enregistré sous le nom de : <?= $_POST['title'];?> </br>
    </p>
    <p>
        Avec le texte suivant : </br>
        <?= $_POST['text'];?>
    </p>
</section>
<?php $content = ob_get_clean(); ?>

<?php
require_once('../templates/header.php');
require_once('../templates/footer.php');
require_once('../templates/layout.php');
?>