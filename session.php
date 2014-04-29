<?php
if (isset($_POST["reset"])) {
	session_destroy();
	$_SESSION = array();
	header("Location: index.php");
}
?>
