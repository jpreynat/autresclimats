<?php

// ADMINISTRATION INFO
define('ADMIN_NAME', 'acadmin');
define('ADMIN_PASS', 'acpass');

// START SESSION
session_start();

// MYSQL CONNECTION
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_NAME', 'autresclimats');
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

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