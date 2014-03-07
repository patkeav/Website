<?php /* Template name: Resume */ ?>  

<?php get_header();

$args = array('parent'=>44);
$cats = get_categories($args);
$params = 'orderby=date&orderDESC'; 

?>
<style>
	#content {
		height: auto;
		width: auto;
		margin-top: 200px;
	}
	.brand {
		height: 0px;
		margin-top: 150px;
	} 
	.entry-meta { text-align: left; }
</style>
<h1 style="margin-top: 150px; margin-bottom: -120px; margin-left: 10px; display:none;"> Writer of Stories and Code </h1>
	<div id="all" class="brand"></div>
<div id="content">
	
	<!--#skrollr-body is used to 'fake' scrolling on mobile devices transform:rotate(0deg);transform:rotate(360deg);-->
	<div id="skrollr-body">
		<div id="resume-container">
			<div id="first">				
				<header class="entry-header">
					<h1 class="entry-title">Welcome to My R&eacute;sum&eacute;!</h1>
				</header><!--/#entry-header-->
				<div class="entry-content">
					<p> Feel free to browse through my R&eacute;sum&eacute;. </p>
					<p> If you need to get in touch don't hesitate to drop me a line! </p>
				</div><!--/#entry-content-->
			</div><!--#first-->
			<ul id="outer-list">
				<?php foreach ($cats as $cat) { ?>
					<?php $slug = $cat->slug; ?>
					<li class="outer-list-item">
						<h2><a href="#" id="<?php echo $cat->cat_name; ?>" class="scroll-click"><?php echo $cat->cat_name; ?></a>
							<br />
							<small><?php echo $cat->category_description; ?></small>
						</h2>
						<ul id ="<?php echo $slug; ?>" class="inner-list">
				
						<?php $category = array('category' => $cat->cat_ID,
												'orderby' => 'post_date',
												'order' => 'DESC' 
												); ?>
				
						<?php $posts = get_posts($category); ?>
						
						<?php foreach ($posts as $post) { ?>
							<?php
								$title = the_title('', '', false);
								$string = preg_replace('/[^a-z]+/i', '', $title);
							?> 	
							<li class="inner-list-item"><a href="#" id="<?php echo $string; ?>" class="scroll-click-li"><?php echo $post->post_title; ?></a></li>
						<?php } ?>
					
						</ul><!--/.inner-list-->
					</li><!--/.outer-list-item-->
				<?php } ?>
			</ul><!--/#outer-list-->
			<div id="resume-info"> 
				<!--
				<p align="right" style="margin-right: 150px; padding-bottom: 25px">Thanks for coming to my site! Here, 
					<a href="http://www.patrickkeaveny.com/GDE/wp-content/themes/GDEstarkers/files/Resume.pdf">have a print version of my R&eacute;sum&eacute;</a> 
					for your troubles!
				</p>
				-->
				<?php foreach ($cats as $cat) { ?>
					<?php $slugger = $cat->slug; ?>
					<?php $query = new WP_query($params . '&category_name=' . $slugger);
					?>
					<div class="<?php echo $slugger; ?>">
						<h1> <?php echo $cat->cat_name; ?> Experience</h1>
						<?php
							while($query->have_posts()) : $query->the_post(); ?>
						
								<?php
								$title = the_title('', '', false);
								$string = preg_replace('/[^a-z]+/i', '', $title);
								?> 	
								<div id="<?php echo $string; ?>" class="deets "
									data-bottom-top="opacity: 0; transform:scaleX(0.8);" 
									data-172-top="opacity: 1; transform:scaleX(1);"

								>
									<header class="entry-header">
										<h2 class="entry-title" >
											<?php the_title(); ?>
										</h2><!--/.entry-title-->
										<a href=#" class="return">Return to Top</a>
									</header><!--/.entry-header-->
									<div class="entry-content single">
		
										<?php the_content(); ?>
							
									</div><!--/.entry-content-->
								</div><!--/.deets-->
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				<?php } ?> 
			</div><!--/#resume-info-->
			<div id="empty" class="clear"></div>
		</div> <!-- end resume-container -->
	</div><!--#skroll-body-->
</div><!--content-->

<?php get_footer(); ?>