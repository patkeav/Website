<?php /** Tweet Button **/

$text = $_POST["text"];
$text = 'My text is ' . $text;

$url_http = http_build_query(array(
	'url' => 'http://www.patrickkeaveny.com/Mytext',
	'text' => $text,
	'count' => 'horizontal',
	'hashtags' => 'MytextIs',
	'size' => 'large'
	));

?>


<a href="https://twitter.com/share?<?php echo $url_http; ?>" class="twitter-share-button" 
	data-related="PatrickKeaveny" data-size="large" data-lang="en" id="twitter_button">Tweet This!</a>
	
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
