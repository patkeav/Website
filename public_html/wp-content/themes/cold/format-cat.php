<?php
$cat = get_the_category();
$current_cat = $cat[0]->slug;
$title = the_title('', '', false);

$string = preg_replace('/[^a-z]+/i', '', $title); 

?>
<div id="<?php echo $string ?>" class="cat-div <?php echo $current_cat; ?> hide">

<?php// while (have_posts()) : the_post(); ?>

<h2>
	<a href="<?php the_permalink();?>">
		<?php the_title(); ?>
	</a>
	<small>
		Published on: <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>
	</small>
</h2>
       
       <?php the_content('Keep reading ->'); ?>	

<?php // endwhile; 
?>

</div>