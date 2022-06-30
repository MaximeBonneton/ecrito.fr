<?php

function getEnabledEcritos(){

    //We retrieve all the enabled ecrito (with prepare and execute function)
    $sqlQuery = 'SELECT * FROM ecrito WHERE is_enabled=TRUE';
    $statement = dbConnect()->prepare($sqlQuery);
    $statement->execute();
    $ecritos = $statement->fetchAll();

    return $ecritos;
}
?>

<?php
function get10lastEcritos(){

    //We retrieve the 10 last ecritos enabled (with query function)
    $statement = dbConnect()->query(
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

    //We retrieve all the enabled ecrito (with prepare and execute function)
    $sqlQuery = 'SELECT * FROM ecrito WHERE id = ?';
    $statement = dbConnect()->prepare($sqlQuery);
    $statement->execute([$id]);
    $ecrito = $statement->fetch();

    return $ecrito;
}
?>

<?php
function pushEcrito($title,$text,$user_id){

    //
    $sqlQuery = 'INSERT INTO ecrito (title,core_text,user_id) VALUES (:title, :core_text, :user_id)';
    $statement = dbConnect()->prepare($sqlQuery);
    $affectedLine = $statement->execute([
        'title' => $title,
        'core_text' => $text,
        'user_id' => $user_id
    ]);

    return ($affectedLine>0);

}
?>