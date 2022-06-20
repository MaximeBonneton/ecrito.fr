<?php 
$pageTitle="Ecrit0 - Ajout";
$pageStyle="addEcritoStyle";?>

<?php ob_start();?>
<section id="addEcrito">
    <form action="" method="post">
        <div>
            <label for="ecritoTitle">Titre de votre texte :</label><br/>
            <input type="text" id="ecritoTitle" name="title"/>
            <br/><br/>
        </div>
        <div>
            <label for="ecritoText">Le texte :</label><br/>
            <textarea name="text" id="ecritoText"></textarea>
            <br/><br/>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
</section>
<?php $content = ob_get_clean(); ?>

<?php
require_once('../templates/header.php');
require_once('../templates/footer.php');
require_once('../templates/layout.php');
?>