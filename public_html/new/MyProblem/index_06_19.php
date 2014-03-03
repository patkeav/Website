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
echo $problem;
?>
<script>

function Dummy(name) {
	
	this.name = name;

	Dummy.prototype.sayName = function() {
		return this.name;
	};
}

var dummy = new Dummy("Pat");

alert(dummy.sayName());

</script>
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
					<div class="fb-like" data-href="http://www.patrickkeaveny.com/MyProblem" data-send="true" data-width="450" data-show-faces="true"></div>
					<div id="problem">
						<input type="text" name="problem-input" id="problem-input" />
							<div class="red-alert">This field can not be empty</div>
						<div class="captcha-box hidden"></div>
						<br />
						<form> <input type="checkbox" name="anonymous" value="anonymous" id="anonymous" checked> Remain Anonymous	</form>		
						<br />
						<input type="button" value="Submit" name="submit-problem" id="submit-problem" />
					</div><!--problem-->
				<?php } ?>
				<div id="search-terms" class="hidden"></div>
				<div class="button-group hidden" id="problem-buttons">
					<h3>See Problems from: </h3>
					<button class="today">Today</button>
					<button class="this-week">This Week</button>
					<button class="this-month">This Month</button>
					<button class="all">All</button>
					<h2> Or. </h2>
					<h3>Select a date:</h3>
					<select id="option-month" >
						<?php 
							$months = array(
							'January',
							'February',
							'March',
							'April',
							'May',
							'June',
							'July',
							'August',
							'September',
							'October',
							'November',
							'December',
							);
						for ($i=0;$i<count($months);$i++) { ?>
						<option value="<?php echo $months[$i]; ?>"><?php echo $months[$i]; ?></option>
						<?php } ?>
					</select>
					<select id="option-day">
						<?php for ($i=1;$i<=30;$i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
					</select>
					<input type="button" value="Go" id="specific-date" />
					<br />
					
				</div><!--#problem-buttons--> 
			</div><!--header-->
			<div id="background-box" class="modal">
				<form id="id-form">
					@<input type="text" name="twitter-handle" id="twitter-handle" placeholder="Twitter Handle" /><br />
					<input type="text" name="email-address" id="email-address" placeholder="Email Address" /><br />
					<div id="twitter-box"></div>
					<a href="#" id="facebook-link">Post To Facebook</a>
					<div id="facebook-box"></div>
					<a href="#" id="tumblr-link"> Post on Tumblr</a> <br />
						<input type="text" placeholder="Tumblr Blog" id="tumblr-name" />
						<div class="red-alert">This field can not be empty</div>
					<div id="tumblr-box"></div>
					<a href="#" class="submit-modal"><input type="button" value="Submit" /></a>
				</form><!--#id-form-->
			</div><!--background box-->
			<hr>
			<div id="display" class="" >
  				<div id="display-problems"></div>
  			</div><!--#display-->
		</div><!--container-->
	<script type="text/javascript">
	$(document).ready(function() {
	var display_location = $("#display-problems");
//	alert(display_location);
//	alert(display_location.attr('id'));
		// the main code block that handles the problem output, and all necessary function calls
		
		function problemStream(problem, IP, twitter, email, location) {
		this.problem = problem;
		this.IP = IP;
		this.twitter = twitter;
		this.email = email;
		this.location = location;
		
		
		
		}
		
		$('#submit-problem').click(function(input) {
			// values that will be added to the DB
			var problem = $("#problem-input").val();
			var IP = $("#ip-address").val();
			var twitter;
			var email; 
			
			// the location to output the problems to
			var display_location = "#display-problems";
			var text = $('#db_id').val();
			
			// make sure the field isn't empty
			if (checkField($('#problem-input').attr('id'))) {
			
				//check if the anonymous button is selected
				if (!$('#anonymous').is(":checked")) {
					createModal(problem, "#facebook", "#twitter", "#tumblr");
					$('#background-box').addClass('opacity');
					$('#id-form a.submit-modal').click(function() {
						$('#background-box').removeClass('opacity');
						var twitter = $("#twitter-handle").val();
						var email = $("#email-address").val();
						if (updateDB(problem, IP, twitter, email)) {
							displayProblems(display_location, text);
							displaySearch("#search-terms", problem);
						}
					});
				}
				// if the anonymous button isn't selected, then simply update the DB and display the problems
				else {
					if (updateDB(problem, IP, twitter, email)) {
						displayProblems(display_location, text);
						displaySearch("#search-terms", problem);
					}
				}
			}
			
			//info for the most recent entry in the table, used for getting new ones on the fly
			var last_entry_location = display_location + " table tbody";
			var last_entry_time = $("#last_entry").val();
			
			//there's a bug currently where the table is sometimes displayed without the most recent entry, 
			//will have to fix later, but i can't figure it out at the moment, so this is a quick fix
			checkDB(display_location, last_entry_time);
			
			//check the DB every 15 seconds to see if there's a new entry
			setInterval(function() {
					checkDB(display_location, last_entry_time); 
				}, 15000);	
		});
		
		$("#problem-buttons button").click(function() {
			var button_class = '.' + $(this).attr('class');
			getNearest(button_class, "#display-problems table td");
		});
		
		var option_day;
		var option_month;
		$("#option-day").change(function() {
			option_day = ($(this).attr('value'));
		});
		$("#option-month").change(function() {
			option_month = ($(this).attr('value'));
		});
		
		$("#specific-date").click(function() {
			var specific_date = '.' + option_month + '-' + option_day;
			getNearest(specific_date, "#display-problems table td");
		});
		
	});
	
	function getNearest(value, location) {
			$(location).not(value).addClass('hidden');
			$(location + value).parent().closest('tr').find('td').not('.time-stamp').removeClass('hidden');
	}

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
			

/**helper method for creating the modal form window
	@param problem = the problem text
	@twitter = the Twitter handle of user, if given 
	@email = the email address of user, if given
**/			
		function createModal(problem, facebook, twitter, tumblr) {
		var link = '-link';
		var box = '-box';
		var name = '-name';
		// create Tweet button
		tweetButton(problem, $(twitter + box));
		//check if facebook link is selected
		$(facebook + link).click(function() {
			// create FB button
			facebookButton(problem, $(facebook + box));
		});
		//check if Tumblr link is selected
		$(tumblr + link).click(function() {
			// check if Tumblr field is empty
			if (checkField($(tumblr + name).attr('id'))) {
				var blogname = $(tumblr + name).val();
				// create Tumblr button
				tumblrButton(problem, $(tumblr + box), blogname);
			}
		});
	}

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
/**helper method for creating the Tweet button
	@param problem = the problem text
	@location = the location (div, html element, etc.) to output the result to
**/
	function tweetButton(problem, location) {
		$.ajax({
				url: "resources/api_resources/tweet_button.php",
				type: "POST",
				data: {problem: problem},
				success:function(result){
					$(location).html(result);
					},
				error:function(response){alert("Error creating Tweet Button" + response);}
			}).done(function() {
		});
	}

/**helper method for creating the FB button
	@param problem = the problem text
	@location = the location (div, html element, etc.) to output the result to
**/
	function facebookButton(problem, location) {
		$.ajax({
				url: "resources/api_resources/fb_button.php",
				type: "POST",
				data: {problem: problem},
				success:function(result){
					$(location).html(result);
					},
				error:function(response){alert("Error creating FB Button" + response);}
			}).done(function() {
		});
	}

/**helper method for creating the tumblr button
	@param problem = the problem text
	@location = the location (div, html element, etc.) to output the result to
	@blogname = the name of the user's blog
**/
	function tumblrButton(problem, location, blogname) {
		$.ajax({
				url: "resources/api_resources/tumblr_button.php",
				type: "POST",
				data: {problem: problem, blogname: blogname},
				success:function(result){
					$(location).html(result);
					},
				error:function(response){alert("Error creating Tumblr Button" + response);}
			}).done(function() {
		});
	}
	
/**helper method for creating the tumblr button
	@param problem = the problem text
	@location = the location (div, html element, etc.) to output the result to
	@blogname = the name of the user's blog
**/
	function reloadPage(problem) {
		var problem = problem;
		
	}

/**helper method for ubdating the database
	@param problem = the problem text
	@param IP = the user's IP Address
	@param twitter = the user's Twitter Handle (if given)
	@param email = the user's email address (if given)
**/
		
		function updateDB(problem, IP, twitter, email) {
			var connection;
			$.ajax({
					url: "resources/db_files/update_db.php",
					type: "POST",
					data: {problem: problem, IP: IP, email: email, twitter:twitter },
					success:function(response){
							},
					error:function(response){
							alert("Error updating Database" + response);
							}
				}).done(function() {
			});
			return true;
		}
/**helper method for creating the problem stream
	@param location = the location to output the problems to
	@param problem = the problem text
**/	
		
		function displayProblems(location, text) {
			$.ajax({
					url:"resources/ajax_includes/display_problems.php",
					type: "POST", 
					data: {text: text},
					success:function(response){
						$(location).html(response);
						},
					error:function(response){alert("Error Displaying Problems." + response)},
			}).done(function() {
				var problem_outputs = [];
				$("#problem-buttons.button-group").delay(5000).fadeIn();
				$(location + " table tbody").children().each(function() {
					problem_outputs.push(this);
				});
				fadeAllIn(problem_outputs);
				var last_entry = $(location + " table tbody tr td.time-stamp").first(); 
				$("#last_entry").val(last_entry.html());
				
			});
		}
		
/**helper method for creating the search terms box
	@param location = the location to output the problems to
	@param problem = the problem text
**/			
		
		function displaySearch(location, problem) {
			$.ajax({
				url: 'resources/ajax_includes/keywords.php',
				data: {problem: problem},
				success: function(response) {
					$(location).html(response);
				}
			}).done(function() {
				$(location).delay(5000).fadeIn();
			});
		}
				
/**helper method for checking the Database for new entries
	@param location = the location to output the problems to
	@param date = date of last entry
**/			
		
		function checkDB(location, date) {
			var last_location = location + " table tbody";
			date = ($("input#last_entry").val());
			$.ajax({
				url: 'resources/db_files/check_db.php',
				data: {date: date},
				success: function(response) { 
					$(last_location).prepend(response);
				}
			}).done(function() {
				$(last_location).closest('tr').show();
				var last_entry = $(location + " table tbody tr td.time-stamp").first(); 
				$("#last_entry").val(last_entry.html());
			});
		}
		
/**helper method for taking out each element in an array and recursively fading them in 
**/

			function fadeAllIn(children) {
				var current = children.shift();
				//alert($(current).val());
				$(current).fadeIn(1000, function() {
					fadeAllIn(children)
				});
			}

	</script>	
	<input type="hidden" name="ip-address" id="ip-address" value="<?php echo $client_IP; ?>" />	
	<input type="hidden" name="db_id" id="db_id" value="problem" />	
	<input type="hidden" name="last_entry" id="last_entry" value="" />
	</body>
</html>
