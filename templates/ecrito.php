<?php 
$pageTitle="Ecrit0";
$pageStyle="ecritoStyle";?>

<?php ob_start();?>
<section id="ecrito">
    <div class="cellFullSize">
        <span class="title"> <?= htmlspecialchars($ecrito['title']);?> </span>
        <p> <?= nl2br(htmlspecialchars($ecrito['core_text'])); ?> </p>
    </div>
    <div class="comment">
        <h5>Commentaire :</h5>
        <?php foreach($comments as $comment){ ?>
            <p><?= htmlspecialchars($comment['name']);?> : <?= nl2br(htmlspecialchars($comment['text']));?></p>
        <?php } ?>
    </div>
</section>
<?php $content = ob_get_clean(); ?>