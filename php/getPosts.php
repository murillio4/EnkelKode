<?php
    //Henter inn php dokumentet connect slik at vi kobler oss til databasen
    require_once 'connect.php';
    
    //Her putter vi inn dataen vi får når vi gjør databasekallet med sql. 
    //Ved å putte inn DESC får vi raden med høyest id først  
    $results = DB::query("SELECT * FROM post ORDER BY id DESC");
    
    //vi "returnerer" så variabelen results
    echo json_encode($results);

?>
