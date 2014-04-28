<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // get current testimonals array and store in variable $testimonals
  }
  ?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>FAQ</title>
		<link rel="stylesheet" type="text/css" href="css/static.css">
	</head>

	<body>

	<?php
	require 'navigation.html'
	?>

		<div id="testimonialText">
			<p><Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
			</p>
		</div>


		<div id="foot">
		<?php
			require 'footer.php'
		?>
		</div>

	</body>
</html>
