<html>
	<body>
		<?php
		$a=70000;
		echo gettype($a);
		settype($a,'double');
		echo '<br />';
		echo gettype($a);
		?>
	</body>
</html>
