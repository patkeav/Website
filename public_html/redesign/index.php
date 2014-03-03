<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Design-By-Day</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">

$(document).ready(function() {
	
	$('#kludgy').click(function() {
		alert('Don\'t judge me...');
	});
	$('#contactForm').click(function(){
		$('#form1').slideToggle(1000);
	});
		
});
</script>
<style type="text/css">
body {
	font-family: Helvetica, Geneva, sans-serif;
	margin: 0px;
	padding: 0px;
	color: white;
	background-image: url('../construction.png');
	/* background-image: url(images/background.png); */
	background-repeat: no-repeat;
	background-position: center;
	/*background-color: #3b5997; */
	background-color: black;
}

#container {
	
	margin-left: auto;
	margin-right: auto;
	width: 500px;
	height: 1000px;
	padding: 100px;
	padding-bottom: 0px;
}
p {
	padding: 10px;
}
p a {
	text-decoration: none;
	color: #e2f1fb;
	-webkit-transition: all 0.6s linear;
    -moz-transition: all 0.6s linear;
    -o-transition: all 10s linear;
}
p a:hover {
	color: #CCC;
	-webkit-transition: all 0.6s linear;
    -moz-transition: all 0.6s linear;
    -o-transition: all 10s linear;
}
p {
	text-align: center;
	font-size: 20px;
}
#socialmedia {
	height: 50px;
	width: 250px;
	font-size: 1px;
	margin-top: 50px;
	margin-left: auto;
	margin-right: auto;
}
#socialmedia a {
	background-image: url(../images/socialMediaSprite.png);
	background-repeat: no-repeat;
	padding: 20px;
	padding-bottom: 15px;
	margin-left: 20px;
	margin-right: 20px;
}
#socialmedia a.facebook { background-position: 0px 0px; }
#socialmedia a:hover.facebook { background-position: 0px -35px; }
#socialmedia a.twitter { background-position: -50px 0px; }
#socialmedia a:hover.twitter { background-position: -50px -35px; }
#socialmedia a.linked { background-position: -100px 0px; }
#socialmedia a:hover.linked { background-position: -100px -35px; }


#footer {
	padding-top: 50px;
	margin-left: auto;
	margin-right: auto;
	width: inherit;
}
img {
	margin-top: 40px;
}
#brand {
	margin-left: 300px;
}
#kludgy {
	width: 765px;
	margin-left: auto;
	margin-right: auto;
}
h1 a {
	font-size: 1px;
	padding: 15px;
	float: right;
	margin: 0px;
	margin-right: 300px;
	margin-top: -50px;
}
form {
	display: none;
}
</style>

<body>
<div id="container">
<!--<p> <img src="images/name.png" /> </p>
<p> <img src="images/iDoCode.png" </p>
<p> <img src="images/see.png" /></p>

<p><a href="http://www.abovezeroclothing.com" target="_blank"> Above Zero Clothing </a><br />
<br />
<a href="http://www.creightonian.com" target="_blank"> The Creightonian </a></p>

<p>&nbsp;  </p>
<p>&nbsp;  </p>
<p>&nbsp;  </p>
<p>&nbsp;  </p>


<p> <div id="kludgy" ><img src="images/dontWorry.png" /></div></p>
<p> <img src="images/patrickpic.png" /></p>
<p> <img src="images/iGotYou.png" /></p> -->
<div id="footer"><p>  keavenyp@gmail.com </p>
	
 <!-- <p> Need to get in touch? <p id="contactForm">Contact Me! </p></p>
	<p><form action="#" method="get" name="Contact" target="_self" id="form1">
      <span id="sprytextfield1">
      <input type="text" name="Name" id="Name" placeholder="name" />
      <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextfield2"><br />
      <input type="text" name="Email" id="Email" placeholder="email" />
      <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprytextarea1"> <br />
      <label for="Comments"></label>
      <textarea name="Comments" id="Comments" cols="45" rows="5" id="placeholder"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span>
    </form> -->
  <div id="socialmedia">
				 <a href="http://www.facebook.com/patrick.keaveny.7" target="_blank" class="facebook">  f </a> 
                 <a href="https://twitter.com/#!/PatrickKeaveny" target="_blank" class="twitter"> t </a>
                  <a href="http://www.linkedin.com/pub/patrick-keaveny/46/975/856 " target="_blank" class="linked">l </a>
  </div>
                 <img src="../images/designedByTDR.png" id="brand"/><h1><a href="http://www.tysonreeder.com/" target="_blank">t</a></h1>
                 
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>