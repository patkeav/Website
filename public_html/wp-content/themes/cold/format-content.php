
<article <?php post_class(); ?>>
	<div class="entry-content">
		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php the_permalink();?>"> 
					<?php the_title() ?>
				</a>
			</h1>
		</header>
		<p>
			<?php the_content(); ?>
		</p>
		<footer class="entry-footer">
			<?php if ('open' == $post->comment_status) { ?>
				<div id="comments">
					<?php// paginate_comments_links(); ?>
					<?php comments_template('/comments-custom.php'); ?>
				</div><!--/comments-->
			<?php } ?>
		</footer>
	</div><!--/entry-content-->
</article> 
	