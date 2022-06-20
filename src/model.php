<?php
function getEnabledEcritos(){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the enabled ecrito (with prepare and execute function)
    $sqlQuery = 'SELECT * FROM ecrito WHERE is_enabled=TRUE';
    $statement = $database->prepare($sqlQuery);
    $statement->execute();
    $ecritos = $statement->fetchAll();

    return $ecritos;
}
?>

<?php
function get10lastEcritos(){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve the 10 last ecritos enabled (with query function)
    $statement = $database->query(
        'SELECT title, core_text,id FROM ecrito 
        WHERE is_enabled=TRUE ORDER BY creation_date DESC LIMIT 0, 10'
    );
    $posts=[];
    while(($row = $statement->fetch())) {
        $post=[
            'title' => $row['title'],
            'core_text' => $row['core_text'],
            'id' => $row['id']
        ];
        $posts[]=$post;
    }
    
    return $posts;
}
?>


<?php
function getEcrito($id){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the enabled ecrito (with prepare and execute function)
    $sqlQuery = 'SELECT * FROM ecrito WHERE id = ?';
    $statement = $database->prepare($sqlQuery);
    $statement->execute([$id]);
    $ecrito = $statement->fetch();

    return $ecrito;
}
?>

<?php
function getComments($user_id){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT * FROM comment JOIN user ON (user.id=user_id)  WHERE user_id = ?';
    $statement = $database->prepare($sqlQuery);
    $statement->execute([$user_id]);
    $comments = $statement->fetchAll();

    return $comments;
}
?>

<?php
if(isset($_GET['is_enabled'])){
    $sqlQuery = 'SELECT * FROM ecrito WHERE is_enabled= :is_enabled';

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