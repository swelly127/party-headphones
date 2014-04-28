<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // get current faq array and store in variable $FAQ
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

		<div class="staticText" id="faqText">
			<h1> FAQ </h1>
			<!-- for each variable in FAQ -->
			<div class="tabbable tabs-default" id="multitabs_1642117843">
			<ul class="nav nav-tabs" id="multitabs_1642117843_inside">
			<li class=""><a href="#multitabs_1642117843_inside0" data-toggle="tab">RENTALS</a></li>
			<li class="active"><a href="#multitabs_1642117843_inside1" data-toggle="tab">Our Products</a></li>
			</ul>
			<div class="tab-content" id="multitabs_1642117843_insideContent">
			<div class="tab-pane fade" id="multitabs_1642117843_inside0">
			<h4 id="h4_spac">HOW DO I RENT?</h4>
			<table width="100%" border="0" cellspacing="5" cellpadding="5">
			<tbody>
			<tr>
			<td style="width: 35px;"><img alt="" src="http://partyheadphones.com/wp-content/themes/phpv2/images/1.png"></td>
			<td>Need a quote? Rental pricing is available in our <a href="http://partyheadphones.com/ultimate-guide-silent-disco">Ultimate Guide to Silent Disco</a>. For special event pricing, contact us at <a href="mailto:info@partyheadphones.com">info@partyheadphones.com</a> or (607) 216-1082.</td>
			</tr>
			<tr>
			<td style="width: 35px;"><img alt="" src="http://partyheadphones.com/wp-content/themes/phpv2/images/2.png"></td>
			<td>The Party Headphones Rental Package will arrive at your door two days before your event. Each pair of headphones comes professionally tested and fully charged with approximately 8 hours of battery life. Each package also includes the number of headphones requested and a transmitter with specialty cords for auxilliary or RCA output. XLR cords are available upon request.</td>
			</tr>
			<tr>
			<td style="width: 35px;"><img alt="" src="http://partyheadphones.com/wp-content/themes/phpv2/images/3.png"></td>
			<td>On the day of your event, we offer 24/7 remote support to ensure everything goes according to plan.</td>
			</tr>
			<tr>
			<td style="width: 35px;"><img alt="" src="http://partyheadphones.com/wp-content/themes/phpv2/images/4.png"></td>
			<td>After the event, simply repack the equipment, place the included return-shipping label on the case, and call FedEx to schedule a pickup!</td>
			</tr>
			</tbody>
			</table>
			<h4 id="h4_spac">How much does a rental cost?</h4>
			<p>For pricing information and event planning tips, download our free <a href="http://partyheadphones.com/ultimate-guide-silent-disco">Ultimate Guide to Silent Disco</a>.</p>
			<h4 id="h4_spac">How long does the rental last?</h4>
			<p>Our standard quote covers a single day event. For longer events, we offer consecutive-day pricing at an additional $3 per headphone for each additional day. The headphones arrive fully charged, with approximately 8 hours of battery life, and we include specialty 24-port chargers are included for multiple-day events.</p>
			<h4 id="h4_spac">How do I pay?</h4>
			<p>We require a 50% deposit to secure a reservation. The remainder is required 7 days before the event date, prior to the equipment shipment. We accept PayPal and all major credit cards.</p>
			<h4 id="h4_spac">What is your cancellation policy?</h4>
			<p>Cancellations must be submitted at least three days before the scheduled shipping date to avoid a 75% charge.<br>
			</p></div>
			<div class="tab-pane fade  active in" id="multitabs_1642117843_inside1">
			<h4 id="h4_spac">How does the Unisono Silent Disco RF Headphone offer a better silent disco experience?</h4>
			<p>The Unisono Silent Disco RF Headphone is a premium-quality model that offers superior sound quality, portability, and convenience. The rechargeable batteries offer up to eight hours of non-stop fun, while their compact, folding design allows you to transport the system — and your party — anywhere. </p>
			<h4 id="h4_spac">How does the Party Headphones System work? What can I plug into?</h4>
			<p>Our plug-and-play system allows you to connect any electronic device with a headphone jack or audio input to the Unisono Transmitter. Connect DJ mixers, a laptop, iPod, iPad, a TV, or any other device with a play button to the transmitter to instantly start your party. </p>
			<h4 id="h4_spac">How many audio channels do you have?</h4>
			<p>The Unisono Silent Disco RF Headphone system offers two channels of flawless audio.</p>
			<h4 id="h4_spac">What is the wireless range of the Unisono Silent Disco RF Transmitter?</h4>
			<p>Our system can broadcast your playlist at a radius of up to 300 feet.</p>
			<h4 id="h4_spac">How long does the Unisono Silent Disco RF Headphone batteries last?</h4>
			<p>Batteries last from 5-8 hours on a single charge.</p>
			<h4 id="h4_spac">How are the headphones charged?</h4>
			<p>Our custom mini-USB charging hubs allow you to charge up to 24 headphones at once.</p>
			<h4 id="h4_spac">How long does it take to fully charge the headphones?</h4>
			<p>If a pair of headphones is entirely drained, they require approximately three hours to reach a full charge at eight hours of battery life. However, charging time is cut dramatically if there is still a few hours left of battery life in the headphone.</p>
			<h4 id="h4_spac">What kind of batteries do the headphones use?</h4>
			<p>The Unisono Silent Disco RF Headphone is powered by a rechargeable 420mA lithium polymer battery</p>
			</div>
			</div>
			</div>
		</div>
	<?php
		require 'footer.php'
	?>



	</body>
</html>
