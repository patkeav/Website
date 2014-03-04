<?php /* Template name: Contact */ ?>  
<?php get_header(); ?>
<style>
#content { margin-top: 0px; }
</style>
<h1 style="margin-top: 150px; margin-bottom: -120px; margin-left: 10px;"> Writer of Stories and Code </h1>
<div id="all" class="brand"></div>
<div id="ap" class="brand"></div>
<div id="code" class="brand"></div>
<div id="content">
	<div id ="form-container">
		<form id="form1" name="form1" method="post" action="http://patrickkeaveny.com/cgi-sys/FormMail.cgi" >
			<input type="text" placeholder="Name." name="name" id="name" />
			<br />
			<span id="sprytextfield1">
			<input type="text" placeholder="Email(required)." name="email" id="email" />
			<br />
			<span class="textfieldRequiredMsg" style="padding: 10px; float:right; margin-top: -35px; margin-right: -10px;">*</span><br />
				<span class="textfieldInvalidFormatMsg">Invalid format.</span>
			</span>
			<br />
			<textarea name="message" id="message" rows="5" placeholder="Type your message here."></textarea><br />
			<p> 
			<div class="submit-container"><div id="arrow-right" class="arrow-rotate"></div>
				<input type="submit" name="Submit" id="submitForm" value="Submit" />
				<input name="recipient" type="hidden" id="recipient" value="pat@patrickkeaveny.com" />
				<input name="redirect" type="hidden" id="redirect" value="http://www.patrickkeaveny.com/GDE/thanks" />
				<input name="subject" type="hidden" id="subject" value="message from site!" />
			</div>
		    </p>
		</form><!--/#form1-->
	</div><!--form-container-->
</div> <!-- end content -->

<?php get_footer(); ?>