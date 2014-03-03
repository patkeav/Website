<!doctype html>

<html <?php language_attributes(); ?>>

	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		
		<title><?php wp_title(' &mdash; ',true,'right'); ?><?php bloginfo('name'); ?></title>

		<?php if ( is_home() ) {?>
			
			<meta name="description" content="<?php bloginfo('description'); ?>">
						
		<?php } ?>
		
		<!--[if lt IE 9]>
		
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			
		<![endif]-->

		<link href="http://www.patrickkeaveny.com/wp-content/themes/scherzo/reset.css" rel="stylesheet">
		<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
		<link href="http://www.patrickkeaveny.com/wp-content/themes/scherzo/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script src="http://www.patrickkeaveny.com/wp-content/themes/scherzo/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

		<?php wp_head(); ?>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34604482-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	
	<body <?php body_class(); ?>>
		
		<div id="wrapper">

			<!--<a class="header-link" href="<?php //echo home_url(); ?>" rel="index" title="Go to home page">-->
	
				<header id="site-header" role="banner">
				
					<div id="branding">
						<a href="http://www.patrickkeaveny.com/index.php"><img src="http://www.patrickkeaveny.com/wp-content/themes/scherzo/images/logo.png" alt="logo" class=""></a>						
					</div> <!-- end #branding -->
					
					<?php 
					$options = array('about', 'portfolio', 'blog');
					$args = array(
						'menu' => 'navigation',
						'container' => 'nav',
						'container_class' => '',
						'menu_class' => ''
						); ?>
						
					<?php wp_nav_menu( $args ); ?> 
					<h3 id="brandName"> Patrick C. Keaveny</h3>
					
				</header>
                
				
			</a>
		
			<div id="content" role="main">
