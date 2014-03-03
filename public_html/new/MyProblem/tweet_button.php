/** Tweet Button **/
<?php

$url_http = http_build_query(array(
	'url' => 'http://www.patrickkeaveny.com/MyProblem',
	'text' => 'My Problem Is',
	'count' => 'horizontal',
	'hashtags' => 'MyProblemIs',
	'size' => 'large'
	));

echo $problem;

?>


<a href="https://twitter.com/share?<?php echo $url_http; ?>" class="twitter-share-button" 
						data-related="PatrickKeaveny" data-size="large" data-lang="en" id="twitter_button">Tweet</a>