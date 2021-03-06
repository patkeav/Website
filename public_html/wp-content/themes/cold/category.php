<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) { ?>
		<div id="category-list">
			<h3>Categories</h3><br />
			<p id="blog"><a href="http://www.patrickkeaveny.com/category/blog" class="<?php if(is_category('blog')) { ?> listActive <?php } ?> clean">All</a></p><br />
			<?php
				$args = array('parent'=>4);
				$cats = get_categories($args);
				$listActive = '';
			
				foreach ($cats as $cat) {
					if (is_category('blog')) {
						$listActive = '';
					}
					else if (is_category($cat)) {
						$listActive = 'listActive';
					}
					else {
						$listActive = '';
					}
					if ($cat->cat_name == 'Blog') {
						$name = 'All';
					}
					else {
						$name = $cat->cat_name;
					}
					echo '<p id=' . $cat->slug . '><a href="' . get_category_link( $cat->term_id ) .'" class="' . $listActive . ' clean"
					>' . $name . '</a></p><br/>';
					}
				?>
		</div><!--/#category-list-->
		<div id="<?php single_cat_title() ?>" class="blogs-all">
			<h1 id="cat-title"><?php single_cat_title();?><?php if (is_category('blog')) { echo '(s) All'; } else { echo ' Blog'; } ?></h1>
			<h4 id="cat-description"><?php echo category_description(); ?></h4>
			<div class="blog-entries">
				<?php while (have_posts()) : the_post(); ?>
					<?php if(!get_post_format()) {
						get_template_part('format', 'cat');	
					}
					else {
						get_template_part('format', get_post_format());
					}
					?>				
				<?php endwhile; ?>
			</div><!--/.blog-entries-->
		</div><!--/.blogs-all-->	
	<?php } else { ?>
		<h1> No Content Could Be Found </h1>
	<?php } ?>
</div><!-- end content -->
<!--hidden input file for the Javascript to use -->
<input type="hidden" id="categoryTest" value="thisIsACategory"  />
<?php get_footer(); ?>