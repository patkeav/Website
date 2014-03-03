<?php /* Template name: Thanks */ ?>  

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); 

?>
<style>
	#content {
		margin-top: 0px;
	}
	.brand {
		height: 50px;
	}
</style>
<h1 style="margin-top: 100px; margin-bottom: -120px; margin-left: 10px;"> Writer of Stories and Code </h1>
<div id="all" class="brand">
		
	</div>
<div id="content">
	<h1> Thanks! </h1>
	
	<div class="entry-content">
	
		<p> Thanks for the line! </p>
		<p> Or as certain emails from jobs I've applied for say: </p>
		<code> Thanks for the detailed note and follow-up. </code>
		<br />
		<p> Anyhoo, I don't have anything witty to say, so here's a gif of an awkward moment: <br />
		
		<img src="http://www.patrickkeaveny.com/GDE/wp-content/themes/GDEstarkers/css/images/KermitNod.gif" />
		
		<p>
		<p align="right" style="padding-right: 140px;"> And an arrow taking off:
		<div id="arrow-rocket"> </div>
		</p>
	</div>

		
</div>
		
	<aside id="sidebar"> 
	
	<?php get_sidebar('single'); ?>

	</aside>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>