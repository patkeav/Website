<?php if ( is_active_sidebar( 'universal' ) ) : ?>
        
        <div id="universal" class="sidebar">
				<div class="sidebar-info">
				<?php get_search_form();?> <br />
				<?php //dynamic_sidebar( 'universal' ); 
				?>
				</div>
				<div class="sidebar-info">
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
				</div>
				<div id="socialMedia" class="sidebar-info">
					<ul>
						<li>
							<a href="http://www.facebook.com/patrick.keaveny.7" target="_blank" class="facebook">facebook</a>
						</li>
						<li>
							<a href="http://www.linkedin.com/profile/edit?trk=hb_tab_pro_top" target="_blank" class="linkedin">linkedin</a>
						</li>
						<li>
							<a href="https://twitter.com/PatrickKeaveny" target="_blank" class="twitter">twitter</a>
						</li>
					</ul
				</div>
		</div>

<?php endif; ?>
