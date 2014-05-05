$(document).ready(function(){
	$("#button20").hover( function() {
		$("#packInfo20").toggleClass("hide")} )
	$("#button10").hover( function() {
		$("#packInfo10").toggleClass("hide")} )

	$("form[name=10pack]").mouseenter( function() {$(this).parent().css("background-color", "blue")} ).mouseleave(
		function() {$(this).parent().css("background-color", "#062a78")} );
	$("form[name=20pack]").mouseenter( function() {$(this).parent().css("background-color", "blue")} ).mouseleave(
		function() {$(this).parent().css("background-color", "#062a78")} );

	$("form[name=10pack]").click( function() {
		$("input[name=choose10]:radio").prop('checked', true);
		$("form[name='premiumPlan'] .dollars").html("$35");
		$("form[name='freedomPlan'] .dollars").html("$75");
		$('html, body').animate({
        	scrollTop: $("#step2Whole").offset().top-50
    }, 	500);
	});

	$("form[name=20pack]").click( function() {
		$("input[name=choose20]:radio").prop('checked', true);
		$("form[name='premiumPlan'] .dollars").html("$70");
		$("form[name='freedomPlan'] .dollars").html("$150");
		$('html, body').animate({
        	scrollTop: $("#step2Whole").offset().top-50
    }, 	500);
	});

	$(".eachPlan").mouseenter( function() {
		$(this).find(".title").css("background-color", "blue");
		$(this).find(".price").css("background-color", "blue");
	}).mouseleave( function() {
		$(this).find(".title").css("background-color", "#062a78");
		$(this).find(".price").css("background-color", "#062a78");
	});

	$(".eachPlan").click( function() {
		$(this).find("input[name=choosePlan]:radio").prop('checked', true);
		$('html, body').animate({
        	scrollTop: $("#step3Whole").offset().top+70
    }, 	500);
	});

	// tell user save was successful
	if ($(location).attr('href').indexOf("success=true")!= -1) {
		$("#myform").append("<p id='savedMsg' style='color:green;'>Your settings have been saved!<p>");
		setTimeout(function(){
			$("#savedMsg").fadeOut(function(){$(this).remove();});
		}, 1500);
	}

	$("input[name=color]:radio").bind("click", function() {
    	$("#text").css("color", $(this).val());
	});

	$("input[name=family]:radio").bind("click", function() {
    	$("#text").css("font-family", $(this).val());
	});

	$("input[name=font]").bind("keypress", function(e) {
		if (e.keyCode==13) {
			size = parseInt($(this).val());
			if (size>=8 && size<=80){
				$("#sizeWarning").text("");
				$("#text").css("font-size", size.toString()+"px");
			} else if (isNaN(size)){
				$("#sizeWarning").text("Please enter a number.");
				$("#sizeWarning").css("color", "red");
			} else {
				$("#sizeWarning").text("Please enter a font size between 8 and 80.")
				$("#sizeWarning").css("color", "red");
			}
		}
	});

	$("#bold").bind("click", function(){
		if($(this).is(':checked'))
    		$("#text").css("font-weight", "bold");
		else
    		$("#text").css("font-weight", "");
	})

	$("#italic").bind("click", function(){
		if($(this).is(':checked'))
    		$("#text").css("font-style", "oblique");
		else
    		$("#text").css("font-style", "");
	})

	// search functionality
	$("#search").bind('keyup', function(){

		// for each of the paragraphs in main text
		$("#text").children().each(function(){
			//retrieve the current HTML
			var currentString = $(this).html();

			//Remove existing highlights
			currentString = replaceAll(currentString, "<span class=\"matched\">","");
			currentString = replaceAll(currentString, "</span>","");

			// add in new highlights
			currentString = replaceAll(currentString, $("#search").val(), "<span class=\"matched\">$&</span>");

			// replace the current HTML with highlighted HTML
			$(this).html(currentString);
		});
	});

	$("#replace").bind("click", function(){
		// Strip tags
		var original = $("#original").val().replace(/<(?:.|\n)*?>/gm, '');
		var newtext = $("#newtext").val().replace(/<(?:.|\n)*?>/gm, '');
		// Show user new input in case it took out tags
		$("#original").val(original);
		$("#newtext").val(newtext);
		if(original!="") {
			$("#text").children().each(function(){
				// Remove highlights so it doesn't mess with replace
				var newString = replaceAll($(this).html(), "<span class=\"matched\">","");
				newString = replaceAll(newString, "</span>","");
				newString = replaceAll(newString, original, newtext);
				$(this).html(newString);
			});
		}
	});

	$("input[name=savebutton]").bind("click", function() {
		// saves text changed in form for saveFile.php to access later
		var savedtext = "";
		$("#text").children().each(function(){
			savedtext += $(this).html();
		});
		$("input[name=hiddentext]").val(savedtext);
		// saves style in cookie
		// replaces characters incompatible with cookies with special characters
		style = replaceAll($("#text").attr("style"),";","^");
		style = replaceAll(style,",","~");
		createCookie("style", style);
	});

	// my cookies expire in 10 days
	function createCookie(name, value) {
		var date = new Date();
		date.setTime(date.getTime()+864000000);
		var expires = "; expires="+date.toGMTString();
		document.cookie = name+"="+value+expires+"; path=/";
	}

	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) {
				settings = c.substring(nameEQ.length,c.length);
				settings = settings.replace(/\^/g, ';');
				settings = settings.replace(/\~/g, ",");
				return settings
			}
		}
		return null;
	}


});

/* Replaces all instances of "replace" with "with_this" in the string "txt"
   using regular expressions -- SEE BELOW */
function replaceAll(txt, replace, with_this) {
	return txt.replace(new RegExp(replace, 'g'),with_this);
}
