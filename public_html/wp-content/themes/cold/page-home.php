<?php /* Template name: Home */ ?>  

<?php get_header(); ?>

<h1 style=" margin-top: 172px"> Writer of Stories and Code </h1>
<div id="all" class="brand"></div>
<div id="ap" class="brand"></div>
<div id="code" class="brand"></div>
<div id="content">
	<?php if ( have_posts() ): ?>

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
</div> <!-- end content -->

<?php get_footer(); ?>