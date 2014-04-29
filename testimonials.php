<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  $testimonials = $mysqli->query("SELECT * FROM Testimonials");
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Testimonials</title>
		<link rel="stylesheet" type="text/css" href="css/static.css">
		<link rel="stylesheet" type="text/css" href="css/navigation.css">
	</head>

	<body>

	<?php
	require 'navigation.php'
	?>

		<div class="staticText" id="testimonialText">
			<h1> Testimonials </h1>
			<?php
				while ($t = $testimonials->fetch_assoc()) {
	            	echo "<p class='review'>".$t['Review']."</p>";
	            	echo "<p class='author'>— ".$t["Name"].", ".$t["Location"]."</p>";
	            	echo "<div class='hr' style='height:1px;background:black;margin: 25px 0;width:90%;'></div>";
	    		}
    		?>
		</div>


		<?php
			require 'footer.php'
		?>

	</body>
</html>


