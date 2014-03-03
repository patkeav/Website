<?php 
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = urlencode($url);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title>Jesuit Refugee Service</title>
        <script type='text/javascript' src='http://patrickkeaveny.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
		<script type='text/javascript' src='http://patrickkeaveny.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
		<script type='text/javascript' src='http://patrickkeaveny.com/wp-content/themes/GDEstarkers/js/site.js?ver=3.8.1'></script>
		<!--<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />-->
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js'></script>
		<script src='bootstrap/js/bootstrap.min.js'></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type='text/javascript' src='http://www.google.com/jsapi'></script>
		<script src='https://apis.google.com/js/platform.js'></script>
		<link href='bootstrap/css/bootstrap.css' rel='stylesheet' />
		<link href='bootstrap/css/bootstrap-theme.min.css' rel='stylesheet' />
    	<link href="style.css" rel="stylesheet" type="text/css" />
    	
    </head>
    <body>
    	<div class="container">
    		<div id="fb-root"></div>
			<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1374631859472855";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			

			</script>
			

			<div id="follow-us" class="">
				<div id="follow-us-twitter" class="left-pane-button">
					<a href="https://www.twitter.com/JesuitRefugee" class="message-control" target="_blank">
						Follow us!
						<br />
					</a>
				</div>
				<img src="t_arrow.png" id="twitter-arrow" alt="arrow" rel="arrow" />
				<br />
				<div id="follow-us-fb" class="left-pane-button">
					<div class="fb-like" data-href="https://www.facebook.com/JesuitRefugeeService" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
				<div id="follow-us-friends" class="left-pane-button" >
					<div class="fb-like-box" data-href="http://www.facebook.com/JesuitRefugeeService" data-width="100px" data-height="200px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
				</div>
				<img src="arrow_small.png" id="arrow-small" alt="arrow" rel="arrow" />
				<div id="follow-us-youtube" class="left-pane-button">
					<div class="g-ytsubscribe" data-channel="JesuitRefugee" data-layout="full" data-count="default"></div>
				</div>
			</div>
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="col-lg-2">
    					<img src="logo.jpg" alt="JRS Logo" height="100" />
    				</div>
    				<div id="nav" class="col-lg-8">
    					<ul>
    						<li><a href="#" class="accompany">accompany</a></li>
    						<li><a href="#" class="serve">serve</a></li>
    						<li><a href="#" class="advocate" >advocate</a></li>
    						<li><a href="#" class="about">about us</a></li>
    						<li><a href="#" class="contact">contact us</a></li>
    					</ul>
    				</div>
    				<div id="dummy-header" class="col-lg-12">
    					<img src="donate.png" alt="donate" />
						<img src="header.png" alt="Newsroom" />
					</div>
    			</div>
    		</div>
			<div class="row-fluid">
			  <div class="col-lg-8">
				<div class="page-header">
					<h1><?php echo $title; ?> - <small><a id="custom-tweet-button" target="_blank" href="https://twitter.com/share?text='<?php echo $title; ?>'&url=<?php echo $url; ?>"> this story</a></small>
						<br />
					</h1>
					<small>
						Published by: <a id="custom-tweet-button" target="_blank" href="https://twitter.com/PatrickKeaveny"><?php echo $author; ?></a> on <?php echo date("M jS, 'y @ g:ia(T)", strtotime($time_stamp)); ?>
						
						<div id="twitter-box"></div><!--#twitter-box-->
					</small>
				</div><!--/.page-header-->
			</div><!--/.page-col-lg-12-->
		</div><!--/.row-->
	
		<!--  Index Page follows -->
