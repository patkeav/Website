<?php get_header(); ?>
<?php
$cat = get_the_category();
$current_cat = $cat[0]->cat_name;

?>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?>>

		<header class="entry-header single">
		
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
			<div class="entry-meta">
				
				<!--<p>Posted by <?php the_author_posts_link(); ?> -->
				<p>Posted on <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>.</p> 
				<p><?php if ('open' == $post->comment_status) { ?><a href="#comments"><?php comments_number('Leave a comment','One comment','% comments'); ?></a>.<?php } ?></p>
				<p>Back to <a href="http://www.patrickkeaveny.com/blog/<?php echo $current_cat ?>"><?php the_category(',<br /> '); ?></a>.</p>
			</div>
			
		</header>
		
		<?php if ($post->post_excerpt != "" ) {
		
			echo "<div class=\"entry-summary\">";
	   
			the_excerpt();
	       
			echo "</div>";

			}
		?>
		
		<div class="entry-content single">
		
			<?php the_content(); ?>
			
		</div>
		
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
		<footer class="entry-footer">
		
			<div class="entry-taxonomy">
				
				<!--<p>Filed under: <?php the_category(', '); ?></p>-->
				<p><?php the_tags(); ?></p>
				
			</div> <!-- end .entry-taxonomy -->
			
			<!--<div class="pagination">
							
				<p class="next"><?php next_post_link('Next post: %link'); ?></p>
				<p class="previous"><?php previous_post_link('Previous post: %link'); ?></p>				
					
			</div> end .pagination -->
			
			<?php if ('open' == $post->comment_status) { ?>
			
				<div id="comments">
				
					<?php paginate_comments_links(); ?>
				
					<?php comments_template('/comments-custom.php'); ?>
					
				</div>
				
			<?php } ?>
			
		</footer>
		
	</article>
	
<?php endwhile; ?>

</div> <!-- end content -->

<aside id="sidebar" role="complementary">

	<?php get_sidebar('single'); ?>
	
</aside>

<?php get_footer(); ?>
