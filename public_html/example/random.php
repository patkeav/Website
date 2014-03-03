<?php

$photos = array(
	'image1', 'image2', 'image3', 'image4');

$i = rand(1, count($photos));

?>


<html>
	<body>
		<div class="center">
			<img src="img<?php echo $i; ?>.jpg" />
		</div>
	</body>
</html>