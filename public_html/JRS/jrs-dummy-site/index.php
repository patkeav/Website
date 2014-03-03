<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	include("includes/connect_to_db.php");
	include("includes/header.inc.php");	
?>
			<div class="row" >
				<div class="col-lg-8">
					<div id="content">
						<p><?php echo $content; ?></p>
					</div>
					<div id="facebook-box">
					<button id="facebook-dummy-button">Button</button>
					</div>
				</div><!--/.col-lg-12-->
				<div id="sidebar" class="col-lg-4">
					<ul>
						<li><a href="#"><u>Newsroom</u></a></li>
						<li><a href="#"><u>Recent News</u></a></li>
						<li><a href="#"><u>Press Releases</u></a></li>
						<li><a href="#"><u>Project Updates</u></a></li>
						<li><a href="#"><u>Archives</u></a></li>
						<li><a href="#"><u>Multimedia</u></a></li>
						<li><a href="#"><u>On Assignment</u></a></li>
						<li><a href="#"><u>Spotlight on issues</u></a></li>
						<li><a href="#"><u>Campaigns</u></a></li>
						<li><a href="#"><u>Stay Informed</u></a></li>
					</ul>
				</div><!--/#sidebar.col-lg-4-->
			</div><!--/.row#content-->
		
	<?php
		include("includes/footer.inc.php");
	?>
	<style>
		#custom-tweet-button {
			padding: 2px 5px 2px 20px;
			background: url('https://twitter.com/favicons/favicon.ico') 1px center no-repeat;
		  }
		  #custom-tweet-button:hover {
			text-decoration: none; 
		  }
		  #tweet-text.message-control {

		  }
		  .message-control {
		  	background: rgb(204, 228, 242) url('https://twitter.com/favicons/favicon.ico') 1px center no-repeat;
		  	padding-left: 20px;
		  	-webkit-transition: all 0.2s linear;
		  	-moz-transition: all 0.2s linear;
		  	-o-transition: all 0.2s linear;
		  	
		  }
		  .message-control:hover {
		  	-webkit-transition: all 0.2s linear;
		  	-moz-transition: all 0.2s linear;
		  	-o-transition: all 0.2s linear;
		  	background-color: rgb(0,122,191);
		  	color:white;
		  	text-decoration: none;
		  }
		  #social-media-box {
		  	position: relative;
		  	left:10px;
		  	top: 100px
		  }
		#arrow-small {
			position: absolute;
			bottom: 150px;
		}
		.fixed {
			position: fixed;
		}
		.left-pane-button {
			position: absolute;
		}
		#social-media-tools {
			position: fixed;
			right: 25px;
			bottom: 0;
			width: 20%;
			z-index: 5;
		}
		#twitter-feed {
			left:0;
		}
		#follow-us {
			position: fixed;
			left: 20px;
			top: 100px;
			z-index: 9;
			width: 20%;
			height: 80%
		}
		#follow-us-twitter {
			left: 30px;
		}
		#follow-us-youtube {
			left: 15px;
			bottom: 100px;
		}
		#follow-us-fb {
			left: 40px;
		}
		#follow-us-friends {
			left: 0;
			margin-top: 100px;
		}
		#twitter-arrow {
			margin: 20px 0 0 -20px;
		}
		#nav {
			height:100px;
			position: relative;
			margin-left: 64px;
		}
		#nav ul {
			position: absolute;
			bottom:0;
			right: 0;
			margin-bottom: 3px;
			padding-bottom: 10px;
			height: 100px;
		}
		#nav ul li {
			display: inline-block;
			list-style-type: none;
			margin: 65px -1px;
		}
		#nav ul li a {
			width: inherit;
			text-align: right;
			padding: 75px 5px 10px 55px;
			font-size: 14px;
			-moz-box-shadow: inset -20px 10px 25px rgba(0,0,0,0.1);
			-webkit-box-shadow: inset -20px 10px 25px rgba(0,0,0,0.1);
			box-shadow: inset -20px 10px 25px rgba(0,0,0,0.1);
		}
		#nav ul li a.accompany {
			border-bottom: #5c9146 solid 5px;
		}
		#nav ul li a.serve {
			border-bottom: #f8c040 solid 5px;
		}
		#nav ul li a.advocate {
			border-bottom: #ab354d solid 5px;
		}
		#nav ul li a.about {
			border-bottom: #71b4d3 solid 5px;
		}
		#nav ul li a.contact {
			border-bottom: #71b4d3 solid 5px;
		}
		#nav ul li a.accompany:hover {
			border-bottom: #5c9146 solid 10px; 
			text-decoration:none;
		}
		#nav ul li a.serve:hover {
			border-bottom: #f8c040 solid 10px; 
			text-decoration:none;
		}
		#nav ul li a.advocate:hover {
			border-bottom: #ab354d solid 10px; 
			text-decoration:none;
		}
		#nav ul li a.about:hover {
			border-bottom: #71b4d3 solid 10px; 
			text-decoration:none;
		}
		#nav ul li a.contact:hover {
			border-bottom: #71b4d3 solid 10px; 
			text-decoration:none;
		}
		ul li {
			list-style-type: square;
			margin: 5px 0px;
			font-size: 12px;
		}
		#sidebar ul {
			border-top: rgba(0,0,0,0.1) solid thin; 
		}
		p {
			font-size: 16px; 
		}
		a {
			color: #2d3087;
		}
		#share-box {
			width: 100px;
			height: 50px;
			background:rgb(204, 228, 242);
		}
		#footer {
			margin-top: 25%;
			color: grey;
		}
		#footer-bottom {
			background: #71b4d3;
			padding: 5px; 
		}
		#footer-bottom, #footer-links {
			position: relative;
			z-index: 10;
		}
		#footer-bottom ul {
			width: 50%;
			margin: 0 auto;
		}
		#footer-bottom ul li {
			list-style-type: none;
			display:inline;
			margin: 0 5px;
		}
		#footer-bottom ul li a {
			color: white;
			font-size: 11px;
		}
		#footer-bottom ul li a:hover {
			text-decoration: underline;
		}
		#footer-links {
			background: white;
		}
		#footer-links-content {
			width: 50%;
			margin: 0 auto;
		}
		#footer-links-content ul.section {
			width: auto;
			margin: 10px;
			display: inline-block;
			vertical-align: top;
		}
		#footer-links-content ul li {
			font-size: 10px;
			margin: 0;
		}
		#footer-links-content ul li.first {
			color: grey;
			list-style-type: none;
			margin: 0;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			
			var s1 = new SocialMediaObject();
			$("#dummy-fb-button").click(function() {
				s1.facebookButton("grue");
			});
			var url = "https://twitter.com/share?text=" + encodeURIComponent($("#tweet-text").html()) + "&via=JesuitRefugee&url=https%3A%2F%2Fen.jrs.net";
			$("#tweet-text").attr("href", url);
		});
		
		function getSelectionText() {
			if(window.getSelection){
				return window.getSelection();
			}
			else if(document.getSelection){
				return document.getSelection();
			}
			else if(document.selection){
				return document.selection.createRange().text;
			}
		}
		
/**Complex object for social media buttons 
	@param text = the text text;
**/	
function SocialMediaObject() {
	
	// global variables to avoid code duplication
	this.facebook = "#facebook";
	this.twitter = "#twitter";
	this.tumblr = "#tumblr";
	this.box = '-box';

/**helper method for creating the Tweet button**/

	this.tweetButton = function(dummy) {
		location_div = this.twitter + this.box;
		$.ajax({
				url: "resources/tweet_button.php",
				type: "POST",
				data: {text: dummy},
				success:function(result){
					alert(result);
					$(location_div).html(result);
					},
				error:function(response){alert("Error creating Tweet Button" + response);}
			}).done(function() {
		});
	};

/**helper method for creating the FB button**/

	this.facebookButton = function(text) {
		location_div = this.facebook + this.box;
		$.ajax({
				url: "resources/fb_button.php",
				type: "POST",
				data: {text: this.text},
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
				url: "resources/tumblr_button.php",
				type: "POST",
				data: {text: this.text, blogname: blogname},
				success:function(result){
					$(location_div).html(result);
					},
				error:function(response){alert("Error creating Tumblr Button" + response);}
			}).done(function() {
		});
	};
} // end SocialMediaObject Object

/**$(document).bind("mouseup", function() {
					$("mark").contents().unwrap();
					$("mark").remove();
					var text = getSelectionText();
					var range = text.getRangeAt(0);
					var css_class = $(text.anchorNode.parentNode).attr("class");
					var newNode = document.createElement("mark");
					range.surroundContents(newNode);
					$("mark").attr('title', ' ');
					console.log($("mark"));        
					$("mark").attr('id', 'share-box');
					var url = "<a href='https://twitter.com/share?text=" + encodeURIComponent(text) + "&via=JesuitRefugee&url=https%3A%2F%2Fen.jrs.net'>Here is a link</a> ";
					$("mark").tooltip({
						open: function( event, ui ) {
						  $(ui.tooltip).append(url);
						  }
					});
					$("mark").on('mouseleave',function(event){
						event.stopImmediatePropagation();
					}).tooltip("open");
				});
				**/
	</script>
</html>