<?php /* Template name: Thanks */ ?>  

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
	<h1> Thanks! </h1>
	
	<div class="entry-content">
	
		<p> Thanks for the line! </p>
		<p> Or as certain emails from jobs I've applied for say: </p>
		<code> Thanks for the detailed note and follow-up. </code>
		<br />
		<p> Anyhoo, I don't have anything witty to say, so here's a gif of an awkward moment: <br />
		
		<img src="http://www.patrickkeaveny.com/GDE/wp-content/themes/GDEstarkers/css/images/KermitNod.gif" />
		
		<p>
		<p> And an arrow taking off:
		<div id="arrow-rocket"> </div>
	
	</div>

		
</div>
	
	<input type="hidden" value="resume-test" id="resume-test" />
	
	<aside id="sidebar"> 
	
	<?php get_sidebar('single'); ?>

	</aside>
	<div id="empty" class="clear"></div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>