<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // get current testimonals array and store in variable $testimonals
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
	require 'navigation.php'
	?>

		<div class="staticText" id="testimonialText">
			<h1> Testimonials </h1>
			<p class="review">The event was really great! People were telling me it was the best they have been to in years and the headphones were a big part of the success!</p>
			<p class="author">— Mark, CA</p>
			<div class="hr " style="height:1px;background:#CCC;margin: 25px 0;width:90%;"></div>
			<p class="review">The event was awesome! Everyone had a great time and really enjoyed themselves. It was truly a successful event.</p>
			<p class="author">— Sarah, NYC</p>
			<div class="hr " style="height:1px;background:#CCC;margin: 25px 0;width:90%;"></div>
			<p class="review">My friends had so much fun, they were a little hesitant at first but, once they tried it they couldn’t stop dancing and everyone was walking around with them all night. One headphone on and one off, we could still have conversation and then start dancing if we wanted to everyone was happy and laughing the entire night, all ages 5 and up loved them.</p>
			<p class="author">— Lori, WV</p>
			<div class="hr " style="height:1px;background:#CCC;margin: 25px 0;width:90%;"></div>
			<p class="review">We absolutely LOVED putting on this event for our kids and our friends!!! No one had heard of a silent dance party and thought it was so much fun. What was great was we held it outside under a tent with christmas lights — and we didn’t have to worry about disturbing the neighbors into the wee hours with loud music.</p>
			<p class="author">— Kathy &amp; Jenn, MI</p>
			<div class="hr " style="margin: 10px 0;"></div>
		</div>


		<?php
			require 'footer.php'
		?>

	</body>
</html>


