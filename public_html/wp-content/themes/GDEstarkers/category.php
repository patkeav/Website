<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if (have_posts()) { ?>

	<div id="<?php single_cat_title() ?>" class="blogsAll">

		<h1><?php single_cat_title();?><?php if (is_category('blog')) { echo '(s) All'; } else { echo ' Blog'; } ?></h1>
		<h4><?php echo category_description() ?></h4>
								
				<?php while (have_posts()) : the_post(); ?>
				
					<?php if(!get_post_format()) {
						
						get_template_part('format', 'cat');
						
					}
				
					else {
						
						get_template_part('format', get_post_format());
				
					}
					
					?>
					
				<?php endwhile; ?>
				
		</div>	

<?php } else { ?>

<h1> No Content Could Be Found </h1>
</div>
<?php } ?>

<aside id="sidebar" role="complementary">

	<?php get_sidebar('universal'); ?>

</aside>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>