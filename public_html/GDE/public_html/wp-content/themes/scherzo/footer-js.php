
<script type="text/javascript">


$(document).ready(function() {

	$('button').not('.showHide').click(function() {
		$('button').not(this).removeClass('active');
		$(this).addClass('active');
	});
	
	$('img').parent().addClass('clean');

	if (window.outerWidth < 1300) {
		$('#curly').addClass('hide');
		$('#sidebar').addClass('cropped');

		
		
	}
	if (window.outerWidth > 1300) {
		$('#sidebar').addClass('full');
	}
	
	if ($('#pageTest').length) {
	
		$('#journalism').click(function() {
			$('.portfolio').not('#journalismPort').hide();
			$('#journalismPort').fadeIn(200);
			$('#hideAll').delay(1500).show();
		});
		$('#developer').click(function() {
			$('.portfolio').not('#developerPort').hide();
			$('#developerPort').fadeIn(200);
			$('#hideAll').delay(1500).show();
		});
	
		$('.portfolio #caption').slideUp();
		
		$('.portfolio .image').hover(
			function() {
				var portEntry = '#' + $(this).attr('id');
				$(portEntry + ' #caption').slideDown(100);
				$(portEntry + ' .deets').click(function() {
					$(portEntry + ' .deetsContent').slideDown(50);	
					$(portEntry + ' .deetsContent button').show();
				});
			$(portEntry + ' .deetsContent button').click(function() {
					$(portEntry + ' .deetsContent').slideUp(50);
				});
			},
			function() {
				var portEntry = '#' + $(this).attr('id');
				$(portEntry + ' #caption').slideUp(50);
			}
		);
			
		
		$('.entryRes #show').click(function() {
			var id = '#' + $(this).parent().attr('id');
			$(id + ' .deetsContent').slideDown(50);
			$(this).hide();
			$(id + ' #hide').show();
		});
		$('.entryRes #hide').click(function() {
			var id = '#' + $(this).parent().attr('id');
			$(id + ' .deetsContent').slideUp(50);
			$(this).hide();
			$(id + ' #show').show();
		});
		
		$('#hideAll').click(function() {
			$('.portfolio').hide();
			$('#hideAll').hide();
		});
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
	
	$('#searchform').click(function() {
		$('#searchLabel').delay(2500).fadeIn();
		});

	$('#contactInput').click(function() {
		$('#sidebar input').not('#Submit').val('');
		$('#sidebar textarea').val('');
		$('#thanks').hide();
		$('#form1').slideToggle(275);
		$('#contactInput').val('Click to Collapse');
		$('#contactInput').click(function() {
			$('#contactInput').val('Need to get in contact?');
			});
		});
	
		$("#form1").click(function() {  
			var name = $('input#name').val();
			var email = $('input#email').val();
			var body = $('textarea#message').val();
		// validate and process form here   
			var dataString = 'name='+ name + '&email=' + email + '&body=' + body;  /*&email=' + email + '&phone=' + phone;    "<input name='recipient' type='hidden' id='recipient' value='pat@patrickkeaveny.com' /> <input name='redirect' type='hidden' id='redirect' value='http://patrickkeaveny.com/thanks.php' /> <input name='subject' type='hidden' id='subject' value='Someone Wants You.' /> <input type='submit' name='Submit' id='Submit' value='Submit' onclick='thanks()' />" */
				$.ajax({  
					type: "GET",  
					url: "http://patrickkeaveny.com/wp-content/themes/scherzo/process.php?",  
					data: dataString,  
					success: thanks()
				});
				return false; 
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
