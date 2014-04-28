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
  	// get current FAQ array from DB (all) store in $FAQ variable
  	// get current press array from DB (all) store in $press variable
  	// get current testimonial array from DB (all) store in $testimonial variable
  	if (isset($POST('add_faq'))) {
  		// add a FAQ question and answer
  	}
 	if (isset($POST('add_test'))) {
  		// add a testimonial
  	}
	if (isset($POST('add_press'))) {
  		// add a press link
  	}
  	if (isset($POST('del_faq'))) {
  		// delete a FAQ question and answer
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
