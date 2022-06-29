<?php
//Have to finish the fonction 
/*function getCommentsFromUser($user_id){
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
}*/
?>

<?php
function getCommentsFromEcrito($ecrito_id){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT * FROM comment JOIN user ON (user.id=user_id)  WHERE ecrito_id = ?';
    $statement = $database->prepare($sqlQuery);
    $statement->execute([$ecrito_id]);
    $comments = $statement->fetchAll();

    return $comments;
}
?>

<?php
function pushComment($comment,$user_id,$ecrito_id){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    $sqlQuery = 'INSERT INTO comment (text,user_id,ecrito_id) VALUES (:text, :user_id, :ecrito_id)';
    $statement = $database->prepare($sqlQuery);
    $statement->execute([
        'text' => $comment,
        'user_id' => $user_id,
        'ecrito_id' => $ecrito_id
    ]);
}
?>

<?php 

function getUsers(){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT id,name,password FROM user';
    $statement = $database->prepare($sqlQuery);
    $statement->execute();
    $users = $statement->fetchAll();
    return $users;

}

function verifUser($users,$name,$pwd){
    foreach ($users as $user) {
        if($user['name']===$name && $user['password']===$pwd) return 1;
    }
    return 0;
}

function getUserByName($name){
    //We connect to the database
    try{
        $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
            'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT * FROM user WHERE name = ?';
    $statement = $database->prepare($sqlQuery);
    $statement->execute([$name]);
    $user = $statement->fetch();
    return $user;
}

?>