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

	<div id="blogCategories">
		<?php global $post;
		$custom_posts = get_posts();	

		foreach ($custom_posts as $post) : setup_postdata($post);
			
			$cat = get_the_category();	

			$current_cat = $cat[0]->slug;

				?>
				<div id="<?php the_title() ?>" class="cat-div <?php echo $current_cat; ?> hide">
				
				
				
				<h2>
					<a href="<?php the_permalink();?>">
						<?php the_title(); ?>
					</a>
				</h2>
					   
					   <?php the_excerpt(); ?>	
				
				
				</div>						
			
		<?php endforeach; ?>
	
	</div>



</div> <!-- end content -->

<aside id="sidebar" role="complementary">

	<?php get_sidebar('universal'); ?>

	<?php get_sidebar('front'); ?>

</aside>
<input type="hidden" id="categoryTest" value="thisIsACategory"  />
<?php get_footer(); ?>
