<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
</head>

<script type="text/javascript">

$(document).ready(function() {
	
	
	$('#article1').mouseover(function() {
		$('#article1').addClass('border');
	});
	$('#article1').mouseout(function() {
		$('#article1').removeClass('border');
	});
	$('#article2').mouseover(function() {
		$('#article2').addClass('border');
	});
	$('#article2').mouseout(function() {
		$('#article2').removeClass('border');
	});
	$('#article2').mouseover(function() {
		$('#article2').addClass('border');
	});
	$('#article3').mouseout(function() {
		$('#article3').removeClass('border');
	});
	$('#article3').mouseover(function() {
		$('#article3').addClass('border');
	});
	$('#article3').mouseout(function() {
		$('#article3').removeClass('border');
	});
	$('#article4').mouseover(function() {
		$('#article4').addClass('border');
	});
	$('#article4').mouseout(function() {
		$('#article4').removeClass('border');
	});

//Calculate the height of <header>
        //Use outerHeight() instead of height() if have padding
        var aboveHeight = $("#header").height();
		
	
 
	//when scroll
        $(window).scroll(function(){
			var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

	
	        //if scrolled down more than the header’s height
                if ($(window).scrollTop() > ($("#header").outerHeight()) ){
					
	        // if yes, add “fixed” class to the <nav>
	        // add padding top to the #content
             //   (value is same as the height of the nav)
                $('#nav').addClass('fixed').addClass('navhover').css('top','0').next().css(					'padding-top','60px');
				
				
 
                } else {
	        // when scroll up or less than aboveHeight,
             //   remove the “fixed” class, and the padding-top
                $('#nav').removeClass('fixed').next() .css('padding-top','0');
                }
				
		  if (scrollBottom > $("#footer").height()) {
					
	        // if yes, add “fixed” class to the <nav>
	        // add padding top to the #content
             //   (value is same as the height of the nav)
                $('#footernav').addClass('fixed').css('bottom','0').next().css(					'padding-bottom','60px');
				
 
                } else {
	        // when scroll up or less than aboveHeight,
             //   remove the “fixed” class, and the padding-top
                $("#footernav").removeClass('fixed').next() .css('padding-bottom','0');
                }
				
        
});
	
	});



</script>


<body>

	<div id = "wrapper">
		<?php include('includes/header.php'); ?>

		<div id="content">
			<div id="slideshow"><p> SLIDESHOW THINGS </p>
            </div>
            <div id="adspace"><p> ADS GO HERE </p>
            </div>

		<div id="toparticles">

			<a href="google.com"> News </a> 
				<div class="article" id="article1">
					<p> This is all news Stuff </p>
                </div>
			<a href="google.com"> Scene </a> 
				<div class="article" id="article2"><p> This is all Scene stuff </p>
            	</div>
        </div> <!-- end toparticles -->

		<div id = "bottomarticles">
			<a href="google.com"> Sports </a> 
        
				<div class="article" id="article3"><p> This is all sports stuff </p>
           		 </div>
				<a href="google.com"> Opinion </a> 
				<div class="article" id="article4"><p> This is all Opinion Stuff </p>
            	</div>
        	</div> <!-- end bottomarticles -->

		</div><!-- end content -->

		<?php include('includes/footer.php'); ?>
	</div> <!-- end wrapper -->



</body>
</html>