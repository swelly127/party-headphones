<?php
// on form submit, use php mailer module to directly send an email to jake@partyheadphones.com
// no mysql needed
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us!</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/static.css">
	</head>

	<body>

	<?php
		require 'navigation.php'
	?>

		<div class="staticText" id="contactText">
			<!-- for each variable in FAQ -->
			<p>
				Contact us at Wireless Audio Solutions, LLC
				95 Brown Road Suite 163
				Ithaca, NY 14850
			</p>
		</div>

		<?php
			require 'footer.php'
		?>

	</body>
</html>
