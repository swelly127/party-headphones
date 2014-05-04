<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  $press = $mysqli->query("SELECT * FROM Press");
  ?>



<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Press</title>
		<link rel="stylesheet" type="text/css" href="css/static.css">
		<link rel="stylesheet" type="text/css" href="css/navigation.css">
	</head>

	<body>

	<?php
	require 'navigation.php'
	?>

		<div class="staticText" id="pressText">
			<h1> Press </h1>
			<ul class="list-posts">
			<?php
				while ($p = $press->fetch_assoc()) {
	            	echo "<li class='post'><div><div class='post-title'>";
	            	echo "<a class='post-title heading-title' href='".$p["URL"]."'>";
	            	echo "<h2 class='heading-title'>".$p["Title"]."</h2></a>";
	            	echo "<div class='clear'></div></div><p class='short-content'>";
	            	echo $p["Preview"];
	            	echo "</p><a title='Readmore' class='read-more' href='".$p["URL"]."'><span>";
	            	echo "<span>Read more</span></span></a></div></li>";
	    		}
    		?>
			</ul>
		</div>

		<?php
			require 'footer.php'
		?>


	</body>
</html>
