
<?php if ( have_comments() ) : ?>

<ol class="commentlist">
		
			<?php wp_list_comments('avatar_size=24&type=comment'); ?>
			
		</ol>
		
		<ol class="pinglist">
		
			<?php wp_list_comments('avatar_size=24&type=pings'); ?>
			
		</ol>
		
		 <?php else : // this is displayed if there are no comments so far 
	 ?>

		<?php if ('open' == $post->comment_status) : ?>
		
			<!-- If comments are open, but there are no comments. -->

		 <?php else : // comments are closed 
		 ?>
		 
			<!-- If comments are closed. -->
			
			<p class="nocomments">Comments are closed.</p>

		<?php endif; ?> <!-- if comments are open -->
		
	<?php endif; ?> <!-- end if have comments -->


<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$args = array(
		$fields = array(
	'author' => '<p class="comment-form-author">' . ( $req ? '<span class="required"></span>' : '' ) .
	            '<input id="author" name="author" type="text" placeholder="' . __( 'Name', 'domainreference' ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email"> ' . ( $req ? '<span class="required"></span>' : '' ) .
	            '<input id="email" name="email" type="text" placeholder="' . __( 'Email', 'domainreference' ) . '" size="30"' . $aria_req . ' /></p>',
	),
	'fields' => $fields,
	'comment_field' => '<p class="comment-form-comment"><textarea
	id="comment" name="comment" placeholder="" cols="45" rows="8"
	aria-required="true"></textarea></p>',
	'logged_in_as' => '',
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'Sorry, you must be 
	<a href="%s">logged in</a> to post comments. Sucks right? Well there are lots of hackers out there, gotta be careful!' ), wp_login_url(
	apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'id_form' => 'commentForm',
	'id_submit' => 'submitForm',
	'title_reply' => "See something you don't like?<br /> Something you DO like?",
	'comment_notes_before' => '', 
	'comment_notes_after' => '',
	'label_submit' => 'Gimme dat feedback!'
	);
	
comment_form($args);

?>

