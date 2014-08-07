<?php

// ADMINISTRATION INFO
define('ADMIN_NAME', 'acadmin');
define('ADMIN_PASS', 'acpass');

// START SESSION
session_start();

// MYSQL CONNECTION
define('DB_HOST', 'sql312.byethost6.com');
define('DB_NAME', 'b6_15005925_ac');
define('DB_USER', 'b6_15005925');
define('DB_PASS', '11n0vembre');

// BASE SERVER INFO
define('BASE_HOST', $_SERVER['HTTP_HOST']);
$base_uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
define('BASE_URI', $base_uri);


// DB Connexion
function getDB() {
    try {
        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS,
                     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}

?>