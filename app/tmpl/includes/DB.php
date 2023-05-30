<?php
    require 'app/libs/rb.php';
    
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'detaliscam');

    R::setup( 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
        DB_USER, DB_PASSWORD );
?>