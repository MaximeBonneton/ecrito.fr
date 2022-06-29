<?php ob_start(); ?>
<header>
    <nav>
        <ul id="navList">

            <li><a href="/">Accueil</a></li>

            <?php if(isset($_SESSION['name']) && isset($_SESSION['id'])) { ?>
                <li><a href="#">Mes créations</a></li>
                <li><a href="/?action=addEcrito">Créer un ecrito</a></li>
            <?php } ?>   

            <li>
                <?php if(isset($_SESSION['name']) && isset($_SESSION['id'])) { ?>
                    <a href="/?action=disconnect">Déconnection </a>
                <?php }else{ ?>
                    <a href="/?action=login">Se connecter </a>
                <?php } ?>
            </li>     

        </ul>
    </nav>
</header>
<?php $header = ob_get_clean(); ?>