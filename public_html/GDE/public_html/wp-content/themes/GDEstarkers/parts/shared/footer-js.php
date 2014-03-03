
<script type="text/javascript">


$(document).ready(function() {


		

	if ($('#resume-test').length) {
		$('#first').fadeIn();
		$('.inner-list li').click(function() {
			var id = '#' + $(this).attr('id');
			//$('.deets').not(id).hide();
			$('.deets').not(id).hide();
			$(id + '.deets').fadeIn();
		});
	
	}
	
	if ($('#pageTest').length) {
	
	}
	
	if ($('#categoryTest').length) {
	
		$('.blogsAll').css('height',($('#categoryList').height()));
		$('.more-link').addClass('clean');
		
		$('.blogsAll div').removeClass('hide');
		$('#btn-group #blog').html('Show All');
		
		$('#btn-group .button').click(function() {
			var categoryName = '.' + $(this).attr('id');
			$('#blogCategories').find(categoryName).fadeIn(200);
			$('#blogCategories div').not(categoryName).hide(); 
		});
		$('#btn-group #blog').click(function() {
			$('#blogCategories div').fadeIn();
		});
		
	}
	
	$('.submitButton').click(function() {
		$('#searchform .arrow-rotate').show();
		});
	$('#submitForm').click(function() {
		$('.submitContainer .arrow-rotate').show();
		});

	
	/*var sidePHeight = $('#sidebar p').height();
	var sidePWidth = $('#sidebar p').width();
	
	if (*/
	
}); 



function getDimension() {
if (height < 500) {
		return height / 1.1;
	}
	else {
		return height / 1.6;
	}
}
		
		//alert(getDimension() + 'px');
				
	
	/**$('#curly').css('font-size', (Math.floor(Math.random()*height)) + 'px');
	$('#curly').css('margin-top', (0 - getDimension()+ 100) + 'px');
	$('#curly').css('margin-left', (0 - getDimension()) + 'px');**/
		
	
	//alert($('#curly').css('font-size'));

	
function checkSubmit(e)
{
   if(e && e.keyCode == 13)
   {
      document.forms[0].submit();
   }
}

function loopOver() {
	$('#brandName').delay(1000).fadeIn(1000);
	$('#brandName').delay(1000).fadeOut(1000);
	
	return loopOver();
}

function thanks() {
	$('#form1').fadeOut();
	$('#thanks').delay(500).fadeIn();
	$('#contactInput').delay(500).val('THANK YOU.');
}

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");



</script>
