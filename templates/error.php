<?php 
$pageTitle="Ecrito - Login";
$coverStyle="loginStyle";
?>


<?php ob_start();?>
<div class=fog></div>
<div id="error">
    <p>Ba... qu'est-ce que c'est que cette histoire ?</p>
    <p>Il semblerait qu'une erreur ce soit produit : </p>
    <p><?= $errorMessage ?></p>
</div>
<?php $cover = ob_get_clean(); ?>