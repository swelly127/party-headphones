<?php
ini_set('safe_mode', 'Off');
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 7);
session_id(6157);
session_start();
if (isset($_POST["reset"])) {
	session_destroy();
	$_SESSION = array();
	header("Location: index.php");
}
?>
