<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	
	
	register_sidebar(
			array(
				'id' => 'universal',
				'name' => 'Universal',
				'description' => 'Widgets placed here will be displayed on every page of your blog',
				'before_widget' => '<section id="%1$s" class="widgetContainer %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h1 class="widgetTitle">',
				'after_title' => '</h1>'
			)
		);
	register_sidebar(
			array(
				'id' => 'single',
				'name' => 'Single',
				'description' => 'Widgets placed here will be displayed on one page of your blog',
				'before_widget' => '<section id="%1$s" class="widgetContainer %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h1 class="widgetTitle">',
				'after_title' => '</h1>'
			)
		);
	register_sidebar(
			array(
				'id' => 'header',
				'name' => 'Header',
				'description' => 'Widgets placed here will be displayed on the head of your blog',
				'before_widget' => '<section id="%1$s" class="widgetContainer %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h1 class="widgetTitle">',
				'after_title' => '</h1>'
			)
		);
		
	register_sidebar(
			array(
				'id' => 'resume',
				'name' => 'Resume',
				'description' => 'Widgets placed here will be displayed in the Resume',
				'before_widget' => '<ul id="%1$s" class="deets %2$s">',
				'after_widget' => '</ul>',
				'before_title' => '<h1 class="resume-title">',
				'after_title' => '</h1>'
			)
		);

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
