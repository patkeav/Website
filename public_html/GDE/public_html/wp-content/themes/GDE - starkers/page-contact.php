<?php /* Template name: Contact */ ?>  


<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<style>
#content { margin-top: 0px; }
.brand { margin-top: 50px; }
</style>

<div id="all" class="brand">
		<h1> Writer of Stories and Code </h1>
	</div>
<div id="ap" class="brand"></div>
<div id="code" class="brand"></div>

<div id="content"> 
<ol>
<?php $args = array(
		
		); 
	
	comment_form($args); ?>
	
<aside id="sidebar"> 
	
	<?php get_sidebar('universal'); ?>

</aside>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>