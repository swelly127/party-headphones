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
		<script src="js/jquery.js"></script>
		<script src="js/order.js"></script>
		<link rel="stylesheet" type="text/css" href="css/navigation.css">
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
				<div class="eachOption">
					<form name="10pack" method="post" action="">
						<h3 class="optionTitle"><input type="radio" name="choose10">Audiarchy 10-Pack</h3>
						<img class="img" src="img/headphones.jpg" alt="10 pack" style="height:100px; width:100px;"><br>
						<div class="optionButton">
							<button class="button" type="button" id="button10">See More +</button>
						</div>
						<div id="packInfo10" class="hide">
						Package includes... <br><br>
						(10) Audiarchy RF Wireless Headphones<br>
						(1) Headphone Charger<br>
						(2) Audiarchy PRO Rechargeable RF Transmitter<br>
						(1) RCA and auxillary cable pack connects transmitter to laptops, iPods, TVs, DVD players and mixing boards<br>
						(1) Protective Travel Case
						</div>
					</form>
				</div>

				<div class="eachOption">
					<form name="20pack" method="post" action="">
						<h3 class="optionTitle"><input type="radio" name="choose20">Audiarchy 20-pack</h3>
						<img class="img" src="img/10headphones.jpg" alt="20 pack" style="height:100px;width:100px;"><br>
						<div class="optionButton">
							<button class="button" type="button" id="button20">See More +</button>
						</div>

						<div id="packInfo20" class="hide">
						Package includes... <br><br>
						(20) Audiarchy RF Wireless Headphones<br>
						(1) Headphone Charger<br>
						(2) Audiarchy PRO Rechargeable RF Transmitter<br>
						(1) RCA and auxillary cable pack connects transmitter to laptops, iPods, TVs, DVD players and mixing boards<br>
						(1) PureFreedom10 Protective Travel Case
						</div>
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
						<div class="title">
							<h3><input type="radio" name="choosePlan">Basic</h3>
						</div>
						<div class="description">
							<p>One year limited warranty.</p>
						</div>
						<div class="price">
							<h2 class="dollars">$0</h2>
							<p>Per month</p>
						</div>
						<div class="details">
							<ul>
								<li>One year limited warranty on all product components.</li>
							</ul>
						</div>
					</form>
						<div class="linkToLegal">
							<a href="legal.html/#basicLegal" target="_blank">Basic Details</a>
						</div>
				</div>

				<!--<div id="popular">
					<p>Most popular!</p>
				</div>-->

				<div class="eachPlan">
					<form name="premiumPlan" method="post" action="">
						<div class="title">
							<h3><input type="radio" name="choosePlan">Premium</h3>
						</div>
						<div class="description">
							<p>Sanitation and maintenence</p>
						</div>
						<div class="price">
							<h2 class="dollars">$35</h2>
							<p>Per month</p>
						</div>
						<div class="details">
							<ul>
								<li>Full warranty on all components as long as subscription lasts.</li>
								<li>Full system upgrades every 12 months.</li>
								<li>New earpads every 3 months</li>
								<li>10% discount on accessories and add-ons.</li>
							</ul>
						</div>
					</form>
						<div class="linkToLegal">
							<a href="legal.php#premiumLegal" target="_blank">Premium details</a>
						</div>
				</div>

				<div class="eachPlan">
					<form name="freedomPlan" method="post" action="">
						<div class="title">
							<h3><input type="radio" name="choosePlan">Freedom</h3>
						</div>
						<div class="description">
							<p>Full warranty without boundaries</p>
						</div>
						<div class="price">
							<h2 class="dollars">$75</h2>
							<p>Per month</p>
						</div>
						<div class="details">
							<ul>
								<li>Full warranty on all components. If you break it, we'll replace it.</li>
								<li>New earpads every month.</li>
								<li>Full system upgrades every 12 months.</li>
								<li>10% discount on accessories and add-ons.</li>
							</ul>
						</div>
					</form>
						<div class="linkToLegal">
							<a href="legal.php#freedomLegal" target="_blank">Freedom details</a>
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
				<form name="customerInfo" method="post" action="order.php">
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


