<html>
	<script type='text/javascript' src='http://patrickkeaveny.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
	<script type='text/javascript' src='http://patrickkeaveny.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
	<script type='text/javascript' src='http://patrickkeaveny.com/wp-content/themes/GDEstarkers/js/site.js?ver=3.8.1'></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="css/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<link href="css/css/bootstrap.css" rel="stylesheet" />
	<link href="css/css/bootstrap-theme.min.css" rel="stylesheet" />
	<head>
		<title>Abbrev.That!</title>
	</head>
	<body class="container">
		<div class="page-header">
			<h1>
				Welcome to the Jesuit Refugee Service Email Address Generator!
			</h1>
		</div><!--/ -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Might need this later. 
				<h2 class="lead">
					Ready?
				</h2>
				<p> Let me
					<input type="button" value="abbrev. that for you!" id="abbrev-that" class="btn btn-primary" />
				</p>
				-->
				<div id="abbrev-div" class="hide">
					<h1 class=" jumbotron text-primary">
						Your new email is: <strong><p id="abbrev-text"></p></strong>
						<small> 
							Want to generate another email? No need to refresh the page!
							<br />
							Simply re-select the options.
						</small>
					</h1>
				</div><!--/abbrev-div-->
			</div><!--/col-lg-6-->
			<div class="col-lg-6">
				<div id="abbrev-div-2" class="hide">
					<h1 class=" jumbotron text-primary">
						Your new alias is: <strong><p id="abbrev-text-2"></p></strong>
					</h1>
				</div><!--/abbrev-div-2-->
			</div><!--/col-lg-6-->
		</div><!--/row-->
		<p class="lead">
			Please answer the questions below:
		</p>
		<div id="abbrev" class="row-fluid">
			<div class="col-lg-6" style="border-right: rgba(0,0,0,0.1) solid thin">
				<div class = "input-group input-group-lg">
					<div class="input-group-btn ">
						<button  type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown">
							Select <span class="caret"></span>
						</button>
						<ul id="where" class="dropdown-menu" role="menu">
							<li id="vat"><a href="#">The International Office</a></li>
							<li id="sar"><a href="#">Southern Africa</a></li>
							<li id="ear"><a href="#">East Africa</a></li>
							<li id="waf"><a href="#">West Africa</a></li>
							<li id="gla"><a href="#">Grands Lacs</a></li>
							<li id="eur"><a href="#">Europe</a></li>
							<li id="sas"><a href="#">South Asia</a></li>
							<li id="mer"><a href="#">Middle East</a></li>

						</ul>
					</div><!--/input-group-btn-->
					<input id="textbox-where" type="text" class="form-control" placeholder="Where do y'all work?">
				</div><!--/input-group-->
				<br />
				<div id="project-option" class="hide">
					<div class = "input-group input-group-lg">
						<div class="input-group-btn ">
							<button  type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown">
								Select <span class="caret"></span>
							</button>
							<ul id='where-project' class='dropdown-menu' role='menu'></ul>
						</div><!--/.input-group-btn-->
						<input id="textbox-project" type="text" class="form-control" placeholder="Which Project?">
					</div><!--/.input-group-->
					<br />
				</div><!--/#project-option-->
				<div class="input-group input-group-lg">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
						Select <span class="caret"></span>
						</button>
						<ul id="what" class="dropdown-menu">
							<li id="comms"><a href="#">Communications</a></li>
							<li id="advocacy"><a href="#">Advocacy</a></li>
							<li id="programmes"><a href="#">Programmes</a></li>
							<li id="finance"><a href="#">Finances</a></li>
							<li id="director"><a href="#">Director </a></li>
						</ul>
					</div><!--/input-group-btn-->
					<input id="textbox-what" type="text" class="form-control" placeholder="What do y'all do?">
				</div><!--/input-group-->
				<br />
				<div class="input-group input-group-lg">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							Select <span class="caret"></span>
						</button>
						<ul id="assist" class="dropdown-menu">
							<li id="yes"><a href="#">Yes</a></li>
							<li id="no"><a href="#">No</a></li>
						</ul>
					</div><!--/input-group-btn-->
					<input id="textbox-assist" type="text" class="form-control" placeholder="Are you an Assistant?">
				</div><!--/input-group-->
				<br />
				<div class="input-group input-group-lg">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							Select <span class="caret"></span>
						</button>
						<ul id="consult" class="dropdown-menu">
							<li id="yes"><a href="#">Yes</a></li>
							<li id="no"><a href="#">No</a></li>
						</ul>
					</div><!--/input-group-btn-->
					<input id="textbox-consult" type="text" class="form-control" placeholder="Are you a Consultant?">
				</div><!--/input-group-->
				<br />
				<div class="input-group input-group-lg">
					<div class="input-group-btn">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							Select <span class="caret"></span>
						</button>
						<ul id="yall" class="dropdown-menu">
							<li id="yes"><a href="#">Darn Tootin'!</a></li>
							<li id="no"><a href="#">Naw</a></li>
						</ul>
					</div><!--/input-group-btn-->
					<input id="textbox-yall" type="text" class="form-control" placeholder="Are y'all sick of hearing 'y'all' yet?">
				</div><!--/input-group-->
				<input type="button" id="click-me" class="btn btn-primary" value="Show me my email address!" />
				<br />
			</div><!--/col-lg-6-->
			<div class="col-lg-6">
				<div class="input input-group-lg">
					<input id="textbox-first" type="text" class="form-control" placeholder="What is your first name?">
				</div><!--/input-->
				<br />
				<div class="input input-group-lg">
					<input id="textbox-last" type="text" class="form-control" placeholder="What is your last name?">
				</div><!--/input--->
				<input type="button" id="click-me-alias" class="btn btn-primary" value="Show me my email alias!" />
			</div><!--/col-lg-6-->
		</div><!--/row-fluid-->
	</body>
	<style>
		.hide {
			display: none;
		}
		.right {
			float: right;
		}
		input[type="button"] {
			margin: 10px 0;
		}	
	</style>
	<script type="text/javascript">
	var email = '';
	var what = '';
	var where = '';
	var assist = '';
	var consult = '';
	var first_name = '';
	var last_name = '';
	$(document).ready(function() {
	
	$('.dropdown-toggle').dropdown();
	
	
	$("#click-me").click(function() {
		$("#abbrev-div").removeClass('hide');
	});

		$("#where li").click( function() {
			var str = abbrev(this);
			$('#project-option').removeClass('hide');
			$("#textbox-where").val($(this).text());
			$.ajax({
				url: 'codes.php',
				type: 'POST',
				data: {data: str},
				success:function(response){ 
						$("#where-project").html(response);
						},
				error:function(response){alert("Error Displaying Codes." + response)},
		}).done(function() {
			$("#where-project li").on("click", function() {
				var str2 = abbrev(this);
				what = str2;
				update();
				$("#textbox-project").val($(this).text());
			});
		});

			
		});
		$("#what li").click( function() {
			var str = abbrev(this);
			where = str;
			update();
			$("#textbox-what").val($(this).text());
		});
		$("#assist li").click( function() {
			if ($(this).text() == "Yes") {
				assist = "assist";
				update();
			}
			else {
				assist = '';
			}
			update();
			$("#textbox-assist").val($(this).text());
		});
		$("#consult li").click( function() {
			if ($(this).text() == "Yes") {
				if($("#textbox-assist").val() == "Yes") {
					alert("How can someone be a consultant AND an assistant? Are you an assistant consultant? Or are you just a liar?");
				}
				else {
					consult = "consult";
					update();
					$("#textbox-consult").val($(this).text());
				}
			}
			else {
				consult = '';
				$("#textbox-consult").val($(this).text());
			}
			update();
		});
		$("#yall li").click( function() {
			if ($(this).text() == "Darn Tootin'!") {
				$("#textbox-yall").val("Rootin' Tootin'?");
				update();
			}
			else {
				$("#textbox-yall").val("Hot Diggity!");
			}
			update();
			
		});
		$("#click-me-alias").click(function() {
			first_name = $("#textbox-first").val().toLowerCase();
			last_name = $("#textbox-last").val().toLowerCase();
			$("#abbrev-text-2").html(first_name.trim() + '.' + last_name.trim() + '@jrs.net');
			$("#abbrev-div-2").removeClass('hide');
		});
		//$("#abbrev-that").click(function() {
		//	$("#abbrev-div").show();
		//});
	});
	//str += "." + $("#what").attr('id');
	//	if (($("#assist").attr('id')) == "yes") {
	//		str += "assist";
	//	}
	//	str += "@jrs.net";
	
function update() {
	email = what + '.' + where + consult + assist + "@jrs.net";
	$("#abbrev-text").html(email);
}
	
	function abbrev(id) {
		var str;
		str = $(id).attr('id');
		//text = $('#' + str + ' a ').text();
		//$(id).parent().parent().find("#textbox").attr("placeholder")
		//alert(str);
		return str;
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
	
	</script>
</html>

