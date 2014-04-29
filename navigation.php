<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_SESSION['username'])) {
    header("Location: portal.php");
  }

  if (isset($_POST["login"])) {
  	// handle login and redirect to portal.php if sucessful. otherwise set $error to and error msg
    header("Location: portal.php");
  }
?>

<div id="navigation">
	<div id="logo">
		<a href="index.php"><img class="logo" src="img/logo.png" alt="Audiarchy Logo" style="height:70px;"></a>
	</div>

	<div id="navbar">
		<ul>
			<li><a href="index.php#div3">Technology</a></li>
			<li><a href="index.php#div4">Product</a></li>
			<li><a href="order.php">Order Now</a></li>
		</ul>
		<!--Add a very simple login form that appears on scrollover-->
	</div>
</div>
<div id="buffer"></div>
