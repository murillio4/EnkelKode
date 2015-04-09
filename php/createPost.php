<?php
    //Henter inn php dokumentet connect slik at vi kobler oss til databasen
    require_once 'connect.php';
    
    //Henter parameterene vi sendte med get callen og lagrer de i lokale variabler
    $title =  $_GET["title"];
    $content = $_GET["content"];
    
    //sjekker om noen av verdiene er tomme
    if($title != NULL && $content != NULL) {
        
        //Setter inn en ny rad i tabelet post, der title = variabelen title og content = variabelen content
        DB::insert('post', array(
            'title' => $title,
            'content' => $content
        ));

    }

?>