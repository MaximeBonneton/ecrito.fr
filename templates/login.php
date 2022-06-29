<?php 
$pageTitle="Ecrito - Login";
$coverStyle="loginStyle";
?>


<?php ob_start();?>
<div class=fog></div>
<div id="login">
    <a class="close" href="/">X</a>
    <?php if($loginMessage==='submit') { ?>
        <form action="/?action=login" method="post">
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
    <?php } elseif($loginMessage==='true'){?>
        <p>Vous êtes à présent connecté.</p>
    <?php } elseif($loginMessage==='false'){?>
        <form action="/?action=login" method="post">
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
        <p>Le pseudo ou le mot de passe est incorrecte</p>
    <?php } else{?> 
    <p>Erreur de chargement de la page</p>
    <?php } ?>
</div>
<?php $cover = ob_get_clean(); ?>