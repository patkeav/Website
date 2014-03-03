<?php
/*
Template Name: Journalist
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<h1 class="brand-title"> Writer of Stories and Code </h1>
<div id="all" class="brand">
		
	</div>
<div id="ap" class="brand"></div>
<div id="code" class="brand"></div>

<div id="content" class="home-content">
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part('format','content'); ?>
	</li>
<?php endwhile; ?>
</ol>
</div>
<aside id="sidebar" class="sidebar-universal"> 
	
	<?php get_sidebar('universal'); ?>

</aside>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>