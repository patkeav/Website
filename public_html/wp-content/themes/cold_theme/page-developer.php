<?php get_header(); ?>
<h1> GRUEABREARA </h1>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?>>

		<header class="entry-header">
		
			<h1 class="entry-title"><?php the_title(); ?></h1>
			
		</header>
		
		<div class="entry-content">
		
			<?php the_content(); ?>
			
			<p> Below you'll find some of the work I've done. </p>
			
		</div>
		
		<h2>Developer Portfolio </h2>
		<div class="entry-portfolio" >
			<a href="http://www.cubackpack.org"  class="clean" target="_blank" title="A site I developed for the Creighton Backpack Journalism course to Uganda.">
				<img src="http://www.patrickkeaveny.com/wp-content/themes/scherzo/images/cubackpack.png" />
			</a>
			<div id="caption"> 
				<p>Website for the Backpack Journalism course to Uganda. <a class="deets">Click here</a> for more info.</p>
			</div>
			<span class="entry-portfolio-content">
				<ul>
					<li>Developed for the Creighton <a href="http://jmac.creighton.edu" target="_blank">Journalism, Media, and Computing Department</a> trip to Uganda</li>
					<li>Utilized Wordpress as a CMS</li>
					<li>Responsible for majority of back-end code and partial front-end code</li>
					<li>All Design work courtesy of <a href="http://angieandphil.com/" target="_blank">Angie Shields</a></li>
				</ul>
				<button class="showHide">Click to Hide</button>
			</span>
		</div>
		<div class="entry-portfolio">
			<a href="http://www.abovezeroclothing.com"  class="clean" target="_blank" title="A site I developed for a local clothing company. All design work by Tyson Reeder.">
				<img src="http://www.patrickkeaveny.com/wp-content/themes/scherzo/images/az.png" />
			</a>
			<div id="caption"> 
				<p>Website for AboveZero Clothing. <a class="deets">Click here</a> for more info.</p>
			</div>
			<span class="entry-portfolio-content">
				<ul>
					<li>Developed for AboveZero Clothing, a clothing company based out of Omaha</li>
					<li>Responsible for all back-end and front-end code</li>
					<li>All Design work courtesy of <a href="http://tysonreeder.com/" target="_blank">Tyson Reeder</a></li>
				</ul>
				<button class="showHide">Click to Hide</button>
			</span>
		</div>
		<div class="entry-portfolio">
			<a href="http://studioblue.creighton.edu" class="clean" target="_blank" title="This is a group I work for on campus.">
				<img src="http://www.patrickkeaveny.com/wp-content/themes/scherzo/images/studioBlue.png" />
			</a>
			<div id="caption"> 
				<p>StudioBlue (website currently under construction) <a class="deets">Click here</a> for more info.</p>
			</div>
			<span class="entry-portfolio-content">
				<ul>
					<li>We work to produce innovative, quality design for a variety of clients</li>
					<li>We offer services including web design, iOS app development, multimedia projects, print products and identity development.</li>
					<li>Responsible for development work, beginning some design work</li>
				</ul>
				<button class="showHide">Click to Hide</button>
			</span>
		</div>		
	</article>
	
<?php endwhile; ?>


</div> <!-- end content -->

<aside id="sidebar" role="complementary">

	<?php get_sidebar('universal'); ?>
	
</aside>

<?php get_footer(); ?>