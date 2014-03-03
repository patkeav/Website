<?php
$name = $_Get['&name'];
$email = $_Get['&email'];
$body = $_Get['&body'];

?>

	<form id="form1" name="form1" action="http://www.patrickkeaveny.com/cgi-sys/FormMail.cgi">
		<input type="text" id="name" value="<?php echo $name ?>" />
		<input type="text" id="email" value="<?php echo $email ?>" />
		<textarea id="message" value="<?php echo $body ?>"></textarea>
		<input name="recipient" type="hidden" id="recipient" value="pat@patrickkeaveny.com" />
		<input name="redirect" type="hidden" id="redirect" value="http://patrickkeaveny.com/thanks.php" />
		<input name="subject" type="hidden" id="subject" value="Someone Wants You." />
		<input type="submit">
	</form>