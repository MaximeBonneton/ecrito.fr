<?php ob_start();?>

<?php foreach($enabledTitles as $title){
    echo $title['title'];
}
?>

<?php $content = ob_get_clean(); ?>