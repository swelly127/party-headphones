<?php // ** MySQL connection settings ** //
define('DB_HOST', 'localhost');
define('DB_NAME', 'info230_SP14_westside');
define('DB_USER', 'westside');
define('DB_PASSWORD', 'westside');
define("APP_ROOT", dirname(__FILE__));

ini_set('safe_mode', 'Off');
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 7);
session_id(6157);
session_start();
?>
