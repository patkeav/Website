<?php /** FB Button **/
require_once('php-sdk/facebook.php');

$text = $_POST["text"];
$text = 'My text is ' . $text;

/** may need to reference these later
$app_id = '142365072626890';
$secret = '37feb3b454200c1a11cbe7c8b986f438';
**/

?>
<script>
	
	window.fbAsyncInit = function() {
		var text = document.getElementById('text_value').value;
		FB.init({
				appId      : '1374631859472855', // App ID
				channelUrl : 'channel.php', // Channel File
				status     : true, // check login status
				cookie     : true, // enable cookies to allow the server to access the session
				xfbml      : true  // parse XFBML
			  });
			  // this shows up under the post text, it's basically a box for your app and what you'd like your app to say
			  // there used to be an optional "message" parameter for having a default message, but it's deprecated
			  FB.ui({ 
				method: 'feed',
				name: 'Jesuit Refugee Service',
				caption: text,
				description: ( ' I just donated to Jesuit Refugee Service!' 
			   ),
				link: 'http://www.jrs.net'
					  });
			};
		// Load the SDK Asynchronously
		(function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/all.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
</script>

<input type="hidden" id="text_value" value="<?php echo $text; ?>" />
