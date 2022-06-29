<?php 
$pageTitle="Ecrito - Login";
$coverStyle="loginStyle";
?>


<?php ob_start();?>
<div class=fog></div>
<form id="login" action="" method="post">
    <p>Connecte toi :</p>
    <div>
        <label for="pseudo">Pseudo :</label><br/>
        <input type="text" id="pseudo" name="name"/>
        <br/><br/>
    </div>
    <div>
        <label for="pwd">Mot de passe :</label><br/>
        <input type="password" id="pwd" name="pwd"/>
        <br/><br/>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $cover = ob_get_clean(); ?>