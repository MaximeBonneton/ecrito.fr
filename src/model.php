<?php
function getEnableEcrito(){
    //We connect to the database
    try{
        $db = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the enabled ecrito
    $sqlQuery = 'SELECT title FROM ecritos WHERE is_enabled=TRUE';
    $ecritosStatement = $db->prepare($sqlQuery);
    $ecritosStatement->execute();
    $ecritos = $ecritosStatement->fetchAll();

    return $ecritos;
}
?>

<?php
if(isset($_GET['is_enabled'])){
    $sqlQuery = 'SELECT * FROM ecritos WHERE is_enabled= :is_enabled';

    $ecritosStatement = $db->prepare($sqlQuery);
    $ecritosStatement->execute([
        'is_enabled' => $_GET['is_enabled']
    ]);
    $ecritos = $ecritosStatement->fetchAll();
    ?>

    <?php
    foreach ($ecritos as $ecrito) {
    ?>
        <p><?= $ecrito['title']?>
    <?php
    }
}
?>