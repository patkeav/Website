<?php
session_start();

//for ($i= 0; $i < count($parsed); $i++) { echo $parsed[$i] . "<br />"; }

//require_once('../resources/db_files/connect_to_db.php');
require_once('recaptchalib.php');
$publickey = "6LfvXuISAAAAABKr2-rSBhc_5CjaUZbwMaNvDhC1";
  
$client_IP = $_SERVER['REMOTE_ADDR'];
$problem;
if ($_GET['problem']) {

	$problem = $_GET['problem'];

}
$problem_tags = preg_replace('@tag-@', '', $problem);
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script> 

<html>
	<head>
		<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
		<title> My Problem </title>
	</head>
	<body>
		<div class="container <?php if ($problem) { echo $problem; }?>">
			<!--<a href="<?php echo $query_string; ?>" target="_blank">Click for query string</a>-->
			<div class="header">
				<?php if (!$problem) { ?>
					<h1> My Problem is... </h1>
					<div class="fb-like" data-href="http://www.patrickkeaveny.com/MyProblem" data-send="true" data-width="450" data-show-faces="true"></div><!--.fb-like-->
					<div id="problem">
						<input type="text" name="problem-input" id="problem-input" />
							<div class="red-alert">This field can not be empty</div><!--.red-alert-->
						<div class="captcha-box hidden"></div><!--.captcha-box-->
						<br />
						<form> <input type="checkbox" name="anonymous" value="anonymous" id="anonymous" checked> Remain Anonymous	</form><!--checkbox-->		
						<br />
						<form id="id-form" class="hidden opacity" style="margin: 0;">
							@<input type="text" name="twitter-handle" id="twitter-handle" placeholder="Twitter Handle" /><br /><!--twitter-handle-->
							<input type="text" name="email-address" id="email-address" placeholder="Email Address" /><br /><!--email-address-->
							<div id="twitter-box"></div><!--#twitter-box-->
							<a href="#" id="facebook-link">Post To Facebook</a>
							<div id="facebook-box"></div><!--#facebook-box-->
							<a href="#" id="tumblr-link"> Post on Tumblr</a> <br />
								<input type="text" placeholder="Tumblr Blog" id="tumblr-name" />
								<div class="red-alert">This field can not be empty</div>
							<div id="tumblr-box"></div><!--#tumblr-box-->
						</form><!--#id-form-->
						<input type="button" value="Submit" name="submit-problem" id="submit-problem" />
					</div><!--#problem-->
				<?php } 
				else { ?>
					<div id="problem-header"><h1>My Problem is <?php echo $problem_tags; ?></h1></div>
				<?php } ?>
			</div><!--header-->
			<div id="search-terms" class="hidden"></div><!--#search-terms-->
			<div class="button-group hidden" id="problem-buttons"></div><!--#problem-buttons--> 
			<hr>
			<div id="display" class="" >
  				<div id="display-problems"></div><!--#display-problems-->
  			</div><!--#display-->
		</div><!--container-->
	<script type="text/javascript">
	$(document).ready(function() {
	var display_location = "#display-problems";
	var search_div = "#search-terms";
	var buttons_div = "#problem-buttons";
	
	if ($("#problem_param").val()) {
		var user_problem = $('#problem_param').val()
	
		displayProblemsParams(user_problem, display_location); 
		var last_entry = $(display_location + " table tbody tr td.time-stamp").first(); 
		$("#last_entry").val(last_entry.html());

		displaySearch(user_problem, search_div);
		displayTableButtons(buttons_div);
	}
	
	//check if the anonymous button is selected
	$('#anonymous').change(function() {
		if (this.checked) {
			$('#id-form').addClass('hidden');
		} 
		else {
			var problem = $("#problem-input").val();
			var s1 = new SocialMedia(problem);
			s1.tweetButton();				
			$('#id-form').removeClass('hidden');
			//if facebook link is clicked
			$('#facebook-link').click(function() {
				// create FB button
				s1.facebookButton();
			});
			//if Tumblr link is clicked
			$('#tumblr-link').click(function() {
				// check if Tumblr field is empty
				if (checkField($('#tumblr-name').attr('id'))) {
					var blogname = $('#tumblr-name').val();
					// create Tumblr button
					s1.tumblrButton(blogname);
				}
			});
		}
	});

// the main code block that handles the problem output, and all necessary function calls
	$('#submit-problem').click(function() {
	// make sure the field isn't empty
		if (checkField($('#problem-input').attr('id'))) {
			$('#id-form').addClass('hidden');
			// values that will be added to the DB
			var user_problem = $("#problem-input").val();
			var user_IP = $("#ip-address").val();
			var user_twitter = $("#twitter-handle").val();
			var user_email = $("#email-address").val(); 
		
			// create the ProblemStream object
			var p1 = new ProblemStream(user_problem, user_IP, user_twitter, user_email, display_location);
			// execute ProblemStream
			var problems = p1.main(); //.done(function() {
				//var finder = " table tbody";
				alert(problems);
				fadeAllIn(problems);
				alert(problems);
				//var dummy = $(display_location).find('tbody');
				//dummy.removeClass('hidden');
				//alert(dummy);
		//	});
			var last_entry = $(display_location + " table tbody tr td.time-stamp").first(); 
			$("#last_entry").val(last_entry.html());
			
			var search_div = "#search-terms";
			var buttons_div = "#problem-buttons";
			displaySearch(user_problem, search_div);
			displayTableButtons(buttons_div);
		}
	});
	//info for the most recent entry in the table, used for getting new ones on the fly
	var last_entry_location = display_location + " table tbody";
	var last_entry_time = $("#last_entry").val();
	
	//there's a bug currently, where the table is sometimes displayed without the most recent entry
	//will have to fix later, but i can't figure it out at the moment, so this is a quick fix
	checkDB(display_location, last_entry_time);
	
	//check the DB every 15 seconds to see if there's a new entry
	setInterval(function() {
			checkDB(display_location, last_entry_time); 
		}, 15000);
	
	$("#problem-buttons button").live("click", function() { 
		var button_class = '.' + $(this).attr('class');
		getNearest(button_class, "#display-problems table td");
	});
	var option_day;
	var option_month;
	$("#option-day").on("change", function() {
		option_day = ($(this).attr('value'));
	});
	$("#option-month").on("change", function() {
		option_month = ($(this).attr('value'));
	});
	
	$("#specific-date").on("click", function() {
		var specific_date = '.' + option_month + '-' + option_day;
		getNearest(specific_date, "#display-problems table td");
	});
});
		
/**helper method for checking if field is empty
	@param id = the field to be checked
**/		
		function checkField(id) {
			var field = '#' + id;
			var field_parent = '#' + $(field).parent().attr('id');
			if ($(field).val()) {
				$(field_parent + ' .red-alert').hide();
				$(field_parent + ' #submit').hide();
				return true;
			}
			else {
				$(field_parent + ' .red-alert').fadeIn();
				return false;
			}
		}
	
/**helper method for creating the search terms box**/			
		
	function displaySearch(problem, location_div) {
		$.ajax({
			url: 'resources/ajax_includes/keywords.php',
			data: {problem: problem},
			success: function(response) {
				$(location_div).html(response);
			}
		}).done(function() {
			$(location_div).delay(5000).fadeIn();
		});
	}

/**helper method for creating the table buttons **/			
		
	function displayTableButtons(location_div) {
		$.ajax({
			url: 'resources/ajax_includes/table_buttons.php',
			success: function(response) {
				$(location_div).html(response);
			}
		}).done(function() {
			$(location_div).delay(5000).fadeIn();
		});
	}
	
/**helper method for creating the search terms box**/			
		
	function displayProblemsParams(params, location_div) {
	alert(location_div);
		$.ajax({
			url: 'resources/db_files/query_db_params.php',
			data: {params: params},
			success:function(response){ 
					$(location_div).html(response);
					},
				error:function(response){alert("Error Displaying Problems." + response)},
		}).done(function() {
			var problem_outputs = [];
			$(location_div + " table tbody").children().each(function() {
				problem_outputs.push(this);
			});
			fadeAllIn(problem_outputs);
		});
	}
/**helper method for taking out each element in an array and recursively fading them in **/

	function loadProblems(display_location, finder) {	
		var problem_outputs = new Array();
		$(display_location).on("find", function(finder) {
			$(finder).children().each(function() {
				problem_outputs.push(this);	
			});
		});
		return problem_outputs;
		//fadeAllIn(problem_outputs);
	}
	 
/**helper method for taking out each element in an array and recursively fading them in **/

	function fadeAllIn(children) {
		var current = children.shift();
		$(current).fadeIn(1000, function() {
			fadeAllIn(children)
		});
	}
	
/** helper method for matching the nearest table row with the button clicked
	@param value = the value to search
	@param location = the location to search (the data table)
**/	
	
	function getNearest(value, location_div) {
			$(location_div).not(value).addClass('hidden');
			$(location_div + value).parent().closest('tr').find('td').not('.time-stamp').removeClass('hidden');
	}
	
/**helper method for checking the Database for new entries
	@param location = the location to output the problems to
	@param date = date of last entry
**/			
		
	function checkDB(location_div, date) {
		var last_location = location_div + " table tbody";
		date = ($("input#last_entry").val());
		$.ajax({
			url: 'resources/db_files/check_db.php',
			data: {date: date},
			success: function(response) { 
				$(last_location).prepend(response);
			}
		}).done(function() {
			$(last_location).closest('tr').show();
			var last_entry = $(location_div + " table tbody tr td.time-stamp").first(); 
			$("#last_entry").val(last_entry.html());
		});
	}

/**Complex object for showing the stream of problems 
	@param problem = the problem text;
	@param IP = the IP address of the user
	@param twitter = the user's twitter handle (optional)
	@param email = the user's email (optional)
	@param location_div = the div to output the stream to
**/
function ProblemStream(problem, IP, twitter, email, location_div) {
	this.problem = problem;
	this.IP = IP;
	this.twitter = twitter;
	this.email = email;
	this.location_div = location_div;
	this.update_link = "resources/db_files/update_db.php";
	this.display_link = "resources/ajax_includes/display_problems.php";
	this.r1 = $.Deferred();
	this.r2 = $.Deferred();
	this.elements = new Array();

//the main method	
	this.main = function() {
		this.updateDB(this.r1).done(this.displayProblems(this.r2));
		alert(this.get_elements());
		return this.elements;
	};

/**helper method for updating the database **/
		
	this.updateDB = function(r1) {
		var url = this.update_link;
		$.ajax({
				url: url,
				type: "POST",
				data: {problem: this.problem, IP: this.IP, email: this.email, twitter: this.twitter },
				success:function(response){ 
				},
				error:function(response){
						alert("Error updating Database" + response);
						}
			}).done(function() {
			r1.resolve();
			});
		return r1;
	};
	
/**helper method for creating the problem stream**/	
		
	this.displayProblems = function(r2) {
		var location_div = this.location_div;
		var url = this.display_link;
		$.ajax({
				url:url,
				type: "POST", 
				success:function(response){ 
					$(location_div).html(response);
					bind_events(location_div + " table tbody");
					},
				error:function(response){alert("Error Displaying Problems." + response)},
			}).done(function() {
				r2.resolve();		
			});
		return r2;
	};
		
	function bind_events(data) {
		var elements_array = new Array();
		$(data).children().each(function() {
			elements_array.push(this);
		});
		this.set_elements(elements_array);
	}
	
	this.get_update_link = function() {
		return this.update_link;
	};
	
	this.set_update_link = function(url) {
		this.update_link = url;
	};
	
	this.get_display_link = function() {
		return this.display_link;
	};
	
	this.set_display_link = function(url) {
		this.display_link = url;
	};
	
	this.get_elements = function() {
		return this.elements;
	};
	
	this.set_elements = function(elements) {
		this.elements = elements;
	};
} // end ProblemStream object

/**Complex object for social media buttons 
	@param problem = the problem text;
**/	
function SocialMedia(problem) {
	this.problem = problem;
	
	// global variables to avoid code duplication
	this.facebook = "#facebook";
	this.twitter = "#twitter";
	this.tumblr = "#tumblr";
	this.box = '-box';

/**helper method for creating the Tweet button**/

	this.tweetButton = function() {
		location_div = this.twitter + this.box;
		$.ajax({
				url: "resources/api_resources/tweet_button.php",
				type: "POST",
				data: {problem: this.problem},
				success:function(result){
					$(location_div).html(result);
					},
				error:function(response){alert("Error creating Tweet Button" + response);}
			}).done(function() {
		});
	};

/**helper method for creating the FB button**/

	this.facebookButton = function(problem, location) {
		location_div = this.facebook + this.box;
		$.ajax({
				url: "resources/api_resources/fb_button.php",
				type: "POST",
				data: {problem: this.problem},
				success:function(result){
					$(location_div).html(result);
					},
				error:function(response){alert("Error creating FB Button" + response);}
			}).done(function() {
		});
	};

/**helper method for creating the tumblr button
	@blogname = the name of the user's blog
**/
	this.tumblrButton = function(blogname) {
		location_div = this.tumblr + this.box;
		$.ajax({
				url: "resources/api_resources/tumblr_button.php",
				type: "POST",
				data: {problem: this.problem, blogname: blogname},
				success:function(result){
					$(location_div).html(result);
					},
				error:function(response){alert("Error creating Tumblr Button" + response);}
			}).done(function() {
		});
	};
} // end SocialMedia Object
	

		//	
				/*$.ajax({
					url: "captcha_form.php",
					type: "GET",
					success: function(response){
						$(".captcha_box").fadeIn();
						$(".captcha_box").html(response);
					},
					error: function(response){alert(error)},
				});
				var input = $("#recaptcha_response_field").val();
				*/
				/*$.ajax({
					url: "verify.php",
					type: "POST",
					success:function(result){
						if (result == "Success") { */
							
					//},
					//error:function(response){alert("Error Verifying User" + response);}
				//});
			//});
		

	</script>	
	<input type="hidden" name="ip-address" id="ip-address" value="<?php echo $client_IP; ?>" />	
	<input type="hidden" name="last_entry" id="last_entry" value="" />
	<input type="hidden" name="problem_param" id="problem_param" value="<?php echo $problem; ?>" />
	</body>
</html>
