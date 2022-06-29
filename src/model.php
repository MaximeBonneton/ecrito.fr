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
        if($user['name']===$name && $user['password']===$pwd) return 0;
    }
    return 1;
}

?>