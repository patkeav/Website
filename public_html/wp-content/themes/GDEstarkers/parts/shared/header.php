
<header id="branding">
	<div id="logo">
		<h1><a href="/GDE"><?php bloginfo( 'name' ); ?></a></h1>
		<?php bloginfo( 'description' ); ?>
	
		<?php $args = array( 'menu' => 'navigation',
				   		 'container' => 'nav',
			       		 'container_class' => '',
				   		 'menu_class' => ''
						); ?>
		
		<div id="main-nav">				
					<?php wp_nav_menu( $args ); ?>
		</div>
	</div>
<aside id="sidebar-header"> 
	
	<?php dynamic_sidebar('header'); ?>
	
</aside> 
</header>

<div id = "wrapper">
