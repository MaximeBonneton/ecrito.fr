<?php ob_start(); ?>
<header>
    <nav>
        <ul id="navList">
            <li><a href="/">Accueil</a></li>        
            <li><a href="#">Les plus vues</a></li>
            <li><a href="/?action=addEcrito">Créer un ecrito</a></li>
            <li><a href="#">Compte</a></li>           
        </ul>
    </nav>
</header>
<?php $header = ob_get_clean(); ?>