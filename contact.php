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

			<h1>Contact</h1>
			<div style="width: 100%;height: 100%;">
			<div style="width: 100%;float: left;vertical-align: middle;margin-bottom: 20px;">
			<div style="width: 80px;float: left;padding: 0px 20px;width: 10%;max-width: 80px;"><img alt="Phone" src="http://partyheadphones.com/v2/wp-content/themes/wp_techgostore-theme-package/images/contact_phone.png" style="width:100%;"></div>
			<div style="font-size: 18px;margin-top: 3%;"><span>607.216.1082</span></div>
			</div>
			<div style="width: 100%;float: left;vertical-align: middle;margin-bottom: 20px;">
			<div style="width: 80px;float: left;padding: 0px 20px;width: 10%;max-width: 80px;"><img alt="email" src="http://partyheadphones.com/v2/wp-content/themes/wp_techgostore-theme-package/images/contact_email.png" style="width:100%;"></div>
			<div style="font-size: 18px;margin-top: -5px;line-height: 1.3em;"><span>For sales inquiries or bulk orders: <a href="mailto:sales@partyheadphones.com">sales@partyheadphones.com</a> <br>
			For general questions or information: <a href="mailto:info@partyheadphones.com">info@partyheadphones.com</a> <br>
			For Technical Support Services: <a href="mailto:tech@partyheadphones.com">tech@partyheadphones.com</a> <br>
			For employment opportunities: <a href="mailto:careers@partyheadphones.com">careers@partyheadphones.com</a></span>
			</div>
			</div>
			<div style="width: 100%;float: left;vertical-align: middle;margin-bottom: 20px;">
			<div style="width: 80px;float: left;padding: 0px 20px;width: 10%;max-width: 80px;"><img alt="email" src="http://partyheadphones.com/v2/wp-content/themes/wp_techgostore-theme-package/images/contact_loc.png" style="width:100%;"></div>
			<div style="font-size: 18px;margin-top: 0.6%;line-height: 1.3em;"><span>Wireless Audio Solutions, LLC<br>95 Brown Road Suite 163<br>Ithaca, NY 14850</span>
			</div>
			</div>
			</div>
		</div>

		<?php
			require 'footer.php'
		?>

	</body>
</html>
