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
					<li><strong>step 1</strong></li>  <!--step 1 will be highlighted/should stand out-->
					<li>step 2</li>
					<li>step 3</li>
				</ul>
			</div>	

			<div id="selectSize">
				<h2>Select your package size</h2>
			</div>
			
			<div id="orderOptions">
				<div id="eachOption">
					<form name="10pack" method="post" action="">
						<h3><input type="radio" name="choose10">Audiarchy 10-Pack</h3>
						<img src="placeholder1.jpg" alt="10 pack"><br>
						<button type="button" id="button10">See More +</button>
						<span id="10packInfo"></span>
					</form>
				</div>

				<div id="eachOption">
					<form name="20pack" method="post" action="">
						<h3><input type="radio" name="choose20">Audiarchy 20-pack</h3>
						<img src="placeholder1.jpg" alt="20 pack"><br>
						<button type="button" id="button20">See More +</button>

						<span id="20packInfo"></span>
					</form>
				</div>
			</div>
		</div>		

		<div id="step2Whole">
			<div id="step2">
				<ul>
					<li>step 1</li>  
					<li><strong>step 2</strong></li> <!--step 2 will be highlighted/should stand out-->
					<li>step 3</li>
				</ul>
			</div>

			<div id="selectPlan">
				<h2>Select your maintenance plan</h2>
			</div>

			<div id="planOptions">
				<div id="eachPlan">
					<form name="basicPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="chooseBasic">Basic</h3>
						</div>
						<div id="price">
							<h2>$0</h2>
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

				<div id="eachPlan">
					<form name="premiumPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePremium">Premium</h3>
						</div>
						<div id="price">
							<h2>$35</h2>
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

				<div id="eachPlan">
					<form name="freedomPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="chooseFreedom">Freedom</h3>
						</div>
						<div id="price">
							<h2>$55</h2>
							<p>Per month</p>
						</div>
						<div id="details">
							<ul>
								<li>Full warranty and next-day replacement on all components</li>
								<li>New earpads every month</li>
								<li>25% discount on accessories and add-ons</li>
							</ul>
						</div>
					</form>
						<div id="linkToLegal">
							<a href="legal.php/#freedomLegal" target="_blank">Freedom details</a>
						</div>
				</div>	
				<div id="eachPlan">
					<form name="pureBlissPlan" method="post" action="">
						<div id="title">
							<h3><input type="radio" name="choosePureBliss">Pure Bliss</h3>
						</div>
						<div id="price">
							<h2>$75</h2>
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

		<div id="step3Whole">
			<div id="step3">
				<ul>
					<li>step 1</li>  
					<li>step 2</li> 
					<li><strong>Finish</strong></li> <!--step 3 will be highlighted/should stand out-->
				</ul>
			</div>	

			<div id="finish">
				<h2>Now, let's get in touch!</h2>
			</div>

			<div id="customerInfo">
				<form name="customerInfo" method="post" action="">
					<input type="text" name="firstName" value="First Name"><br><br>
					<input type="text" name="lastName" value="Last Name"><br><br>
					<input type="text" name="title" value="Title"><br><br>
					<input type="text" name="company" value="Company"><br><br>
					<input type="tel" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}"
				 	title="Phone Number (Format: +99(99)9999-9999)" value="Phone"><br><br>
					<input type="email" name="email" value="Email"><br><br>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>


	</body>
</html>		
			
	
			
