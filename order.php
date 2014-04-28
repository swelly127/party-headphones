<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // handle login form and redirect to sugarCRM is successful, otherwise set $error to an error msg

  ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Order Now!</title>
		<link rel="stylesheet" type="text/css" href="css/order.css">
	</head>

	<body>

	<?php
		require 'navigation.php'
	?>

		<div id="step1Whole">
			<div id="step1">
				<ul>
					<li><strong>Step 1</strong></li>
					<li>Step 2</li>
					<li>Step 3</li>
				</ul>
			</div>

			<div class="instruction">
				<h2>Select your package size</h2>
			</div>

			<div id="orderOptions">
				<div id="eachOption">
					<form name="10pack" method="post" action="">
						<h3 class="optionTitle"><input type="radio" name="choose">Audiarchy 10-Pack</h3>
						<img class="img" src="img/headphones.jpg" alt="10 pack" height="100px" width="100px"><br>
						<div id="button">
							<button class="button" type="button" id="button10">See More +</button>
						</div>
						<span id="10packInfo"></span>
					</form>
				</div>

				<div id="eachOption">
					<form name="20pack" method="post" action="">
						<h3 class="optionTitle"><input type="radio" name="choose">Audiarchy 20-pack</h3>
						<img class="img" src="img/headphones.jpg" alt="20 pack" height="100px" width="100px"><br>
						<div id="button">
							<button class="button" type="button" id="button20">See More +</button>
						</div>

						<span id="20packInfo"></span>
					</form>
				</div>
			</div>
		</div>

		<div id="step2Whole">
			<div id="step2">
				<ul>
					<li>Step 1</li>
					<li><strong>Step 2</strong></li>
					<li>Step 3</li>
				</ul>
			</div>

			<div class="instruction">
				<h2>Select your maintenance plan</h2>
			</div>

			<div id="planOptions">
				<div class="eachPlan">
					<form name="basicPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePlan">Basic</h3>
						</div>
						<div id="price">
							<h2 class="dollars">$0</h2>
							<p>Per month</p>
						</div>
						<div id="details">
							<ul>
								<li>One year limited warranty on all product components</li>
							</ul>
						</div>
					</form>
						<div id="linkToLegal">
							<a href="legal.html/#basicLegal" target="_blank">Basic Details</a>
						</div>
				</div>

				<div class="eachPlan">
					<form name="premiumPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePlan">Premium</h3>
						</div>
						<div id="price">
							<h2 class="dollars">$35</h2>
							<p>Per month</p>
						</div>
						<div id="details">
							<ul>
								<li>Limited Warranty on all components for as long as subscription is maintained</li>
								<li>New earpads every 3 months</li>
								<li>10% discount on accessories and add-ons</li>
							</ul>
						</div>
					</form>
						<div id="linkToLegal">
							<a href="legal.php/#premiumLegal" target="_blank">Premium details</a>
						</div>
				</div>

				<div class="eachPlan">
					<form name="freedomPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePlan">Freedom</h3>
						</div>
						<div id="price">
							<h2 class="dollars">$55</h2>
							<p>Per month</p>
						</div>
						<div id="details">
							<ul>
								<li>Full warranty and next-day replacement policy on all components</li>
								<li>New earpads every month</li>
								<li>25% discount on accessories and add-ons</li>
							</ul>
						</div>
					</form>
						<div id="linkToLegal">
							<a href="legal.php/#freedomLegal" target="_blank">Freedom details</a>
						</div>
				</div>

				<div class="eachPlan">
					<form name="pureBlissPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePlan">Pure Bliss</h3>
						</div>
						<div id="price">
							<h2 class="dollars">$75</h2>
							<p>Per month</p>
						</div>
						<div id="details">
							<ul>
								<li>Full warranty and next-day replacement policy on all components</li>
								<li>New earpads every month</li>
								<li>50% discount on accessories and add-ons</li>
								<li>Priority customer support</li>
							</ul>
						</div>
					</form>
						<div id="linkToLegal">
							<a href="legal.php/#pureBlissLegal" target="_blank">Pure Bliss details</a>
						</div>
				</div>
				</div>
			</div>

		<div id="step3Whole">
			<div id="step3">
				<ul>
					<li>Step 1</li>
					<li>Step 2</li>
					<li><strong>Finish</strong></li>
				</ul>
			</div>

			<div class="instruction">
				<h2>Now, let's get in touch!</h2>
			</div>

			<div id="customerInfo">
				<form name="customerInfo" method="post" action="">
					<input type="text" name="firstName" placeholder="First Name"><br><br>
					<input type="text" name="lastName" placeholder="Last Name"><br><br>
					<input type="text" name="title" placeholder="Title"><br><br>
					<input type="text" name="company" placeholder="Company"><br><br>
					<input type="tel" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}"
				 	title="Phone Number (Format: (999)999-9999)" placeholder="Phone"><br><br>
					<input type="email" name="email" placeholder="Email"><br><br>
					<input class="submit" type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>

<?php
	require 'footer.php'
?>

	</body>
</html>

