<?php
$pageTitle="Ecrit0 - Page d'accueil";
$pageStyle="homeStyle";?>

<?php ob_start();?>
<section id="currentEcrito">

    <?php foreach($posts as $post){ ?>
        <div class="cell">
            <span class="title"> <?= htmlspecialchars($post['title']);?> </span>
            <p> <?= nl2br(htmlspecialchars($post['core_text'])); ?> </p>
            <a href="?action=ecrito&id=<?= urlencode($post['id']);?>">Voir</a>
        </div>
    <?php } ?>

</section>

<?php $content = ob_get_clean(); ?>

<?php
//Charging layout, header and footer
require_once('../templates/header.php');
require_once('../templates/footer.php');
require_once('../templates/layout.php');
?>