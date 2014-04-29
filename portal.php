<?php
  require_once 'config.php';
  include 'session.php';
  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    /* This page is what the admin sees after login

	TO DO

	make forms and php to
	1) make a form that updates the testimonials table (delete or add)
	2) make a form that updates the FAQ table (delete or add)
	3) make a form that updates the Press table (delete or add)

	4) make a form that searches though past orders and displays later on the page

	Note: we will not have code to handle the logout button since that will redirect to session.php

  */


  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
  } else {
  	// get current press array from DB (all) store in $press variable
  	// get current testimonial array from DB (all) store in $testimonial variable
 	if (isset($POST('add_test'))) {
  		// add a testimonial
  	}
	if (isset($POST('add_press'))) {
  		// add a press link
  	}
 	if (isset($POST('del_test'))) {
  		// delete a testimonial
  	}
	if (isset($POST('del_press'))) {
  		// delete a press link
  	}

  	if (isset($POST('search'))) {
  		// add found orders to array variable called $found
  	}
  }
  ?>

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

    <div id="testimonialEdit">

    </div>
    <div id="pressEdit">

    </div>


    <?php
      require 'footer.php'
    ?>

  </body>
</html>
