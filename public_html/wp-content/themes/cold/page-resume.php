<?php /* Template name: Resume */ ?>  

<?php get_header();

$args = array('parent'=>44);
$cats = get_categories($args);
$params = 'orderby=date&orderASC'; 

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
		<div id="resume-container" 
			>
			<!--data-0="background-color:rgb(0,0,255);" 
			data-500="background-color:rgb(255,0,0);"
			-->
			
			<div id="first" class="deets">				
				<header class="entry-header">
					<h1 class="entry-title">Welcome to My R&eacute;sum&eacute;!</h1>
				</header>
				<div class="entry-content">
					<p> Feel free to browse through my R&eacute;sum&eacute;. </p>
					<p> If you need to get in touch don't hesitate to drop me a line! </p>
			
				</div>
			</div><!--#first.deets-->
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
												'order' => 'ASC' 
												); ?>
				
						<?php $posts = get_posts($category); 
						?>
				
						<?php foreach ($posts as $post) { ?>
							<?php
								$title = the_title('', '', false);
								$string = preg_replace('/[^a-z]+/i', '', $title);
							?> 	
							<li class="inner-list-item"><a href="#" id="<?php echo $string; ?>" class="scroll-click-li"><?php echo $post->post_title; ?></a></li>
						<?php } ?>
					
						</ul>
					</li>
				<?php } ?>
			</ul>
	
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
						<?php
							while($query->have_posts()) : $query->the_post(); ?>
						
								<?php
								$title = the_title('', '', false);
								$string = preg_replace('/[^a-z]+/i', '', $title);
								?> 	
								<div id="<?php echo $string; ?>" class="deets <?php echo $slugger; ?>"
									data--50-bottom-top="opacity: 0;" 
									data--50-bottom-bottom="opacity: 1;"
								">
									<header class="entry-header">
		
										<h1 class="entry-title" >
										<!--data--50-top-bottom="margin-right:150%; " 
										data--25-bottom-bottom="margin-right:0%;"-->
										
										
											<?php the_title(); ?>
											
										</h1>
										<a href=#" class="return">Return to Top</a>
									</header>
									<div class="entry-content single">
		
										<?php the_content(); ?>
							
									</div>
								</div>
					
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				<?php } ?> 
			
			</div>
			<div id="empty" class="clear"></div>
	
		</div> <!-- end resume-container -->
	</div><!--#skroll-body-->
</div><!--content-->

<?php get_footer(); ?>