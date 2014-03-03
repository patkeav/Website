<?php /* Template name: Home */ ?>  


<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<style>
#content {
	margin-top: 0px;
}
</style>
<h1 style="margin-top: 150px; margin-bottom: -120px; margin-left: 10px;"> Writer of Stories and Code </h1>
<div id="all" class="brand">
		
	</div>
<div id="ap" class="brand"></div>
<div id="code" class="brand"></div>

<div id="content">
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