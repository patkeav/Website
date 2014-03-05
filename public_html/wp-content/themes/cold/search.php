<?php get_header(); ?>
	<div id="content">
		<?php if (have_posts()) : ?>

			<h1 class="page-title">Searching for &#8220;<?php the_search_query(); ?>&#8221; ? Here's what I found: </h1>

			<?php while (have_posts()) : the_post(); ?>
			
					<div class="cat-div ">
						<h2>
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
							<br />
							<small>
								Published on: <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
							</small>
						</h2>
						<?php the_content('Keep reading ->'); ?>	
					</div><!--$string-->
				
			<?php endwhile; ?>
		
				<div class="pagination">
							   
					<p class="next"><?php previous_posts_link('Newer search results', '0'); ?></p>
					<p class="previous"><?php next_posts_link('Older search results', '0'); ?></p>
			   
				</div> <!-- end .pagination -->

		<?php else : ?>

			<p>Shucks, I couldn't find &#8220;<?php the_search_query(); ?>&#8221; anywhere... Sad face :-( </p>

		<?php endif; ?>
	
	</div> <!-- end content -->

<?php get_footer(); ?>
