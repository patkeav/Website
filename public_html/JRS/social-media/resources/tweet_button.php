<?php /** Tweet Button **/

$text = $_POST["text"];
$text = 'I just donated $' . $text . ' to @JesuitRefugee !';

$hashtags = urlencode(array('jrs', 'jesuitrefugeeservice', 'accompany', 'serve', 'advocate'));

$url_http = http_build_query(array(
	'url' => 'https://en.jrs.net/donate',
	'text' => $text,
	'count' => 'horizontal',
	'hashtags' => 'jrs',
	'size' => 'large'
	));

?>


<a href="https://twitter.com/share?<?php echo $url_http; ?>" target="_blank" class="twitter-share-button" 
	data-related="JesuitRefugee" data-size="large" data-lang="en" id="twitter_button">Tweet This?</a>
	
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
