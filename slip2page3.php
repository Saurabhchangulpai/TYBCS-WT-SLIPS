<?php
	$FontStyle=$_COOKIE['FontStyle'];
	$FontSize=$_COOKIE['FontSize'];
	$FontColor=$_COOKIE['FontColor'];
	$bgColor=$_COOKIE['bgColor'];
	
	echo "FontStyle = ".$FontStyle."<br>FontSize = ".$FontSize."<br>FontColor = ".$FontColor."<br>bgColor = ".$bgColor;
?>
<html>
	<head>
		<style>
			p{
				font-size:<?php echo $FontSize ?>;
				font-style:<?php echo $FontStyle ?>;
				color:<?php echo $FontColor ?>;
				background-color:<?php echo $bgColor ?>;
			}
			
		</style>
	
	</head>
	<body>
		<p>Hello Respected Teacher</p>
	</body>
</html>
