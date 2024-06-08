<?php
/**
 * Info Base de donnée
 */
define('HOST', 'localhost');
define('DBNAME', 'ecole');
define('USER', 'root');
define('PASSWORD', '');

/**
 * configuration de l'url racine
 */
if (isset($_SERVER['REQUEST_SCHEME']) && isset($_SERVER['SERVER_NAME']) && isset($_SERVER['SCRIPT_NAME'])) 
{
    $url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
    define('BASE_URL', $url);
}
