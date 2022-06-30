<?php

function dbConnect(){

    //We connect to the database
    $database = new PDO('mysql:host=localhost;dbname=ecrito-database;charset=utf8',
        'root','titou2000',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    return $database;
}

?>

<?php
function getCommentsFromEcrito($ecrito_id){

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT * FROM comment JOIN user ON (user.id=user_id)  WHERE ecrito_id = ?';
    $statement = dbConnect()->prepare($sqlQuery);
    $statement->execute([$ecrito_id]);
    $comments = $statement->fetchAll();

    return $comments;
}
?>

<?php
function pushComment($comment,$user_id,$ecrito_id){

    $sqlQuery = 'INSERT INTO comment (text,user_id,ecrito_id) VALUES (:text, :user_id, :ecrito_id)';
    $statement = dbConnect()->prepare($sqlQuery);
    $affectedLine = $statement->execute([
        'text' => $comment,
        'user_id' => $user_id,
        'ecrito_id' => $ecrito_id
    ]);

    return ($affectedLine>0);
}
?>

<?php 

function getUsers(){

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT id,name,password FROM user';
    $statement = dbConnect()->prepare($sqlQuery);
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

    //We retrieve all the comment with this user_id
    $sqlQuery = 'SELECT * FROM user WHERE name = ?';
    $statement = dbConnect()->prepare($sqlQuery);
    $statement->execute([$name]);
    $user = $statement->fetch();
    return $user;
}

?>