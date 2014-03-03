<?php get_header(); ?>

<div id="btn-group">


	<?php
	
		$cats = get_categories();
						
		
		//print_r($cats);		
		foreach ($cats as $cat) {
			echo "<button id='$cat->slug' name='$cat->cat_name' class='button'>$cat->cat_name</button>";
		}	
	?>
</div>

<?php while (have_posts()) : the_post(); ?>

	<?php if(!get_post_format()) {
		
		get_template_part('format', 'content');
		
	}

	else {
		
		
		get_template_part('format', get_post_format());

	}
	
	?>
	
<?php endwhile; ?>

</div> <!-- end content -->

<aside id="sidebar" role="complementary">

	<?php get_sidebar('universal'); ?>

	<?php get_sidebar('front'); ?>

</aside>

<?php get_footer(); ?>