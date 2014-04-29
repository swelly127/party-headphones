
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

<div id="footer">

	<div id="footerNavbar">
		<ul>
			<li><a href="legal.php">Legal</a></li>
			<li><a href="faq.php">FAQ</a></li>
			<li><a href="testimonials.php">Testimonials</a></li>
			<li><a href="press.php">Press</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</div>
