<?php
    //Henter inn API'en slik at vi kan opprette en databasetilkobling 
    require_once 'meekrodb.2.3.class.php';
    
    //Setter brukernavn og passordet til MySql brukeren, og velger en database og koble oss til 
    DB::$user = 'test';
    DB::$password = 'test';
    DB::$dbName = 'enkelkode';

?>