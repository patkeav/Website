<?php
/*
Template Name: Home
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<div id="content">
	<h1 style="margin-top: -15px;"> Writer of Stories and Code </h1>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part('format','content'); ?>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
</div>
<aside id="sidebar"> 
	
	<?php get_sidebar('universal'); ?>

</aside>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>