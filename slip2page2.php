<?php
	$FontStyle=$_GET['FontStyle'];
	$FontSize=$_GET['FontSize'];
	$FontColor=$_GET['FontColor'];
	$bgColor=$_GET['bgColor'];
	
	//setCookies
	setcookie(FontStyle,$FontStyle);
	setcookie(FontSize,$FontSize);
	setcookie(FontColor,$FontColor);
	setcookie(bgColor,$bgColor);
	
	header("Location: slip2page3.php");
	Exit();
	
	
?>
