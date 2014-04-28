<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // get current press array and store in variable $press
  ?>



<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Press</title>
		<link rel="stylesheet" type="text/css" href="css/static.css">
	</head>

	<body>

	<?php
	require 'navigation.php'
	?>

		<div class="staticText" id="pressText">
			<h1> Press </h1>
			<ul class="list-posts">

			<li class="post-1013 post type-post status-publish format-standard hentry category-news home-features-item first instock">
			<div>
			<div class="post-title">
			<a class="post-title heading-title" href="http://partyheadphones.com/australian-electronics-company-partners-with-ithaca-startup"><h2 class="heading-title">Australian Electronics Company Partners with Ithaca Startup to Bring Silent Disco Headphones to the United States</h2></a>
			<div class="clear"></div>
			</div>
			<p class="short-content">On May 29th, Silent Safaris of Gold Coast Australia and Party Headphones of Ithaca, New York announced a partnership to bring silent disco headphones to the United States. The resulting company, Wireless Audio Solutions, LLC, aims to provide wireless headphones for an unusual application.
			The partnership between a boutique electronics company from Gold Coast, Australia and an Ithaca, NY startup aims to bring a new product to the United States. The resulting company, Wireless Audio Solutions, LLC plans to improve the way people experience sound by providing an easy to use wireless headphone system for numerous applications.
			The technology allows a user to connect any audio source to a transmitter, which then broadcasts the signal to all the headphones within 300 feet. The product offers value to tour guides, fitness centers and museums. “It is also used by party planners to host silent disco parties, where the music is broadcast to the headphones worn by the audience,” remarked Jacob Reisch, CEO of</p>
			<a title="Readmore" class="read-more " href="http://partyheadphones.com/australian-electronics-company-partners-with-ithaca-startup"><span><span>Read more</span></span></a>
			</div>
			</li>

			<li class="post-988 post type-post status-publish format-standard hentry category-news home-features-item first instock">
			<div>
			<div class="post-title">
			<a class="post-title heading-title" href="http://partyheadphones.com/cornell-party-headphones-keeps-it-quiet"><h2 class="heading-title">Cornell’s Party Headphones Keeps It Quiet</h2></a>
			<div class="clear"></div>
			</div>
			<p class="short-content">Imagine a packed nightclub that’s nearly silent. Where the DJ set doesn’t boom out of Marshall stacks but instead gets transmitted to the wireless headphones everyone wears.
			Welcome to the strange world of Silent Disco.
			The Silent Disco movement took off in Europe around ten years ago and has slowly made its way to the States. And in Bloomberg-era New York, when quality-of-life concerns have shuttered most big clubs, the time for polite percussion is ripe.
			That’s where Ithaca-based startup Party Headphones comes in. The brainchild of Cornell undergraduates, the company equips clubs, events, and museums with all the hardware necessary to make a Silent Disco event happen.
			“It was a business plan for our entrepreneurship class,” Jake Reisch, CEO and cofounder of Party Headphones said. “We got positive feedback from our judges and we decided to see if it could work. I started selling, and we booked a bunch of events before we even had headphones.”
			That was in May 2012. Today, the company</p>
			<a title="Readmore" class="read-more " href="http://partyheadphones.com/cornell-party-headphones-keeps-it-quiet"><span><span>Read more</span></span></a>
			</div>
			</li>

			<li class="post-963 post type-post status-publish format-standard hentry category-news home-features-item first instock">
			<div>
			<div class="post-title">
			<a class="post-title heading-title" href="http://partyheadphones.com/4-reasons-silent-disco-continues-to-grow"><h2 class="heading-title">4 Reasons Silent Disco Continues to Grow</h2></a>
			<div class="clear"></div>
			</div>
			<p class="short-content">If you haven’t yet heard of silent disco, there may be some irony to that. Silent disco is a fast growing event concept where instead of playing music through traditional speakers, audio is broadcast directly to wireless headphones worn by the audience. The events first started in Europe and Australia, and are now steadily making their way into the US live music scene, now found at Bonnaroo, Camp Bisco, Warped Tour, and corporate events across the country.
			There are 4 main reasons people are throwing silent discos:
			1.Novelty
			Since silent disco has yet to be seen by the majority of Americans, the shock value is a major selling point. Very few events are as hysterical as a large group of people dancing wildly to no apparent music
			2.Noise Restrictions
			Many silent discos are held at venues where out-loud music is restricted. Since the music is all in the headphones, silent discos can take advantage of increased venue opportunities and</p>
			<a title="Readmore" class="read-more " href="http://partyheadphones.com/4-reasons-silent-disco-continues-to-grow"><span><span>Read more</span></span></a>
			</div>
			</li>

			</ul>
		</div>

		<?php
			require 'footer.php'
		?>


	</body>
</html>
