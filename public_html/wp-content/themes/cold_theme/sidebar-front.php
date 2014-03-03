<?php if ( is_active_sidebar( 'front' ) ) : ?>

<div id="curly">}</div>
        
        <div id="front" class="sidebar">
				<p>
				<?php get_search_form();?> <br />
				</p>
				<p>
			 		<input type="button" value="Need to get in contact?" id="contactInput" />
					<div id ="formContainer">
						<form id="form1" name="form1" action="" method="post">
							<input type="text" placeholder="Name." name="name" id="name" /><br />
							<span id="sprytextfield1">
								<input type="text" placeholder="Email(required)." name="email" id="email" /><br />
								<span class="textfieldRequiredMsg" style="padding: 10px; float:right; margin-top: -35px; margin-right: -10px;">*</span><br />
								<span class="textfieldInvalidFormatMsg">Invalid format.</span><br />
							</span>
							<textarea name="message" id="message" rows="5" placeholder="Type your message here."></textarea><br />
							<input type="button" value="Submit" id="Submit" />
						</form>
					</div>
					<t id="thanks">Thanks! Your message will be responded to promptly.</t> 
				</p>

	</div>
	
	<?php endif; ?>