<?php /* Template name: Resume */ ?>  

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); 

$args = array('parent'=>7);
$cats = get_categories($args);
$params = 'orderby=date&orderASC'; 

?>
<style>
	#content {
		height: auto;
		width: auto;
		margin-top: 25px;
	}
	.brand {
		height: 50px;
	}
	.entry-meta { text-align: left; }
</style>
<h1 style="margin-top: 100px; margin-bottom: -120px; margin-left: 10px;"> Writer of Stories and Code </h1>
<div id="all" class="brand">
		
	</div>
<div id="content">
	<h1> Resume </h1>
	
	<div id="resume-container">
	
		<ul id="outer-list">
			<?php foreach ($cats as $cat) { ?>
				<?php $slug = $cat->slug; ?>
				<li><h2><?php echo $cat->cat_name; ?></h2>
					<ul id ="<?php echo $slug; ?>" class="inner-list">
					
					<?php $category = array('category' => $cat->cat_ID,
											'orderby' => 'post_date',
											'order' => 'ASC' 
											); ?>
					
					<?php $posts = get_posts($category); 
					?>
					
					<?php foreach ($posts as $post) { ?>
						<?php
							$title = the_title('', '', false);
							$string = preg_replace('/[^a-z]+/i', '', $title);
						?> 	
						<li id="<?php echo $string; ?>"><a href="#"><?php echo $post->post_title; ?></a></li>
					<?php } ?>
						
					</ul>
				</li>
			<?php } ?>
		</ul>
		
		<div id="resume-info"> <p align="right" style="margin-right: 150px; padding-bottom: 25px">Thanks for coming to my site! Here, <a href="http://www.patrickkeaveny.com/GDE/wp-content/themes/GDEstarkers/files/Resume.pdf">have a print version of my R&eacute;sum&eacute;</a> for your troubles!</p>
				
			<div id="first" class="deets">				
				<header class="entry-header">
			
					<h1 class="entry-title">Welcome to My R&eacute;sum&eacute;</h1>
					
					<div class="entry-meta">
						
					</div>
					
				</header>
				<div class="entry-content">
					<p> Feel free to browse through my R&eacute;sum&eacute;. </p>
					<p> If you need to get in touch don't hesitate to drop me a line! </p>
					
				</div>
			</div>
			<?php foreach ($cats as $cat) { ?>
				<?php $slugger = $cat->slug; ?>
				<?php $query = new WP_query($params . '&category_name=' . $slugger);
					while($query->have_posts()) : $query->the_post(); ?>
							
						<?php
						$title = the_title('', '', false);
						$string = preg_replace('/[^a-z]+/i', '', $title);
						?> 	
						<div id="<?php echo $string; ?>" class="deets <?php echo $slugger; ?>">
							<header class="entry-header">
			
								<h1 class="entry-title"><?php the_title(); ?></h1>
								
								<div class="entry-meta">
									<p><?php echo $cat->category_description; ?></p>
								</div>
								
							</header>
							<div class="entry-content single">
			
								<?php the_content(); ?>
								
							</div>
						</div>
						
					<?php endwhile;
					wp_reset_postdata(); ?>
				
		 	<?php } ?>
		 		
		</div>
		<div id="empty" class="clear"></div>
		
	</div>
	
	<input type="hidden" value="resume-test" id="resume-test" />
	
	<aside id="sidebar"> 
	
	<?php get_sidebar('single'); ?>

	</aside>
	<div id="empty" class="clear"></div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>