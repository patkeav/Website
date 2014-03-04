
<script type="text/javascript">

//main document Jquery
$(document).ready(function() {

	//function for active buttons
	$('button').not('.showHide').click(function() {
		$('button').not(this).removeClass('active');
		$(this).addClass('active');
	});
		
	// Jquery for the category page
	if ($('#categoryTest').length) {
	
		$('.blogs-all').css('height',($('#category-list').height()));
		$('.more-link').addClass('clean');
		
		$('.blogs-all div').removeClass('hide');
		$('#btn-group #blog').html('Show All');
		
		$('#btn-group .button').click(function() {
			var categoryName = '.' + $(this).attr('id');
			$('#blog-categories').find(categoryName).fadeIn(200);
			$('#blog-categories div').not(categoryName).hide(); 
		});
		$('#btn-group #blog').click(function() {
			$('#blog-categories div').fadeIn();
		});
	}
	
	$('#searchform').click(function() {
		$('#searchLabel').delay(2500).fadeIn();
		});
			
		$("#resume-container a.scroll-click").click(function() {
			var target = '#resume-info .' + $(this).attr("id").toLowerCase() + '-resume';
			var target_div = $(target).offset().top - $("#site-header").height(); 
			$('html, body').animate({
				scrollTop: target_div
			}, 2000);
		});
		
		// same function as one above, but for id-grabbing instead of class-grabbing
		$("#resume-container .scroll-click-li").click(function() {
			var target = '#resume-info #' + $(this).attr("id"); 
			var target_div = $(target).offset().top - $("#site-header").height(); 
			$('html, body').animate({
				scrollTop: target_div
			}, 2000);
		});
		
		//same function as above, but for returning to top
		$("#resume-container a.return").click(function() {
			var target = '#resume-container'; 
			var target_div = $(target).offset().top - $("#site-header").height(); 
			$('html, body').animate({
				scrollTop: target_div
			}, 2000);
		});
}); 

// function that allows one to hit "enter" to submit	
function checkSubmit(e) {
   if(e && e.keyCode == 13)
   {
      document.forms[0].submit();
   }
}

// function for fading in/fading out current element continuously
function loopOver(element) {
	$(element).delay(1000).fadeIn(1000);
	$(element).delay(1000).fadeOut(1000);
	return loopOver();
}

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");

</script>
<!-- have to put the skrollr init at the end so it's loaded outside the DOM -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/skrollr.js"></script>
	<script type="text/javascript">
		skrollr.init();
	</script>
<script type="text/javascript">
